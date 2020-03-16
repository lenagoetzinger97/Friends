<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktivitaetenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivitaeten', function (Blueprint $table) {
            $table->increments('akt_id');
            $table->string('bezeichnung'); // neu
            $table->integer('kategorie_id'); // neu
            $table->integer('aktint_id'); // neu
            $table->integer('user_id'); // neu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aktivitaeten');
    }
}
