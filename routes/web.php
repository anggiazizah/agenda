<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\LogoutController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', 'App\Http\Controllers\BerandaController@index');


Route::get('/login', function () {
    return view('pengguna.login');
});

Route::post('/agenda', [AgendaController::class, 'post'])->name('agenda.post');

Route::get('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/layouts.agenda', [AgendaController::class, 'agenda'])->name('layouts.agenda');

Route::post('/layouts.agenda', [AgendaController::class, 'agenda'])->name('layouts.agenda');

Route::get('/layouts.profile', [ProfileController::class, 'profile'])->name('layouts.profile');

Route::post('/layouts.profile', [ProfileController::class, 'profile'])->name('layouts.profile');

Route::get('/layouts.kalender', [KalenderController::class, 'kalender'])->name('layouts.kalender');

Route::post('/layouts.kalender', [KalenderController::class, 'kalender'])->name('layouts.kalender');

Route::get('/layouts.edit', [ProfileController::class, 'edit'])->name('layouts.edit');

Route::post('/layouts.edit', [ProfileController::class, 'edit'])->name('layouts.edit');

Route::post('profile/edit', [ProfileController::class, 'update'])->name('profile.edit');

// Route::post('input', [FormController::class, 'input'])->name('input');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

//ini admin pak

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function(){

    Route::get('beranda', 'App\Http\Controllers\BerandaController@index');

Route::get('login', function () {
    return view('admin.loginAdmin');
});

// Route::get('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::post('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboardAdmin');

Route::post('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboardAdmin');

Route::get('/AdminAgenda', [AgendaController::class, 'agenda'])->name('admin.agendaAdmin');

Route::post('/AdminAgenda', [AgendaController::class, 'agenda'])->name('admin.agendaAdmin');

Route::get('/kalenderAdmin', [KalenderController::class, 'kalender'])->name('admin.kalenderAdmin');

Route::post('/kalenderAdmin', [KalenderController::class, 'kalender'])->name('admin.kalenderAdmin');

Route::get('/profileAdmin', [ProfileController::class, 'profileAdmin'])->name('admin.profileAdmin');

Route::post('/profileAdmin', [ProfileController::class, 'updateprofile'])->name('admin.profileAdmin');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


});

