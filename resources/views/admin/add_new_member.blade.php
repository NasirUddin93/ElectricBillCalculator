@extends('admin.admin_layout')
@section('content')
 <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">New Student Adminssion Form</h2>
                    <p class="alert-success">
						<?php 
							$message = Session::get('message');
							if($message){
								echo $message;
								Session::put('message',null);
							}

						 ?>
					</p>
                         <form class="forms-sample" action="{{URL::to('/save-member')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <table>
                              <tr>
                                <td>
                                    <label for="exampleInputPassword1">Student First Name</label>
                                    <input type="text" class="" name="student_first_name" placeholder="First Name" required=""> 
                                </td>
                                <td>
                                    <label for="exampleInputPassword1">Student Last Name</label>
                                    <input type="text" class="" name="student_last_name" placeholder="Last Name" required="">                               
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    <label for="exampleInputPassword1">Student father name</label>
                                    <input type="text" class="" name="student_father_name" placeholder="father name" required="">
                                  
                                </td>
                                <td>
                                  <label for="exampleInputPassword1">Student mother</label>
                                  <input type="text" class="" name="student_mother_name" placeholder="Mother name" required="">
                                  
                                </td>
                              </tr>
                              <tr>
                                <td>
                                    <label for="exampleInputPassword1">Contact Number</label>
                                    <input type="text" class="" name="student_contact" placeholder="Contact" required="">
                                  
                                </td>
                                <td>
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="" name="student_email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                                    <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                                  
                                </td>
                              </tr>
                              <tr>
                                <td>                           
                                    <label for="exampleInputPassword1">Date of Birth</label>
                                    <input type="Date" class="" name="student_DoB" placeholder="Date of Birth" required="">                             
                                </td>                                
                                <td>
                                  <div class="control-group">
                                    <label class="control-label" for="fileInput">Student Image</label>
                                    <div class="controls">
                                    <input class="input-file uniform_on" name="student_image" id="fileInput" type="file" required="">
                                    </div>
                                  </div>                                    
                                </td>
                              </tr>
                                <td>
                                    <label for="exampleInputPassword1">Program Name</label>
                                    <input type="text" class="" name="student_program" placeholder="Course Name" value="Iftah" required="">                              
                                </td>
                            </table>  
                              <hr>
                              <p class="text-center">Student Address</p>                            
                              <div class="form-group">
                                <table>
                                  <tr>
                                    <td><label for="exampleInputPassword1">Division</label><input type="text" class="" name="student_division" placeholder="Division" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">District</label>
                                      <input type="text" class="" name="student_district" placeholder="District" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">Thana</label>
                                      <input type="text" class="" name="student_thana" placeholder="Thana" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Post Off:</label>
                                       <input type="text" class="" name="student_post_office" placeholder="Post Office" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                     <label for="exampleInputPassword1">Village</label>
                                       <input type="text" class="" name="student_village" placeholder="Village" required="">
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
                                    <td><label for="exampleInputPassword1">SSC Reg</label><input type="text" class="" name="SSC_registration_no" placeholder="SSC Reg" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">SSC Roll</label>
                                      <input type="text" class="" name="SSC_roll_no" placeholder="SSC Roll" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">SSC Result</label>
                                      <input type="text" class="" name="SSC_result" placeholder="SSC Result" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Institution</label>
                                       <input type="text" class="" name="SSC_institution" placeholder="Institution" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>                                      
                                       <label for="exampleInputPassword1">SSC From</label>
                                          <select name="SSC_from" id="" required="">
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
                                          <select name="SSC_to" id="" required="">
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
                                    <td><label for="exampleInputPassword1">HSC Reg</label><input type="text" class="" name="HSC_registration_no" placeholder="HSC Reg" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">HSC Roll</label>
                                      <input type="text" class="" name="HSC_roll_no" placeholder="HSC Roll" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">HSC Result</label>
                                      <input type="text" class="" name="HSC_result" placeholder="HSC Result" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Institution</label>
                                       <input type="text" class="" name="HSC_institution" placeholder="Institution" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>                                      
                                       <label for="exampleInputPassword1">HSC From</label>
                                          <select name="HSC_from" id="" required="">
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
                                       <label for="exampleInputPassword1">HSC To</label>
                                          <select name="HSC_to" id="" required="">
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
                                </table>
                              </div>
                <hr>
<hr>
                              <hr>
                              <p class="text-center">honours Information</p>                            
                              <div class="form-group">
                                <table>
                                  <tr>
                                    <td><label for="exampleInputPassword1">honours Reg</label><input type="text" class="" name="honours_registration_no" placeholder="honours Reg" required=""></td>
                                    <td>                                      
                                       <label for="exampleInputPassword1">honours Roll</label>
                                      <input type="text" class="" name="honours_roll_no" placeholder="honours Roll" required="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                      <label for="exampleInputPassword1">honours Result</label>
                                      <input type="text" class="" name="honours_result" placeholder="honours Result" required=""> 
                                    </td>
                                    <td>
                                   <label for="exampleInputPassword1">Institution</label>
                                       <input type="text" class="" name="honours_institution" placeholder="Institution" required="">  
                                    </td>
                                  </tr>
                                  <tr>
                                     <td>                                      
                                       <label for="exampleInputPassword1">Honours From</label>
                                          <select name="honours_from" id="" required="">
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
                                       <label for="exampleInputPassword1">Honours To</label>
                                          <select name="honours_to" id="" required="">
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
 
                   
                                </table>
                              </div>
                <hr>

                 
 
                              <button type="submit" class="btn btn-success">Add New Member</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection