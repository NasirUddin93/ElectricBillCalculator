<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class BillController extends Controller
{
    public function make_new_bill(){
		return view('admin.make_new_bill');
	}
    public function bill_calculator(Request $request){
    	$rajdip_recharge_taka=$request->rajdip_recharge_taka;
    	$rongon_recharge_taka=$request->rongon_recharge_taka;
    	$ground_recharge_taka=$request->ground_recharge_taka;

    	$rajdip_current_kwh=$request->rajdip_current_kwh;
    	$rongon_current_kwh=$request->rongon_current_kwh;
    	$ground_current_kwh=$request->ground_current_kwh;

    	Session::put('rajdip_recharge_taka',$rajdip_recharge_taka);
    	Session::put('rongon_recharge_taka',$rongon_recharge_taka);
    	Session::put('ground_recharge_taka',$ground_recharge_taka);

    	
    	Session::put('rajdip_current_kwh',$rajdip_current_kwh);
    	Session::put('rongon_current_kwh',$rongon_current_kwh);
    	Session::put('ground_current_kwh',$ground_current_kwh);
		return view('admin.current_month_bill');
	}

    public function save_new_bill(){
        $data=array();
        $data['rajdip_last_kwh']=Session::get('rajdip_last_kwh');
        $data['rajdip_current_kwh']=Session::get('rajdip_current_kwh');
        $data['rajdip_consumed_unit']=Session::get('rajdip_consumed_unit');
        $data['total_consumed_unit']=Session::get('total_consumed_unit');
        $data['rajdip_kwh_ratio']=Session::get('rajdip_kwh_ratio');
        $data['rajdip_comsumed_taka']=Session::get('rajdip_comsumed_taka');
        $data['rajdip_recharge_taka']=Session::get('rajdip_recharge_taka');
        $data['recarge_total_taka']=Session::get('recarge_total_taka');
        $data['rajdip_prev_DRorCr']=Session::get('rajdip_prev_DRorCr');
        $data['rajdip_total_advance']=Session::get('rajdip_total_advance');
        $data['rajdip_ramaining_balance']=Session::get('rajdip_ramaining_balance');

        DB::table('tbl_rajdip_bill_record')->insert($data);
        Session::put('message1','Add Result Successfully ..!');

        $rdata['rongon_last_kwh']=Session::get('rongon_last_kwh');
        $rdata['rongon_current_kwh']=Session::get('rongon_current_kwh');
        $rdata['rongon_consumed_unit']=Session::get('rongon_consumed_unit');
        $rdata['total_consumed_unit']=Session::get('total_consumed_unit');
        $rdata['rongon_kwh_ratio']=Session::get('rongon_kwh_ratio');
        $rdata['rongon_comsumed_taka']=Session::get('rongon_comsumed_taka');
        $rdata['rongon_recharge_taka']=Session::get('rongon_recharge_taka');
        $rdata['recarge_total_taka']=Session::get('recarge_total_taka');
        $rdata['rongon_prev_DRorCr']=Session::get('rongon_prev_DRorCr');
        $rdata['rongon_total_advance']=Session::get('rongon_total_advance');
        $rdata['rongon_ramaining_balance']=Session::get('rongon_ramaining_balance');

        DB::table('tbl_rongon_bill_record')->insert($rdata);
        Session::put('message2','Add Result Successfully ..!');

        $gdata['ground_last_kwh']=Session::get('ground_last_kwh');
        $gdata['ground_current_kwh']=Session::get('ground_current_kwh');
        $gdata['ground_consumed_unit']=Session::get('ground_consumed_unit');
        $gdata['total_consumed_unit']=Session::get('total_consumed_unit');
        $gdata['ground_kwh_ratio']=Session::get('ground_kwh_ratio');
        $gdata['ground_comsumed_taka']=Session::get('ground_comsumed_taka');
        $gdata['ground_recharge_taka']=Session::get('ground_recharge_taka');
        $gdata['recarge_total_taka']=Session::get('recarge_total_taka');
        $gdata['ground_prev_DRorCr']=Session::get('ground_prev_DRorCr');
        $gdata['ground_total_advance']=Session::get('ground_total_advance');
        $gdata['ground_ramaining_balance']=Session::get('ground_ramaining_balance');

        DB::table('tbl_ground_bill_record')->insert($gdata);
        Session::put('message3','Add Result Successfully ..!');
        return Redirect::to('/make-new-bill');


        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // echo "<pre>";

    }
    public function last_generated_bill(){

        return view('admin.last_generated_bill');
    }
    public function rajdip_all_bill(){
        $rajdip_all_bill_info=DB::table('tbl_rajdip_bill_record')
                        ->get();

        $manage_rajdip_bill_info = view('admin.rajdip_all_bill')
                    ->with('rajdip_all_bill_info',$rajdip_all_bill_info);
        return view('admin.admin_layout')
                    ->with('admin.rajdip_all_bill',$manage_rajdip_bill_info);
    }
    public function rongon_all_bill(){
        $rongon_all_bill_info=DB::table('tbl_rongon_bill_record')
                        ->get();

        $manage_rongon_bill_info = view('admin.rongon_all_bill')
                    ->with('rongon_all_bill_info',$rongon_all_bill_info);
        return view('admin.admin_layout')
                    ->with('admin.rongon_all_bill',$manage_rongon_bill_info);        
        // return view('/admin.rongon_all_bill');
    }
    public function ground_all_bill(){
        $ground_all_bill_info=DB::table('tbl_ground_bill_record')
                        ->get();

        $manage_ground_bill_info = view('admin.ground_all_bill')
                    ->with('ground_all_bill_info',$ground_all_bill_info);
        return view('admin.admin_layout')
                    ->with('admin.ground_all_bill',$manage_ground_bill_info);
        // return view('/admin.ground_all_bill');
    }
    
    public function instruction(){
        return view('/admin.instruction');
    }
    public function gellary(){
        return view('/admin.gellary');
    }
    public function all_member(){
        return view('/admin.all_member');
    }
    public function add_new_member(){
        return view('/admin.add_new_member');
    }














	
}
