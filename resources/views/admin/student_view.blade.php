@extends('admin.admin_layout')
@section('content')
       <div class="content-wrapper">
          <h1 class="page-title">Student Profile</h1>
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">

                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description->student_image)}}" alt="">
                  <p class="name">{{$student_description->student_first_name}}</p>
                  <p class="designation">{{$student_description->student_id}}</p>
                  <a class="email" href="#">{{$student_description->student_email}}</a>
                  <a class="number" href="#">{{$student_description->student_contact}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
				<h2 class="lead">International University Of Business Agreculture and Technology</h2>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                  </div>
                  <div class="info-links">
					<p class="lead"><span>Father Name:</span><span>{{$student_description->student_father_name}}</span></p>
					<p class="lead"><span>Mother Name:</span><span>{{$student_description->student_mother_name}}</span></p>
					<p class="lead"><span>Address</span><span>{{$student_description->student_district}}</span></p>
					<p class="lead"><span>Program:</span><span>{{$student_description->student_program}}</span></p>
		
                  </div>
                </div>
              </div>
            </div>
           </div>
        </div>
        <!-- content-wrapper ends -->

@endsection