<?php

use Illuminate\Database\Seeder;
use App\Admin;

class VeranstaltungenSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $veranstaltung = new Veranstaltung();

        $veranstaltung->Eventname= 'Beispielhafte Praty';
        $veranstaltung->Eventtag= '2020-02-12';
        $veranstaltung->Eventuhrzeit= '21:00 Uhr';
        $veranstaltung->Eventort= 'Mosbach';
        $veranstaltung->Eventveranstalter= 'DHBW Mosbach';
        $veranstaltung->Eventbeschreibung= 'Das hier wird die coolste Party, die Mosbach je gesehen hat!';
        $veranstaltungen->image = 'uploads/eventFotos/mosbachparty.jpg';
    }
}
