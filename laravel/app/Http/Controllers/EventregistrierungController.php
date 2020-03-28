<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventregistrierungController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function formular()
    {
        return view('registrierungevent');
    }
}
