<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

      if($r->Schwimmen == "on"){
        $profil->Schwimmen = 'true';
      }
      else{
        $profil->Schwimmen = 'false';
      }

      if($r->Tanzen == "on"){
        $profil->Tanzen = 'true';
      }
      else{
        $profil->Tanzen = 'false';
      }

      if($r->Fitness == "on"){
        $profil->Fitness = 'true';
      }
      else{
        $profil->Fitness = 'false';
      }

      if($r->Handball == "on"){
        $profil->Handball = 'true';
      }
      else{
        $profil->Handball = 'false';
      }

      if($r->Klettern == "on"){
        $profil->Klettern = 'true';
      }
      else{
        $profil->Klettern = 'false';
      }

      if($r->Minigolf == "on"){
        $profil->Minigolf = 'true';
      }
      else{
        $profil->Minigolf = 'false';
      }

      if($r->Wandern == "on"){
        $profil->Wandern = 'true';
      }
      else{
        $profil->Wandern = 'false';
      }

      if($r->Tennis == "on"){
        $profil->Tennis = 'true';
      }
      else{
        $profil->Tennis = 'false';
      }

      $profil->userid = Auth::user()->id;
      $profil->save();
      return redirect('/userprofil');
  }

}
