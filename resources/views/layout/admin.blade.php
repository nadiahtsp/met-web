<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.addons.css')}}">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/css/style.css')}}">

  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/vendors/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="">
          <img src="{{asset('assets/logo/logo_ET.png')}}" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">


          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Admin</span>
              <img class="img-xs rounded-circle" src="{{asset('assets/vendors/images/faces/face1.jpg')}}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <!-- <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div> -->
              </a>
              <!-- <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a> -->
              <a class="dropdown-item mt-2">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!-- 
            Disini tempat untuk menambahkan menu dan hrefnya.
            Href pake {{url('')}}
           -->
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{asset('assets/vendors/images/faces/face1.jpg')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('profile-met')}}">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Profile MET</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about-admin')}}">
              <i class="menu-icon mdi mdi-information-variant "></i>
              <span class="menu-title">About Us</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('portfolio-admin')}}">
              <i class="menu-icon mdi mdi-file-multiple "></i>
              <span class="menu-title">Portfolio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('service-admin')}}">
              <i class="menu-icon mdi mdi-room-service"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('career-admin')}}">
              <i class="menu-icon mdi mdi-account-tie"></i>
              <span class="menu-title">Careers</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('testimoni')}}">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">testimoni</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('pillar')}}">
              <i class="menu-icon mdi mdi-office-building"></i>
              <span class="menu-title">Pilars</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('client')}}">
              <i class="menu-icon mdi mdi-people"></i>
              <span class="menu-title">Client</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('social-media')}}">
              <i class="menu-icon mdi mdi-people"></i>
              <span class="menu-title">Social Media</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <!-- Content pages admin -->
        <!-- 
          Ketika ingin membuat menu baru, taro didalam folder admin, terus jangan lupa extends, section title, section content
         -->
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- <footer class="footer" style="position:absolute; bottom:0; width:100%;">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('assets/vendors/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/vendors/js/misc.js')}}"></script>
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script> -->
  <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
 
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/vendors/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>