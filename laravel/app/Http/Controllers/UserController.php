<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $allProfiles = Profil::all()->where('userId', Auth::user()->id)->last();
        if(empty($allProfiles)){
          return view('user.userprofil');
        }
        return view('user.userprofil')->with('profils', $allProfiles);
    }

    public function edit()
    {
        $allProfiles = Profil::all()->where('userId', Auth::user()->id)->last();
        if(empty($allProfiles)){
          return view('user.useredit');
        }
        return view('user.useredit')->with('profils', $allProfiles);
    }

    public function event()
    {
        return view('user.eventshow');
    }

    public function friends()
    {
        return view('user.friends');
    }



}
