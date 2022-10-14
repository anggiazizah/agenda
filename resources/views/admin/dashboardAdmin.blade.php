@extends('layouts.master')

@section('content')
<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Total Siswa/i <span class="float-right"><i class="zmdi zmdi-accounts"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font" style="font-size:17.5px">{{$users->count()}} <span class="float-right"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Total Siswa Laki-laki <span class="float-right"><i class="fa fa-male"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font" style="font-size:17.5px">{{$pria->count()}} <span class="float-right"></span></p>
                </div>  
            </div>
            <div class="col-12 col-lg-6 col-xl-4 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Total Siswi Perempuan <span class="float-right"><i class="fa fa-female"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font" style="font-size:17.5px">{{$wanita->count()}} <span class="float-right"></span></p>
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
	</div>
@endsection