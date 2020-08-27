<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Installment;
use App\InstallmentSchedule;
use Redirect;

class InstallmentController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Installment Schedule"],["name" => "All"]
        ];
        $installment = DB::table('installments')
        ->join('memberships','installments.mbrship_id','memberships.mbrship_id')
        ->join('leads','memberships.lead_id1','leads.lead_id')
        ->join('packages','memberships.package_id','packages.package_id')
        ->get();

        return view('pages.installmentschedule-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'installment'=>$installment]);
      }  

      public function pendingapproval(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Installment Schedule"],["name" => "All"]
        ];
        $installment = DB::table('installments')
        ->join('memberships','installments.mbrship_id','memberships.mbrship_id')
        ->join('leads','memberships.lead_id1','leads.lead_id')
        ->join('packages','memberships.package_id','packages.package_id')
        ->wher('type','payment schedule')
        ->get();

        return view('pages.installmentschedule-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'installment'=>$installment]);
      }  

      public function newRefund(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "New Installment Schedule"]
        ];
       
    
        return view('pages.installmentschedule-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      
      public function details($id){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Details"]
        ];
        $payload['installment'] = DB::table('installments')
        ->join('memberships','installments.mbrship_id','memberships.mbrship_id')
        ->join('leads','memberships.lead_id1','leads.lead_id')
        ->join('packages','memberships.package_id','packages.package_id')
        ->where('install_id',$id)
        ->first();
        if($payload['installment']->type=='payment schedule'){
          return redirect('installment/'.$payload['installment']->install_id.'/rescheduledetails');  
        }
        $payload['downpayments']=DB::table('downpayments')
        ->where('install_id',$id)
        ->leftJoin('invoices','downpayments.inv_id','invoices.inv_id')
        ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        ->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->get();
        $paid=0;
        $payload['total_dp']=0;
        foreach($payload['downpayments'] as $dp){
          if(!empty($dp->receipt_id)){
            $paid+=$dp->dpymt;
          }
          $payload['total_dp']+=$dp->dpymt;
        }

        $payload['schedules']=DB::table('installment_schedules')
        ->where('install_id',$id)
       ->leftJoin('invoices','installment_schedules.inv_id','invoices.inv_id')
        ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        ->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->orderBy('installment_schedules.term','ASC')
        ->get();
        $payload['paid_net']=0;
        foreach($payload['schedules'] as $dp){
          if(!empty($dp->invoice_id)){
            $paid+=$dp->net;
            $payload['last_term']=$dp->term;
          }
        }
        $payload['paid']=$paid/$payload['installment']->net_price*100;
        $payload['packages']=DB::table('packages')->get();
        $interest=DB::table('installment_interests')->orderBy('instal_duration','ASC')->get();

        return view('pages.installmentschedule-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function approve($id){
        $new=Installment::where('install_id',$id)
        ->join('memberships','installments.mbrship_id','memberships.mbrship_id')
        ->join('leads','memberships.lead_id1','leads.lead_id')
        ->join('packages','memberships.package_id','packages.package_id')
        ->first();
        $net=$new->net_price;

        $old = DB::table('installments')
        ->where('mbrship_id',$new->mbrship_id)
        ->where('type','payment')
        ->first();
        $nid=$new->install_id;
        $oldid=$old->install_id;
        //replace the old
        DB::table('installments')
        ->where('mbrship_id',$new->mbrship_id)
        ->where('type','payment')->delete();
        $new->install_id=$oldid;
        $new->save();

        DB::table('downpayments')->where('install',$nid)->update(['install_id'=>$old->install_id]);
        
        DB::table('installment_schedules')
        ->where('install_id',$oid)
       ->whereNull('inv_id')
        ->delete();

        DB::table('installment_schedules')
        ->where('install_id',$nid)
        ->update(['install_id'=>$oid]);

        $delete=DB::table('installments')->where('mbrship_id',$payload['installment']->mbrship_id)
        ->where('type','payment schedule')->get();
        if($delete){
          foreach($delete as $d){
            $id=$d->install_id;
            DB::table('installment_schedules')
            ->where('install_id',$id)
            ->delete();
            DB::table('downpayments')
            ->where('install_id',$id)
            ->delete();
            DB::table('installments')
            ->where('install_id',$id)->delete();
          }
        }

        return redirect('installment');
      }

      public function reject($id){
        DB::table('installment_schedules')
        ->where('install_id',$id)
        ->delete();
        DB::table('downpayments')->where('install_id',$id)->delete();
        DB::table('installments')
        ->where('install_id',$id)->delete();
        return redirect('/installment');
      }

      public function save(Request $request,$id){
        $data=$request->get('installment');
        
        $i1=Installment::where('install_id',$id)->first();
        $data['mbrship_id']=$i1->mbrship_id;
        $data['package_price']=$i1->package_price;
        $data['type']='payment schedule';
        $i=Installment::create($data);
        foreach($request['downpayments'] as $dp){
          if(!empty($dp['dpymt'])){
            $dp['install_id']=$i->install_id;
            DB::table('downpayments')->insert($dp);
          }
        }

        $payload['installment'] = DB::table('installments')
        ->join('memberships','installments.mbrship_id','memberships.mbrship_id')
        ->join('leads','memberships.lead_id1','leads.lead_id')
        ->join('packages','memberships.package_id','packages.package_id')
        ->where('install_id',$i->install_id)
        ->first();
        $ids=[$i->install_id];
        $payload['oinstallments'] = DB::table('installments')
        ->where('install_id',$id)
        ->where('type','payment')
        ->first();
        $ids[]=$payload['oinstallments']->install_id;

        $payload['downpayments']=DB::table('downpayments')
        ->whereIn('install_id',$ids)
        ->leftJoin('invoices','downpayments.inv_id','invoices.inv_id')
        ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        ->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->get();

        $net=$payload['installment']->net_price;
        $payload['total_dp']=0;
        $paid=0;
        foreach($payload['downpayments'] as $dp){
          if(!empty($dp->receipt_id)){
            $paid+=$dp->dpymt;
          }
          $payload['total_dp']+=$dp->dpymt;
          $net-=$dp->dpymt;
        }

        $payload['schedules']=DB::table('installment_schedules')
        ->where('install_id',$id)
       ->leftJoin('invoices','installment_schedules.inv_id','invoices.inv_id')
       // ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        //->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->orderBy('installment_schedules.term','ASC')
        ->get();
        $payload['paid_net']=0;
        $k=0;
        foreach($payload['schedules'] as $dp){
          if(!empty($dp->inv_id)){
            $paid+=$dp->net;
            $net-=$dp->net;
            $dp->bank_charge=0;
            $k=$dp->term;
          }
        }
        $admin_charges=round($net*$payload['installment']->admin_charges/100);
        $bal=round($net+$admin_charges,2);
        DB::table('installments')->where('install_id',$i->install_id)->update(['outstanding'=>$bal]);
        
        InstallmentSchedule::schedule($i->install_id,$net,$payload['installment']->admin_charges,$payload['installment']->install_duration,date('Y-m-d'),0,$k);
        return redirect('installment/'.$i->install_id.'/rescheduledetails');     
      }

      public function showreschedule($id){
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Reshedule Details"]
        ];
        $payload['installment'] = DB::table('installments')
        ->join('memberships','installments.mbrship_id','memberships.mbrship_id')
        ->join('leads','memberships.lead_id1','leads.lead_id')
        ->join('packages','memberships.package_id','packages.package_id')
        ->where('install_id',$id)
        ->first();
        $ids=[$id];
        $payload['oinstallments'] = DB::table('installments')
        ->where('mbrship_id',$payload['installment']->mbrship_id)
        ->where('type','payment')
        ->first();
        if(!empty($payload['oinstallments']->install_id)){
          $ids[]=$payload['oinstallments']->install_id;
        }

        $payload['downpayments']=DB::table('downpayments')
        ->whereIn('install_id',$ids)
        ->leftJoin('invoices','downpayments.inv_id','invoices.inv_id')
        ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        ->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->get();
        $net=$payload['installment']->net_price;
        $payload['total_dp']=0;
        $paid=0;
        foreach($payload['downpayments'] as $dp){
          if(!empty($dp->receipt_id)){
            $paid+=$dp->dpymt;
          }
          $payload['total_dp']+=$dp->dpymt;
          $net-=$dp->dpymt;
        }

        $payload['schedules']=DB::table('installment_schedules')
        ->where('install_id',$id)
       ->leftJoin('invoices','installment_schedules.inv_id','invoices.inv_id')
       // ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        //->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->orderBy('installment_schedules.term','ASC')
        ->get();
        /*
        $payload['paid_net']=0;
        $k=0;
        foreach($payload['schedules'] as $dp){
          if(!empty($dp->inv_id)){
            $paid+=$dp->net;
            $net-=$dp->net;
            $dp->bank_charge=0;
            $k=$dp->term;
            $schedule[]=$dp;
          }
        }
        unset($payload['schedules']);
        //unset($payload['downpayments']);
        $duration=$payload['installment']->install_duration-$k;
        $k++;
        $admin_charge=round($payload['installment']->admin_charges*$net/100,2);
        $admin_charge_month= round($admin_charge/$duration,2);
       // $net_month=round($net/$duration,2);
        $bal=round($net+$admin_charge,2);
        $bal_month=$bal/$duration;
        $net_month=round($bal_month-$admin_charge_month,2);
        $payload['bal']=$bal;
        $date=date('Y-m-d');
        while($k<$payload['installment']->install_duration){
          $admin_charge-=$admin_charge_month;
          $bal-=$net_month;
          $bal-=$admin_charge_month;
          $dp=array();
          $dp['issue_date']=null;
         $dp['term']=$k;
         $dp['inv_no']=null;
         $dp['net']=$net_month;
         $dp['bank_charge']=$admin_charge_month;
         $dp['balance']=$bal;
         $dp['projected_alloc_date']=$date;
         $dp['alloc_date']=$date;
         
         $schedule[]=json_decode(json_encode($dp));
          $date=date('Y-m-d',strtotime($date.'+1month'));
          $k++;
        }

        $dp['term']=$k;
        $dp['net']=round($bal-$admin_charge,2);
        $dp['bank_charge']=round($admin_charge,2);
        $dp['balance']=0;
        $dp['projected_alloc_date']=$date;
        $dp['alloc_date']=$date;
        $schedule[]=json_decode(json_encode($dp));

        $payload['schedules']=$schedule;
*/
        $payload['paid']=$paid/$payload['installment']->net_price*100;
        $payload['packages']=DB::table('packages')->get();
        $interest=DB::table('installment_interests')->orderBy('instal_duration','ASC')->get();

        return view('pages.installmentreschedule-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function calculator(){
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Calculator"]
        ];
    
        $ps = DB::table('packages')->get();
        foreach($ps as $pd){
            $payload['packages'][$pd->package_id]=$pd->package;
            $payload['prices'][$pd->package_id]=$pd->package_price;
        }
        $interest=DB::table('installment_interests')->orderBy('instal_duration','ASC')->get();
        $payload['interest']=$interest[0]->ii_id;

        foreach($interest as $int){
          $payload['interest_durations'][$int->ii_id]=$int->instal_duration;
          $payload['interest_rates'][$int->ii_id]=$int->interest_rate;
          $payload['interests'][$int->interest_rate]=$int->interest_rate;
        }

        return view('pages.installmentschedule-calculator',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }
  

      public function amfdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "AMF Schedule"],["name" => "AMF Schedule Detail"]
        ];
    
    
        return view('pages.amfschedule-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      public function amfall(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "AMF Schedule"],["name" => "All"]
        ];
    
    
        return view('pages.installment-amfall',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

}
