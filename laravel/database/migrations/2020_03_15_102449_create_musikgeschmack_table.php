<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusikgeschmackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musikgeschmack', function (Blueprint $table) {
            $table->increments('mg_id');
            $table->string('bezeichnung'); // neu
            $table->integer('genre_id'); // neu
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
        Schema::dropIfExists('musikgeschmack');
    }
}
