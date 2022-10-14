<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Agenda - Agenda shalat</title>
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
 <link rel="icon" href="assets/images/logo-smk.png"  type="image/x-icon">
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
       <img src="assets/images/LOGO-SMK.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Agenda Shalat</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">

      <li>
      <li>
        <a href=" {{ route('layouts.agenda') }}">
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
     
  
    </li>
    <ul class="navbar-nav align-items-center right-nav-link">
    <a class="nav-link count-indicator " href="#" data-toggle="dropdown">
                  <i class="zmdi zmdi-notifications"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifikasi</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Dzikir Sore</p>
                      <p class="text-muted ellipsis mb-0">Anda telah melakukan Dzikir Sore</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Shalat Ashar</p>
                      <p class="text-muted ellipsis mb-0">Anda telah melakukan Shalat Ashar</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Shalat Dzuhur</p>
                      <p class="text-muted ellipsis mb-0">Anda telah melakukan Shalat Dzuhur</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Lihat semua notifikasi</p>
                </div>

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
            <a href="{{route('layouts.profile')}}" class="mt-2 user-title"><h6> {{ auth()->user()->username }}</h6></a> 
            <p class="user-subtitle">{{ auth()->user()->nis }}</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="#"> Keluar</li></a>
      </ul>
    </li>
  </ul>

</nav>
</header>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container">
      <form action="{{ route('agenda.post') }}" method="POST">
        @csrf
        <div class="row mt-3">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Shalat</h5>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach($shalats as $shalat)
                      <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $shalat->name }}</td>
                        <td>
                          <div><input name="shalat[]" type="checkbox" value="{{ $shalat->id }}"></div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                  <h5 class="card-title">Dzikir</h5>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($dzikirs as $dzikir)
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $dzikir->name }}</td>
                          <td>
                            <div><input name="dzikir[]" type="checkbox" value="{{ $dzikir->id }}"></div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row mt-3">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Berbuat Baik</h5>
                <div class="table-responsive">
                  <table>
                    <tbody>
                      <tr>
                        <textarea name="kebaikan" id="kebaikan" cols="45" rows="10"></textarea>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ceramah</h5>
                <div class="table-responsive">
                  <table>
                    <tbody>
                      <tr>
                        <textarea name="ceramah" id="ceramah" cols="45" rows="10"></textarea>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <button type="submit" class="btn btn-primary float-right">Kirim</button>
          </div>
        </div>
      </form>
    </div>


      
	  
		  <div class="overlay toggle-menu"></div>

    </div>
    
    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	
	<footer class="footer">
      <div class="container">
        <div class="text-center">
        </div>
      </div>
    </footer>

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