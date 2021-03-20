@extends('admin.admin_layout')
@section('content')
 <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>
                    <p class="alert-success">
						<?php 
							$message = Session::get('message');
							if($message){
								echo $message;
								Session::put('message',null);
							}

						 ?>
					</p>

                          <form class="forms-sample" action="{{URL::to('/save-update/'.$student_description->student_id)}}" method="post">
                          	{{csrf_field()}}

                            <table>
                              <tr>
                                <td>
                                    <label for="exampleInputPassword1">Student First Name</label>
                                    <input type="text" class="" name="student_first_name" value="{{$student_description->student_first_name}}" required=""> 
                                </td>
                                <td>
                                    <label for="exampleInputPassword1">Student Last Name</label>
                                    <input type="text" class="" name="student_last_name" value="{{$student_description->student_last_name}}" required="">                               
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    <label for="exampleInputPassword1">Student father name</label>
                                    <input type="text" class="" name="student_father_name" value="{{$student_description->student_father_name}}" required="">
                                  
                                </td>
                                <td>
                                  <label for="exampleInputPassword1">Student mother</label>
                                  <input type="text" class="" name="student_mother_name" value="{{$student_description->student_mother_name}}" required="">
                                  
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    <label for="exampleInputPassword1">Contact Number</label>
                                    <input type="text" class="" name="student_contact" value="{{$student_description->student_contact}}" required="">
                                  
                                </td>
                                <td>
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="" name="student_email" aria-describedby="emailHelp" value="{{$student_description->student_email}}" required="">
                                    <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                                  
                                </td>
                              </tr>
                              <tr>
                                <td>                           
                                    <label for="exampleInputPassword1">Date of Birth</label>
                                    <input type="Date" class="" name="student_DoB" value="{{$student_description->student_DoB}}" required="">                             
                                </td>                                 
                                <td>                           
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="" name="student_password" value="{{$student_description->student_password}}" required="">                             
                                </td>                                
<!--                                 <td>
                                  <div class="control-group">
                                    <label class="control-label" for="fileInput">Student Image</label>
                                    <div class="controls">
                                    <input class="input-file uniform_on" name="student_image" id="fileInput" type="file" required="">
                                    </div>
                                  </div>                                    
                                </td> -->
                              </tr>
                                <td>
                                    <label for="exampleInputPassword1">Program Name</label>
                                    <input type="text" class="" name="student_program" value="{{$student_description->student_program}}" value="Iftah" required="">                              
                                </td>
                            </table>  
                              <hr>
                              <p class="text-center">Student Address</p>                            
                              <div class="form-group">
                                <table>
                                  <tr>
                                    <td><label for="exampleInputPassword1">Division</label><input type="text" class="" name="student_division" value="{{$student_description->student_division}}" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">District</label>
                                      <input type="text" class="" name="student_district" value="{{$student_description->student_district}}" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">Thana</label>
                                      <input type="text" class="" name="student_thana" value="{{$student_description->student_thana}}" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Post Off:</label>
                                       <input type="text" class="" name="student_post_office" value="{{$student_description->student_post_office}}" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                     <label for="exampleInputPassword1">Village</label>
                                       <input type="text" class="" name="student_village" value="{{$student_description->student_village}}" required="">
                                    </td>
                                  </tr>
                                </table>
                              </div>
                <hr>
                              <hr>
                              <p class="text-center">SSC Information</p>                            
                              <div class="form-group">
                                <table>
                                  <tr>
                                    <td><label for="exampleInputPassword1">SSC Reg</label><input type="text" class="" name="SSC_registration_no" value="{{$student_description->SSC_registration_no}}" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">SSC Roll</label>
                                      <input type="text" class="" name="SSC_roll_no" value="{{$student_description->SSC_roll_no}}" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">SSC Result</label>
                                      <input type="text" class="" name="SSC_result" value="{{$student_description->SSC_result}}" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Institution</label>
                                       <input type="text" class="" name="SSC_institution" value="{{$student_description->SSC_institution}}" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>                                      
                                       <label for="exampleInputPassword1">SSC From</label>
                                          <select name="SSC_from" value="" id="" required="">
                                            <option>{{$student_description->SSC_from}}</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                          </select>
                                    </td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">SSC To</label>
                                          <select name="SSC_to" value="" id="" required="">
                                            <option>{{$student_description->SSC_to}}</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                          </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                <hr>
<hr>
                              <hr>
                              <p class="text-center">HSC Information</p>                            
                              <div class="form-group">
                                <table>
                                  <tr>
                                    <td><label for="exampleInputPassword1">HSC Reg</label><input type="text" class="" name="HSC_registration_no" value="{{$student_description->HSC_registration_no}}" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">HSC Roll</label>
                                      <input type="text" class="" name="HSC_roll_no" value="{{$student_description->HSC_roll_no}}" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">HSC Result</label>
                                      <input type="text" class="" name="HSC_result" value="{{$student_description->HSC_result}}" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Institution</label>
                                       <input type="text" class="" name="HSC_institution" value="{{$student_description->HSC_institution}}" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>                                      
                                       <label for="exampleInputPassword1">HSC_from</label>
                                          <select name="HSC_from" value="" id="" required="">
                                            <option>{{$student_description->HSC_from}}</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                          </select>
                                    </td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">HSC_to</label>
                                          <select name="HSC_to" value="" id="" required="">
                                            <option>{{$student_description->HSC_to}}</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                          </select>
                                    </td>

<!--                                     <td>
                                       <label for="exampleInputPassword1">From</label>
                                      <input type="date" class="" name="HSC_from" value="{{$student_description->HSC_from}}" required=""> 
                                    </td>
                                    <td>
                                     <label for="exampleInputPassword1">To</label>
                                       <input type="date" class="" name="HSC_to" value="{{$student_description->HSC_to}}" required="">
                                    </td> -->
                                  </tr>
                                </table>
                              </div>
                <hr>
<hr>
                              <hr>
                              <p class="text-center">honours Information</p>                            
                              <div class="form-group">
                                <table>
                                  <tr>
                                    <td><label for="exampleInputPassword1">honours Reg</label><input type="text" class="" name="honours_registration_no" value="{{$student_description->honours_registration_no}}" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">honours Roll</label>
                                      <input type="text" class="" name="honours_roll_no" value="{{$student_description->honours_roll_no}}" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">honours Result</label>
                                      <input type="text" class="" name="honours_result" value="{{$student_description->honours_result}}" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Institution</label>
                                       <input type="text" class="" name="honours_institution" value="{{$student_description->honours_institution}}" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>                                      
                                       <label for="exampleInputPassword1">honours_from</label>
                                          <select name="honours_from" value="" id="" required="">
                                            <option>{{$student_description->honours_from}}</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                          </select>
                                    </td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">honours_to</label>
                                          <select name="honours_to" value="" id="" required="">
                                            <option>{{$student_description->honours_to}}</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                          </select>
                                    </td>

<!--                                     <td>
                                       <label for="exampleInputPassword1">From</label>
                                      <input type="date" class="" name="honours_from" value="{{$student_description->honours_from}}" required=""> 
                                    </td>
                                    <td>
                                     <label for="exampleInputPassword1">To</label>
                                       <input type="date" class="" name="honours_to" value="{{$student_description->honours_to}}" required="">
                                    </td> -->
                                  </tr>
                                </table>
                              </div>
                <hr>
<hr>

                   
                                </table>
                              </div>
                <hr>
 
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>


@endsection


