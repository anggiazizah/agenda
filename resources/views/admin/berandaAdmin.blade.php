<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Halaman Admin - Sistem Pengisian Agenda Shalat</title>
  <!-- loader-->
  <link href="/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="/assets/images/logo-icon.png" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">AGENDA SHALAT</h5>
     </a>
   </div>
    <ul class="sidebar-menu do-nicescrol">
      <li>
        <a href="{{route('layouts.dashboard')}}">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="{{route('layouts.agenda')}}">
          <i class="zmdi zmdi-book"></i> <span>Agenda</span>
        </a>
      </li>

      <li>
        <a href="{{route('layouts.kalender')}}">
          <i class="zmdi zmdi-calendar-check"></i> <span>Kalender</span>
          <small class="badge float-right badge-light"></small>
        </a>
      </li>

      <li>
        <a href="{{route('admin.profile')}}">
          <i class="zmdi zmdi-face"></i> <span>Profil</span>
        </a>
      </li>
    </ul>
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">kurapika</h6>
            <p class="user-subtitle">admin@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="{{route('postlogin')}}"><li class="dropdown-item"><i class="icon-power mr-2"></i> Keluar</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Total Siswa/i <span class="float-right"><i class="zmdi zmdi-accounts"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:99%"></div>
                    </div>
                  <p class="mb-0 text-white small-font" style="font-size:17.5px">2000 <span class="float-right"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Total Siswa Laki-laki <span class="float-right"><i class="fa fa-male"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:60%"></div>
                    </div>
                  <p class="mb-0 text-white small-font" style="font-size:17.5px">1197 <span class="float-right"></span></p>
                </div>  
            </div>
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Total Siswi Perempuan <span class="float-right"><i class="fa fa-female"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:40%"></div>
                    </div>
                  <p class="mb-0 text-white small-font" style="font-size:17.5px">803 <span class="float-right"></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Data Shalat
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Shalat</th>
                     <th>Jumlah Checklis</th>
                     <th>Tanggal</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Shalat Shubuh</td>
                    <td>1000 Murid</td>
                    <td>09 September 2022</td>
                    </tr>

                   <tr>
                    <td>Shalat Dzuhur</td>
                    <td>1906 Murid</td> 
                    <td>09 September 2022</td>
                   </tr>

                   <tr>
                    <td>Shalat Ashar</td>
                    <td>1087 Murid</td>
                    <td>09 September 2022</td>
                   </tr>

                   <tr>
                    <td>Shalat Maghrib</td>
                    <td>1999 Murid</td>
                    <td>09 September 2022</td>
                   </tr>

                   <tr>
                    <td>Shalat Isya</td>
                    <td>1708 Murid</td>
                    <td>09 September 2022</td>
                   </tr>

                 </tbody></table>
                 
         </div>
	   </div>
	 </div>
	</div>
  <div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Data Dzikir
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Dzikir</th>
                     <th>Jumlah Checklis</th>
                     <th>Tanggal</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Dzikir Pagi</td>
                    <td>100 Murid</td>
                    <td>09 September 2022</td>
                    </tr>

                   <tr>
                    <td>Dzikir Petang</td>
                    <td>99 Murid</td> 
                    <td>09 September 2022</td>
                   </tr>

                   <tr>
                    <td>Istighfar</td>
                    <td>1007 Murid</td>
                    <td>09 September 2022</td>
                   </tr>

                   <tr>
                    <td>Shalawat</td>
                    <td>999 Murid</td>
                    <td>09 September 2022</td>
                   </tr>

                 </tbody></table>
                 
               </div>
	   </div>
	 </div>
	</div>
  <div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Data Berbuat Baik
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Berbuat Baik</th>
                     <th>Jumlah Yang Mengisi Perbuatan Baik</th>
                     <th>Tanggal</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Berbuat Baik</td>
                    <td>1000 Murid</td>
                    <td>09 September 2022</td>
                    </tr>

                 </tbody></table>
                 
               </div>
	   </div>
	 </div>
	</div>
  <div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Data Ceramah
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Ceramah</th>
                     <th>Jumlah Yang Mengisi Ceramah</th>
                     <th>Tanggal</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Ceramah</td>
                    <td>999 Murid</td>
                    <td>09 September 2022</td>
                    </tr>

                 </tbody></table>
                 
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="/assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="/assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="/assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="/assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="/assets/js/index.js"></script>

  
</body>
</html>
