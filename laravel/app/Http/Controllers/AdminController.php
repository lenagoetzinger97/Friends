<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veranstaltung;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      $veranstaltungen = Veranstaltung::all();
      return view ('admin.admin')->with('veranstaltungen',$veranstaltungen);  
    }


}
