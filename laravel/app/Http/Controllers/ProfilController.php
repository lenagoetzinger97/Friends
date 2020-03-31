<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function profil()
  {
    return view('user.matches');
  }


  public function add(Request $r)
  {
    $profil = new Profil;

      if($r->schwimmen == "on"){
        $profil->Schwimmen = true;
      }
      else{
        $profil->Schwimmen = false;
      }
      if($r->tanzen == "on"){
        $profil->Tanzen = true;
      }
      else{
        $profil->Schwimmen = false;
      }

      $profil->save();
      return view('userprofil')->with('profil' $profil);
  }

}
