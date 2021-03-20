<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin_login');
});
Route::post('/admin-login','AdminController@login_dashboard');
Route::get('/admin-dashboard','AdminController@admin_dashboard');
Route::get('/admin-logout','AdminController@admin_logout');
// Bill Ralated Routes Are Here
Route::get('/make-new-bill','BillController@make_new_bill');
Route::post('/bill-calculator','BillController@bill_calculator');
Route::get('/save-new-bill','BillController@save_new_bill');
Route::get('/last-generated-bill','BillController@last_generated_bill');

Route::get('/rajdip-all-bill','BillController@rajdip_all_bill');
Route::get('/rongon-all-bill','BillController@rongon_all_bill');
Route::get('/ground-all-bill','BillController@ground_all_bill');




Route::get('/instruction','MemberController@instruction');
Route::get('/gellary','MemberController@gellary');
Route::get('/all-member','MemberController@all_member');
Route::post('/save-member','MemberController@save_member');
Route::get('/add-new-member','MemberController@add_new_member');


Route::get('/student-view/{student_id}','MemberController@student_view');
Route::get('/student-edit/{student_id}','MemberController@student_edit');
Route::post('/save-update/{student_id}','MemberController@save_update');
Route::get('/student-delete/{student_id}','MemberController@student_delete');