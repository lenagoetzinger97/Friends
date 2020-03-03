<?php

namespace App\Http\Controllers;

use App\ProfilEdit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfilEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktivitaeten = DB::select('select * from aktivitaeten', [1]);
        
        return view('profilEdit', ['aktivitaeten' => $aktivitaeten]);
        // return view('profilEdit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProfilEdit  $profilEdit
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilEdit $profilEdit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfilEdit  $profilEdit
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilEdit $profilEdit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfilEdit  $profilEdit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilEdit $profilEdit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfilEdit  $profilEdit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilEdit $profilEdit)
    {
        //
    }





    // update
    // löschen
    // insert


    // update - vom Benutzer geänderter Name, Benutzername, Alter und Ort in der Datenbank aktualisieren

    function aktualisieren() {

        $user_aktuell = Auth::user()->id;

        $bname = $_POST['benutzername'];
        $name = $_POST['name'];
        $alter = $_POST['alter'];
        $ort = $_POST['ort'];


        // Benutzername
        if(!empty($_POST['benutzername'])) {

            DB::table('users')
                ->where('id', $user_aktuell)
                ->update(['name' => $bname]);

        }

            

        // Name
        if(!empty($_POST['name'])) {

            DB::table('users')
                ->where('id', $user_aktuell)
                ->update(['name' => $name]);
            
        }

            

        // Alter
        if(!empty($_POST['alter'])) {

            DB::table('users')
                ->where('id', $user_aktuell)
                ->update(['alter' => $alter]);
            
        }

            

        // Ort
        if(!empty($_POST['ort'])) {

            DB::table('users')
                ->where('id', $user_aktuell)
                ->update(['name' => $ort]);
            
        }

            

    }




    // löschen - alle Werte von Charaktereigenschaften bis Urlaubstyp erstmal komplett löschen (und anschließend auslesen was er angehakt hat)
    // aktivitaet_user
    // c_eigenschaften_user
    // musikgeschmack_user
    // urlaubstyp_user

    function delete() {

        $user_aktuell = Auth::user()->id;

        // aktivitaet_user

        // $sql = "DELETE FROM aktivitaet_user WHERE user_id=$user_aktuell";

        // if (mysqli_query($sql)) {
        //  echo "Record deleted successfully";
        // } else {
        //  echo "Error deleting record";
        // }

        DB::table('aktivitaet_user')->where('user_id', $user_aktuell)->delete();




        // c_eigenschaften_user

        // $sql = "DELETE FROM c_eigenschaften_user WHERE user_id=$user_aktuell";

        // if (mysqli_query($sql)) {
        //  echo "Record deleted successfully";
        // } else {
        //  echo "Error deleting record";
        // }

        DB::table('c_eigenschaften_user')->where('user_id', $user_aktuell)->delete();




        // musikgeschmack_user

        // $sql = "DELETE FROM musikgeschmack_user WHERE user_id=$user_aktuell";

        // if (mysqli_query($sql)) {
        //  echo "Record deleted successfully";
        // } else {
        //  echo "Error deleting record";
        // }

        DB::table('musikgeschmack_user')->where('user_id', $user_aktuell)->delete();




        // urlaubstyp_user

        // $sql = "DELETE FROM urlaubstyp_user WHERE user_id=$user_aktuell";

        // if (mysqli_query($sql)) {
        //  echo "Record deleted successfully";
        // } else {
        //  echo "Error deleting record";
        // }

        DB::table('urlaubstyp_user')->where('user_id', $user_aktuell)->delete();

    }



    // insert - alle Werte von Charaktereigenschaften bis Urlaubstyp auslesen und in die Datenbank (Verknüpfungstabelle) speichern
    // aktivitaet_user
    // c_eigenschaften_user
    // musikgeschmack_user
    // urlaubstyp_user

    function hinzufuegen() {

        $user_aktuell = Auth::user()->id;

        // $aktivitaetID = DB::table('aktivitaeten')->find(1);
        // $aktivitaetID = DB::table('aktivitaeten')->find("Achterbahn fahren");



        // aktivitaet_user

        if ($_POST['Achterbahnfahren'] == "101") {
            DB::table('aktivitaet_user')->insert(['user_id' => $user_aktuell, 'aktivitaet_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['Geschichtliches'] == "119") {
            DB::table('aktivitaet_user')->insert(['user_id' => $user_aktuell, 'aktivitaet_id' => 19, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }


        // c_eigenschaften_user

        if ($_POST['extrovertiert'] == "201") {
            DB::table('c_eigenschaften_user')->insert(['user_id' => $user_aktuell, 'c_eigenschaft_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }


        // musikgeschmack_user

        if ($_POST['ClassicRock'] == "301") {
            DB::table('musikgeschmack_user')->insert(['user_id' => $user_aktuell, 'music_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }


        // urlaubstyp_user

        if ($_POST['Strandurlaub'] == "401") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['Staedtetrips'] == "402") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['Aktivitaeten'] == "403") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['SeenBerge'] == "404") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['LuxusUrlaub'] == "405") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 15, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['VillaUrlaub'] == "406") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 16, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['SkiUrlaub'] == "407") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 13, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['Wintersonne'] == "408") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 14, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['SommerUrlaub'] == "409") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['UrlaubPaare'] == "410") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['Familienurlaub'] == "411") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 12, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['Maennerurlaub'] == "412") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['UrlaubFreundinnen'] == "413") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['UrlaubFreunden'] == "414") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['MulticenterUrlaub'] == "415") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

        if ($_POST['RomantischerUrlaub'] == "416") {
            DB::table('urlaubstyp_user')->insert(['user_id' => $user_aktuell, 'urlaubstyp_id' => 11, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        }

    }



    function ausfuehren() {
        aktualisieren();
        delete();
        hinzufuegen();
    }


}
