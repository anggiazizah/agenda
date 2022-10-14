<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Profile - Agenda shalat</title>
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <link rel="icon" href="assets/images/logo-smk.png" type="image/x-icon">
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>

 <div id="wrapper">

   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ route('layouts.agenda') }}">
      <img src="assets/images/LOGO-SMK.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Agenda Shalat</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">

      <li>
        <a href="{{ route('layouts.agenda') }}">
          <i class="zmdi zmdi-book"></i> <span>Agenda Shalat</span>
        </a>
      </li>

      <li>
        <a href="{{route('layouts.kalender')}}">
          <i class="zmdi zmdi-calendar"></i> <span>Kalender</span>
        </a>
      </li>

      <li>
        <a href="{{route('layouts.profile')}}">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

    </ul>
   
   </div>

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
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="" href="https://wa.me/+6285716749732/?text=Assalamualaikum saya mau bertanya">
      <i class="zmdi zmdi-whatsapp"></i></a>
    </li>
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
            <a href="{{route('layouts.profile')}}" class="mt-2 user-title"><h6> {{ Auth::user()->email }}</h6></a> 
            <p class="user-subtitle">{{ Auth::user()->nis }}</p>
            </div>
           </div>
          </a>
        </li>
        <div>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="{{route('postlogin')}}"> Keluar</li></a>
		  </div>
      </ul>
    </li>
  </ul>
</nav>
</header>

     <div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

        </div>
<td>
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
            </ul>
                  <br>
                  <br>
                       <div class="tab-pane" id="edit">
                           <form action="{{ route('profile.edit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama</label>
                              <div class="col-lg-9">
                              <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Kelas</label>
                            <div class="col-lg-9">
                            <input type="text" name="kelas" class="form-control" value="{{ auth()->user()->kelas }}"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">NIS </label>
                            <div class="col-lg-9">
                            <input type="number" name="nis" class="form-control" value="{{ auth()->user()->nis }}"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}"></input>
                            </div>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>
  </td>
		  <div class="overlay toggle-menu"></div>
	
    </div>
   </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	
	
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
   
  </div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <script src="assets/js/sidebar-menu.js"></script>
  
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
