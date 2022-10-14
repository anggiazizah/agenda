<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->kelas = $request->kelas;
        $user->nis = $request->nis;
        $user->email = $request->email;

        $user->update();

        return redirect('layouts.profile');
    }

    public function profile(){
        return view('layouts.profile');
    }

    public function edit(){
        return view('layouts.edit');
     }

     public function profileAdmin(){
        $user_login = User::where('role', 'siswa')->get();
        return view('admin.profileAdmin', compact('user_login'));  
    }
}
