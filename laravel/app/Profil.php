<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
  protected $table = 'profil';
  protected $fillable = [
    'Schwimmen'
  ];

  <input type="checkbox" name="profil[]" value="1">Schwimmen<br>
  <input type="checkbox" name="profil[]" value="2">Tanzen<br>


  public function store(Request $request)
  {
    $profil = App\Profil::create($request->only('Schwimmen','Tanzen');

    $profil->profil()->sync($request->profil);
  }

}
