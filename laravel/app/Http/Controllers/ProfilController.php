<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function profil()
  {
    return view('user.matches');
  }


  public function add(Request $r)
  {
    $profil = new Profil;

      if($r->Schwimmen == "on"){
        $profil->Schwimmen = 'true';
      }
      else{
        $profil->Schwimmen = 'false';
      }

      if($r->Tanzen == "on"){
        $profil->Tanzen = 'true';
      }
      else{
        $profil->Tanzen = 'false';
      }

      if($r->Fitness == "on"){
        $profil->Fitness = 'true';
      }
      else{
        $profil->Fitness = 'false';
      }

      if($r->Handball == "on"){
        $profil->Handball = 'true';
      }
      else{
        $profil->Handball = 'false';
      }

      if($r->Klettern == "on"){
        $profil->Klettern = 'true';
      }
      else{
        $profil->Klettern = 'false';
      }

      if($r->Minigolf == "on"){
        $profil->Minigolf = 'true';
      }
      else{
        $profil->Minigolf = 'false';
      }

      if($r->Wandern == "on"){
        $profil->Wandern = 'true';
      }
      else{
        $profil->Wandern = 'false';
      }

      if($r->Tennis == "on"){
        $profil->Tennis = 'true';
      }
      else{
        $profil->Tennis = 'false';
      }
      $profil->userid = Auth::user()->id;
      $profil->save();
//
      if($r->image != null){
      $filename = $r->image;
      $extension = $filename->getClientOriginalExtension();
        //Validator
      $arr_extensions=Array('jpeg', 'JPG', 'jpg', 'png', 'PNG');
        foreach ($arr_extensions as $goodExtension) {

          if($goodExtension == $extension){

            $user = Auth::user();
            $userid = $user->id;

            //$eingabe nimmt die hochgeladene Datei entgegnen
            $eingabe = $r->image;

            //schreibt den Namen der Datei in $filename
            $filename = $eingabe->getClientOriginalName();

            //gibt den Pfad für Speicherung des Bildes an (nicht public)
            $file_path = public_path() . "/uploads/profilFotos/" .$filename;

            $currentUser = Auth::user();
            $currentUser->imageUrl = "/uploads/profilFotos/" .$filename;
            $currentUser->save();

            //wurde der "submit" Button geklickt wird die Datei in das gewünschte Verzeichnes geladen

            move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);


            //Durch redirect wird man auf eine gewünschte Seite geleitet.
            // mit ->with() habe ich dem View gewünschte Mitteilungen(Hier eine success-Meldung wenn es geklappt hat) übergeben
            return redirect('/userprofil')->with('success', 'Profilbild erfolgreich hochgeladen!');

            //Seite wird geladen...


 //
            }

          return redirect('/userprofil');
          }

        }
        return redirect('/userprofil')->with('success', 'Profil erfolgreich aktualisiert!');
      }
    }
