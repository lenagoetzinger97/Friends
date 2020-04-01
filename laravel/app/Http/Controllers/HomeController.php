<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veranstaltung;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $veranstaltungen = Veranstaltung::find([1,2]);
        return view('user.homeuser')->with('veranstaltungen',$veranstaltungen);
    }
}
