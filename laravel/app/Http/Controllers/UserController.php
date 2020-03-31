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

    public function event()
    {
        return view('user.eventshow');
    }

    public function activity()
    {
        return view('user.activitymatch');
    }

    public function music()
    {
        return view('user.musicmatch');
    }

    public function friends()
    {
        return view('user.friends');
    }

//neu


public function store(Request $request)
{
  $edit = new Edit();

  $edit->Schwimmen= $request->input('Schwimmen');


  $edit->save();
  return view('userprofil')->with('edit',$edit);


}


}
