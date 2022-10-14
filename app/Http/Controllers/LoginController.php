<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\LoginController;
use App\Models\Shalat;
use App\Models\Dzikir;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function PostLogin(Request $request)
   {
   /* dd($request->all());*/
   if (Auth::attempt(['nis' => $request->username, 'password' => $request->password])){
        return redirect('/beranda');
   }

   return redirect('login');
   }

   public function AdminLogin(Request $request)
    {
        if(Auth::attempt(['nis' => $request->input, 'password' => $request->password])) {
            $user = User::find(Auth::user()->id);
            $user->logged_in = true;
            $user->update();
            return redirect(route('layouts.dashboard'));
        } elseif(Auth::attempt(['email' => $request->input, 'password' => $request->password])) {
            $user = User::find(Auth::user()->id);
            $user->logged_in = true;
            $user->update();
            return redirect(route('layouts.dashboard'));
        } else {
            return redirect('/login');
        }
    }



    

   
// public function insertCheckbox(Request $request){
//     if(!empty($request->input('isian'))){
//         $checkbox = join(',',$request->input('isian'));
//         \DB::table('checkbox')->insert(['isian'=>$checkbox]);
//     }else{
//         $checkbox = '';
//     }
//     dd($checkbox);
// }

// public function checkboxPage(Request $request)
// {
//     return view('layouts.agenda');
// }
}
