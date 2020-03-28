<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veranstaltung extends Model
{
    protected $table = 'veranstaltungen';
    protected $fillable = ['Eventname','Eventtag','Eventuhrzeit','Eventort','Eventveranstalter','Eventbeschreibung','image'];

}
