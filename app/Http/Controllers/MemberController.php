<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class MemberController extends Controller
{
    public function instruction(){
        return view('/admin.instruction');
    }
    public function gellary(){
        return view('/admin.gellary');
    }
    public function save_member(Request $request){
        $user_type=Session::get('user_type');
        $data=array();
        $data['student_first_name']=$request->student_first_name;
        $data['student_last_name']=$request->student_last_name;
        $data['student_father_name']=$request->student_father_name;
        $data['student_mother_name']=$request->student_mother_name;
        $data['student_contact']=$request->student_contact;
        $data['student_email']=$request->student_email;
        $data['student_DoB']=$request->student_DoB;
        $data['student_program']=$request->student_program;
        $data['student_division']=$request->student_division;
        $data['student_district']=$request->student_district;
        $data['student_thana']=$request->student_thana;
        $data['student_post_office']=$request->student_post_office;
        $data['student_village']=$request->student_village;
        $data['SSC_registration_no']=$request->SSC_registration_no;
        $data['SSC_roll_no']=$request->SSC_roll_no;
        $data['SSC_result']=$request->SSC_result;
        $data['SSC_institution']=$request->SSC_institution;
        $data['SSC_from']=$request->SSC_from;
        $data['SSC_to']=$request->SSC_to;
        $data['HSC_registration_no']=$request->HSC_registration_no;
        $data['HSC_roll_no']=$request->HSC_roll_no;
        $data['HSC_result']=$request->HSC_result;
        $data['HSC_institution']=$request->HSC_institution;
        $data['HSC_from']=$request->HSC_from;
        $data['HSC_to']=$request->HSC_to;
        $data['honours_registration_no']=$request->honours_registration_no;
        $data['honours_roll_no']=$request->honours_roll_no;
        $data['honours_result']=$request->honours_result;
        $data['honours_institution']=$request->honours_institution;
        $data['honours_from']=$request->honours_from;
        $data['honours_to']=$request->honours_to;
        $data['approval_status']=1;
        $data['student_password']='asdfg';
        $data['admission_date']='25-07-2018';
       $image=$request->file('student_image');
        if($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='student_image/';
            $image_url=$upload_path.$image_full_name;
            $succss=$image->move($upload_path,$image_full_name);
            if ($succss) {
                $data['student_image']=$image_url;
                DB::table('tbl_member')->insert($data);
                Session::put('message','Add new student Successfully ..!');
            if($user_type){
                return Redirect::to('/admin.add_new_member');   
            }
                return Redirect::to('/');                    
            }
        }
        $data['student_image']='';
        DB::table('tbl_member')->insert($data);
        Session::put('message','Add new student Successfully Without Image..!');
        if($user_type){
          return Redirect::to('/admin.add_new_member');   
        }
        return Redirect::to('/');   
    } 
    public function all_member(){
        $all_student_info = DB::table('tbl_member')
                            ->get();
        $manage_student = view('admin.all_member')
                            ->with('all_student_info',$all_student_info);
        return view('admin.admin_layout')
                ->with('admin.all_member',$manage_student);
    }
    public function student_view($student_id){
        $student_description=DB::table('tbl_member')
                            ->select('*')
                            ->where('student_id',$student_id)
                            ->first();
        $student_profile = view('admin.student_view')
                            ->with('student_description',$student_description);
        return view('admin.admin_layout')
                ->with('admin.student_view',$student_profile);
        
    }
   public function student_edit($student_id){

        $student_description=DB::table('tbl_member')
                            ->select('*')
                            ->where('student_id',$student_id)
                            ->first();
        $student_profile = view('admin.student_edit')
                            ->with('student_description',$student_description);
        return view('admin.admin_layout')
                ->with('admin.student_edit',$student_profile);
        
    }

    public function student_delete($student_id){
        DB::table('tbl_student')
        ->where('student_id',$student_id)
        ->delete();
        Session::put('message','Student delete successfully');
        return Redirect::to('/all-student');

    }




    public function add_new_member(){
        return view('/admin.add_new_member');
    }
}
