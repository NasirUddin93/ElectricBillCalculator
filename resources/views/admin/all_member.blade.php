@extends('admin.admin_layout')
@section('content')
          <h1 class="page-title">Data table</h1>
          <div class="card">
            <div class="card-body">
            <p class="alert-success">
            <?php 
              $message = Session::get('message');
              if($message){
                echo $message;
                Session::put('message',null);
              }

             ?>
          </p>
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>St_ID</th>
                          <th>St_Name</th>
                          <th>Program</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Image</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_student_info as $v_student)
                      <tr>
                          <td>{{$v_student->student_id}}</td>
                          <td>{{$v_student->student_first_name}}</td>
                          <td>{{$v_student->student_program}}</td>
                          <td>{{$v_student->student_contact}}</td>
                          <td>{{$v_student->student_district}}</td>
                          <td><img src="{{$v_student->student_image}}" alt="" height="80px" width="80px"></td>
                          <td>
                            <a href="{{URL::to('/student-view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{URL::to('/student-edit/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">Edit</button></a>
                            <a href="{{URL::to('/student-delete/'.$v_student->student_id)}}" id="delete"><button class="btn btn-outline-primary" >Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>




@endsection