<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $users = User::all();
        $pria = User::where('jenis_kelamin', 'laki-laki');
        $perempuan = User::where('jenis_kelamin', 'perempuan');
        return view('admin.dashboardAdmin', compact('users', 'laki-laki', 'perempuan'));
    }
}
