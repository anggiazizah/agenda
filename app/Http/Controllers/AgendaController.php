<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Shalat;
use App\Models\Dzikir;
use Auth;

class AgendaController extends Controller
{
    public function post(Request $request)
    {
        Agenda::create([
            'user_id' => Auth::user()->id,
            'shalat' => json_encode($request->shalat),
            'dzikir' => json_encode($request->dzikir),
            'berbuat_baik' => $request->kebaikan,
            'ceramah' => $request->ceramah
        ]);

        return redirect('/beranda');
    }

    public function agenda(){

        $shalats = Shalat::all();
        $dzikirs = Dzikir::all();
          return view('layouts.agenda', compact('shalats', 'dzikirs'));
      }
    
      public function agendaAdmin(){
        return view('admin.agendaAdmin');
    }
}
