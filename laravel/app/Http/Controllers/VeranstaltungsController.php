<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veranstaltung;

class VeranstaltungsController extends Controller
{
    public function index()
    {
      return view ('admin.admin_createEvent');
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
      return view('admin.admin_showcreatedEvent')->with('veranstaltung',$veranstaltung);


    }
    public function display()
    {
      $veranstaltungen = Veranstaltung::all();
      return view ('admin.admin')->with('veranstaltungen',$veranstaltungen);
    }

    public function displayForUser()
    {
      $veranstaltungen = Veranstaltung::all();
      return view ('user.eventshow')->with('veranstaltungen',$veranstaltungen);
    }

    public function edit($id)
    {
      $veranstaltungen = Veranstaltung::find($id);
      return view('admin.admin_editEvent')->with('veranstaltungen', $veranstaltungen);
    }

    public function update(Request $request, $id)
    {
      $veranstaltungen = Veranstaltung::find($id);

      $veranstaltungen->Eventname= $request->input('Eventname');
      $veranstaltungen->Eventtag= $request->input('Eventtag');
      $veranstaltungen->Eventuhrzeit= $request->input('Eventuhrzeit');
      $veranstaltungen->Eventort= $request->input('Eventort');
      $veranstaltungen->Eventveranstalter= $request->input('Eventveranstalter');
      $veranstaltungen->Eventbeschreibung= $request->input('Eventbeschreibung');

      if($request->hasfile('image'))
      {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); //getting image extension
        $filename = time().".".$extension;
        $file->move('uploads/eventFotos/',$filename);
        $veranstaltungen->image = $filename;
      }else{
        return $request;
        $veranstaltungen->image = "";
      }

      $veranstaltungen->save();
      return redirect('/admin')->with('veranstaltungen', $veranstaltungen);
    }

    public function delete($id)
    {
        $veranstaltungen = Veranstaltung::find($id);
        $veranstaltungen->delete();

        return redirect('/admin')->with('veranstaltungen',$veranstaltungen);
    }

    public function showOne()
    {
      return view ('admin.admin_showcreatedEvent');
    }
}
