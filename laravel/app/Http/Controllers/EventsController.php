<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index()
    {
      return view('admin_createEvent');
    }

    public function store(Request $request)
    {
      $event = new Event();

      $event->eventName = $request->input('eventName');
      $event->when = $request->input('when');
      $event->time = $request->input('time');
      $event->where = $request->input('where');
      $event->organizer = $request->input('organizer');
      $event->description = $request->input('description');

      if ($request->hasfile('image'))
      {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); //getting image extension
        $filename = time() . '.' . $extension;
        $file->move('uploads/eventPictures/',$filename);
        $event->image = $filename;
      }else
      {
        return $request;
        $event->image = '';
      }

      $event->save();

      return view('admin_createEvent')->with('admin_createEvent', $event);
    }
}
