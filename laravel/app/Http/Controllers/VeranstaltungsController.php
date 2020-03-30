<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veranstaltung;

class VeranstaltungsController extends Controller
{
    public function index()
    {
      return view ('admin_createEvent');
    }

    public function store(Request $request)
    {
      $veranstaltung = new Veranstaltung();

      $veranstaltung->Eventname= $request->input('Eventname');
      $veranstaltung->Eventtag= $request->input('Eventtag');
      $veranstaltung->Eventuhrzeit= $request->input('Eventuhrzeit');
      $veranstaltung->Eventort= $request->input('Eventort');
      $veranstaltung->Eventveranstalter= $request->input('Eventveranstalter');
      $veranstaltung->Eventbeschreibung= $request->input('Eventbeschreibung');

      if($request->hasfile('image'))
      {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); //getting image extension
        $filename = time().".".$extension;
        $file->move('uploads/eventFotos/',$filename);
        $veranstaltung->image = $filename;
      }else{
        return $request;
        $veranstaltung->image = "";
      }

      $veranstaltung->save();
      return view('admin_createEvent')->with('veranstaltung',$veranstaltung);


    }
}
