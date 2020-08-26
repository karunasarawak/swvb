<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Installment;
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
        $payload['downpayments']=DB::table('downpayments')
        ->where('install_id',$id)
        ->leftJoin('invoices','downpayments.inv_id','invoices.inv_id')
        ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        ->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->get();
        $paid=0;
        $payload['total_dp']=0;

        $payload['invoices']=DB::table('invoices')
        ->where('type', 'Installment')
        ->where('mbrship_id', $id)->whereDate('issue_date', '<=', date('Y-m-d'))->get();
       
        $j=1;
         $date = date('Y-m-d');
        $current_installment_amt = DB::table('invoices')
        ->where('type', 'Installment')
        ->where('mbrship_id', $id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('total');
        foreach($payload['downpayments'] as $dp){
          if(!empty($dp->receipt_id)){
            $paid+=$dp->dpymt;
          }
          $payload['total_dp']+=$dp->dpymt;
        }
        $net=$payload['installment']->net_price;
        $net-=$payload['total_dp'];
        $current_net_paid=$current_installment_amt*100/($payload['installment']->admin_charges+100);

        $payload['final_net']=$net-$current_net_paid;
      
        $payload['admin_charge']=round($payload['installment']->admin_charges/100*$net,2);
        $payload['admin_charge_month']=round($payload['admin_charge']/$payload['installment']->install_duration,2);
        $payload['installamt']=round(($net+$payload['admin_charge'])/$payload['installment']->install_duration,2);
        $payload['final_net']=$payload['installment']->net_price;
        $payload['term']=floor($current_net_paid/$payload['installamt']);
       /*
        $payload['schedules']= DB::table('installment_ent_point_schedules')
        ->leftjoin('invoices','installment_ent_point_schedules.inv_id','invoices.inv_id')
        ->leftjoin('invoices_receipts','invoices_receipts.inv_id','invoices.inv_id')
        ->leftjoin('receipts','receipts.receipt_id','invoices_receipts.receipt_id')
        ->where('install_id',$id)
        ->orderBy('term','ASC')
        ->get();
        foreach($payload['schedules'] as $s){
          if(!empty($s->receipt_id)){
            $paid+=($payload['installamt']-$payload['admin_charge_month']);
            $payload['final_net']-=($payload['installamt']-$payload['admin_charge_month']);

          }
        }
        */

        
        $payload['paid']=$paid/$payload['installment']->net_price*100;
        $payload['packages']=DB::table('packages')->get();
        $interest=DB::table('installment_interests')->orderBy('instal_duration','ASC')->get();
        $payload['interest']=$interest[0]->ii_id;
       


        foreach($interest as $int){
          $payload['interest_durations'][$int->ii_id]=$int->instal_duration;
          $payload['interest_rates'][$int->ii_id]=$int->interest_rate;
          $payload['interests'][$int->interest_rate]=$int->interest_rate;
        }
        
        return view('pages.installmentschedule-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs,'payload'=>$payload]);
      }

      public function save(Request $request,$id){
        Installment::where('install_id',$id)->update($request->get('installment'));
        return redirect('installment/'.$id.'/details');

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
