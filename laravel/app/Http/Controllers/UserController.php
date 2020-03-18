<?php

namespace App\Http\Controllers;

use App\Profil;
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
        return view('user.userprofil');
    }

    public function edit()
    {
        return view('user.useredit');
    }
}
