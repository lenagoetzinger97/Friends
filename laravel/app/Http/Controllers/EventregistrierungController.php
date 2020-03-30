<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventregistrierungController extends Controller
{
    public function formular()
    {
        return view('registrierungevent');
    }

}
