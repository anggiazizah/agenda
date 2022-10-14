@extends('admin.masterAdmin')

@section('content')
<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Data Profil User
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
                  <tbody>
                    @foreach($user_login as $user)
                    <tr>
                      <td>
                        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span> <br> {{$user->nama}} <br>{{$user->email}}</td>
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