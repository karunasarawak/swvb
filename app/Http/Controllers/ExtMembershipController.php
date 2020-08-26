<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\IiReserveUnit;
use App\IiReservation;
use App\Reservation;
use App\ReservationRoom;
use App\RciBulkBanking;
use App\RcibbReservation;

class ExtMembershipController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "All"]
        ];
    
        return view('pages.extmembership-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
        // return view('pages.extmembership-reserveunitdbr', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

    public function enrolldetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.enrollment-batch-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
        // return view('pages.extmembership-reserveunitdbr', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      } 

      public function iiruall(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "IIRU"]
        ];

        $iiru=IiReserveUnit::get();
    
        return view('pages.iiru-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'iiru'=>$iiru]);
      } 

      public function iirunew(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "IIRU New"]
        ];
        $payload['travel_agents']=DB::table('travel_agents')->get();
        $payload['accommodations']=DB::table('accommodations')->get();
        $payload['reservation_types']=DB::table('reservation_types')->get();

        return view('pages.iiru-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'payload'=>$payload]);
      } 

      public function iirusaveold(Request $request,$id){
        $roomm=ReservationRoom::where('rsvn_room_id',$id);
       
        $roomm->update($request->get('room'));
        $room=$roomm->first();
        Reservation::where('rsvn_id',$room->rsvn_id)->update($request->get('reservation'));
        $ir=IiReservation::where('rsvn_id',$room->rsvn_id);
        $ir->update($request->get('iiru'));
        $ird=$ir->first();
        return redirect('extmembership/iiru/details/'.$ird->iiru_id);
      }

      public function iiruedit($id){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "IIRU EDIT"]
        ];
        
        $payload['data']['room']=ReservationRoom::where('rsvn_room_id',$id)->first();
        $payload['data']['iiru']=IiReservation::where('rsvn_id',$payload['data']['room']->rsvn_id)->first();
        $payload['data']['reservation']=$payload['data']['iiru']->reservation;

        $payload['travel_agents']=DB::table('travel_agents')->get();
        $payload['accommodations']=DB::table('accommodations')->get();
        $payload['reservation_types']=DB::table('reservation_types')->get();
        $payload['inventories']=[];
        $payload['unit_types']=[];
        $payload['bed_types']=[];
        $uts=DB::table('unit_types')->where('accom_id',$payload['data']['iiru']->reservation->accom_id)->get();
        foreach($uts as $ut){
          $utd[$ut->unit_type_id]=$ut->unit_type;
          $invs=DB::table('inventories')->where('unit_type_id',$ut->unit_type_id)->get();
          foreach($invs as $inv){
            $opt='<option value="'.$inv->inventory_id.'"';
            if($payload['data']['room']->room_no==$inv->unit_no){
              $opt.=' selected="selected" ';
            }
            $opt.='>'.$inv->unit_no.'</option>';
            $payload['inventories'][]=$opt;
            $utc[$ut->unit_type_id][]='inv'.$inv->inventory_id;
          }
          $bed=DB::table('bed_types')->where('bed_type_id',$ut->bed_type_id)->first();
          $bedd[$bed->bed_type_id]=$bed->bed_type;
          $bedc[$bed->bed_type_id][]='unittype'.$ut->unit_type_id;
        }
        if(!empty($utd)){
          foreach($utd as $utv=>$utl){
            $opt='<option value="'.$utv.'" class="inv '.implode(' ',$utc[$utv]).'"';
            if($payload['data']['room']->unit_type_id==$utv){
              $opt.=' selected="selected" ';
            }
            $opt.='>'.$utl.'</option>';
            $payload['unit_types'][]= $opt;
          }
        }
        if(!empty($bedd)){
          foreach($bedd as $utv=>$utl){
            $opt='<option value="'.$utv.'" class="unittype '.implode(' ',$bedc[$utv]).'"';
            if($payload['data']['room']->bed_type_id==$utv){
              $opt.=' selected="selected" ';
            }
            $opt.='>'.$utl.'</option>';
            $payload['bed_types'][]=$opt;
          }
        }

        return view('pages.iiru-edit', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'payload'=>$payload,'id'=>$id]);
      }
      
      public function iirudetails($id){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "IIRU Details"]
        ];
        $payload['ir']=IiReservation::where('iiru_id',$id)->get();
        $payload['id']=$id;
        
        $bt=DB::table('bed_types')->get();
        foreach($bt as $b){
          $payload['bed_types'][$b->bed_type_id]=$b->bed_type_id;
        }
        $ut=DB::table('unit_types')->get();
        foreach($ut as $u){
          $payload['unit_types'][$u->unit_type_id]=$u;
        }

        return view('pages.iiru-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'payload'=>$payload]);
      } 

      public function iirusavenew(Request $request){
        $iiru=new IiReserveUnit();
        $iiru->year=$request->year;
        $iiru->status=$request->status;
        $iiru->save();
        foreach($request->room as $r){

          $ir=new IiReservation();
          $ir->iiru_id=$iiru->id;

          $rd=new Reservation();
          $rd->accom_id=$r['accom_id'];
          $rd->check_in=$r['check_in'];
          $rd->check_out=$r['check_out'];
          $rd->save();

          $rb=new ReservationRoom();
          $rb->rsvn_id=$rd->id;

          foreach(array('inventory_id','room_no','unit_type_id','bed_type_id','room_remark') as $f){
            $rb->$f=$r[$f];
          }
          $rb->save();

          $ir->rsvn_id=$rd->id;
          $ir->exchange_no=$r['confirmation_no'];
          $ir->save();
        }
        return redirect('extmembership/iiru');
      }

      
      public function rcibball(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "RCI::BB"]
        ];
        $rr=RciBulkBanking::get();

        $hotel=DB::table('accommodations')->get();
        foreach($hotel as $h){
          $accommodations[$h->accom_id]=$h;
        }
        return view('pages.rcibb-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'rr'=>$rr,'accommodations'=>$accommodations]);
      }  

      public function rcibbsavenew(Request $request){
        $last=RciBulkBanking::max('batch_no');
        if(empty($last)){
          $last=0;
        }
        $rbb=new RciBulkBanking();
        $rbb->batch_no=$last+1;
        $rbb->save();

        $r=$request->room[0];

        $rd=new Reservation();
        foreach(array('accom_id','check_in','check_out','internal_remark') as $f){
          $rd->$f=$r[$f];
        }
        $rd->save();
       
        $ru=new ReservationRoom();
        foreach(array('inventory_id','room_no','unit_type_id','bed_type_id') as $f){
          $ru->$f=$r[$f];
        }
       
        $ru->rsvn_id=$rd->rsvn_id;
        print_r($ru);
        $ru->save();

        $rr=new RcibbReservation();
        foreach(array('unit_size','week_no','serial_no','resort_id','max','privacy','deposit_date','deposit_no','ict_ref_no','nexoft_ref') as $f){
          $rr->$f=$r[$f];
        }
        $rr->travel_detail=$r['travel_destination'].' '.$r['travel_date'];
        $rr->wd=$rr->we=0;
        $date=$r['check_in'];
        while($date<=$r['check_out']){
          $day=date('N',strtotime($date));
          if(in_array($day,array(1,6))){
            $rr->we+=1;
          }else{
            $rr->wd+=1;
          }
          $date=date('Y-m-d',strtotime($date.'+1day'));
        }
        $rr->rsvn_id=$rd->rsvn_id;
        $rr->rcibb_id=$rbb->rcibb_id;
        $rr->save();

        return redirect('extmembership/rcibb');
      }

      public function rcibbnew(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "RCI BB New"]
        ];
        $payload['travel_agents']=DB::table('travel_agents')->get();
        $payload['accommodations']=DB::table('accommodations')->get();
        $payload['reservation_types']=DB::table('reservation_types')->get();
    
        return view('pages.rcibb-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'payload'=>$payload]);
      }  


      public function rcibbdetails($id){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => " RCI:BB Details"]
        ];

        $payload['r']=RcibbReservation::where('rcibb_id',$id)->get();
        $payload['id']=$id;
        
        $bt=DB::table('bed_types')->get();
        foreach($bt as $b){
          $payload['bed_types'][$b->bed_type_id]=$b->bed_type_id;
        }
        $ut=DB::table('unit_types')->get();
        foreach($ut as $u){
          $payload['unit_types'][$u->unit_type_id]=$u;
        }

        return view('pages.rcibb-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,'payload'=>$payload]);
      }  
}
