<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class UserprofilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('user.userprofil');
    }
