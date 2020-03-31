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


  public function store(Request $request)
  {
    $profil = new Profil();

    $request->profil => array(0 => "Schwimmen", 1 => "Tanzen")

    $profil->save();
    return view('user.userprofil')->with('profil',$profil);
  }

  /*public function store(Request $request)
  {
    $profil = new Profil();

    $profil->Schwimmen= $request->input('Schwimmen');


    $profil->save();
    return view('user.userprofil');


  }*/
}
