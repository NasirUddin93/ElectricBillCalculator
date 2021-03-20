<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class AdminController extends Controller
{
   	public function admin_dashboard(){
		return view('admin.admin_dashboard');
	}

    public function login_dashboard(Request $request){
    	$email=$request->admin_email;
    	$password=$request->admin_password;
    	$result=DB::table('tbl_admin')
    			->where('admin_email',$email)
    			->where('admin_password',$password)
    			->first();
    	if ($result) {
    		Session::put('admin_id',$result->admin_id);
    		Session::put('admin_name',$result->admin_name);
            Session::put('admin_email',$result->admin_email);
    		Session::put('user_type','admin');
    		return Redirect::to('/admin-dashboard');
    	} else {
    		Session::put('exception','Email or Password Invalid');
    		return Redirect::to('/admin');
    	} 	

    }
    public function admin_logout(){
    	Session::put('admin_id',null);
    	Session::put('admin_name',null);
    	Session::put('admin_email',null);
        Session::put('user_type',null);
    	return Redirect::to('/admin');
}

}