<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Electric Bill Generator</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backend/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.html')}}" />
</head>
<body class="sidebar-dark">
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('/admin-dashboard')}}"><img src="{{URL::to('backend/images/salt_logo.svg')}}" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count bg-warning"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">

              <a class="dropdown-item" href="#">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text"></span>
              </a>
              
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">3</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::to('/view-profile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                </div>
                <div class="sender">
                  <p class="Sende-name">Setting</p>
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/admin-logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">{{Session::get('admin_name')}}</p>
              <p class="designation">Admin</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/all-member')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Members</span>
              </a>
            </li>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/add-new-member')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Add New Number</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/make-new-bill')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Make Bill</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/last-generated-bill')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">All Bills</span>
                <span class="badge badge-danger badge-pill ml-auto">Current</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Show Bill</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/rajdip-all-bill')}}">Rajidp Bill</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/rongon-all-bill')}}">Rongon Bill</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/ground-all-bill')}}">Ground Flore Bill</a>
                  </li>
                </ul>
              </div>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/instruction')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Instruction</span>
              </a>
            </li>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/gellary')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Gellary</span>
              </a>
            </li>
            </li>
            </li>
            <!--main pages end-->







            <!--Apps start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Applications</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="mdi mdi-email-outline menu-icon"></i>
                <span class="menu-title">E-mail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="mdi mdi-calendar-check menu-icon"></i>
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="mdi mdi-calendar-text menu-icon"></i>
                <span class="menu-title">To-do list</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="mdi mdi-folder-multiple-image menu-icon"></i>
                <span class="menu-title">Gallery</span>
              </a>
            </li>
            <!--Apps end-->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
              @yield('content');
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">infocare</a> &copy; 2018
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('backend/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('backend/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('backend/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('backend/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('backend/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('backend/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('backend/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('backend/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->
    <script src="{{asset('backend/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('backend/js/data-table.js')}}"></script>
  
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/misc.js')}}"></script>
  <script src="{{asset('backend/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard_1.js')}}"></script>
  <script src="{{asset('backend/js/bootbox.min.js')}}"></script>
  <!-- End custom js for this page-->
<script>
  $(document).on("click","#delete",function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      bootbox.confirm("Are you confirmed to Delete",function(confirmed){
        if (confirmed) {
          window.location.href = link;
        };
      });
  });
</script>
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
