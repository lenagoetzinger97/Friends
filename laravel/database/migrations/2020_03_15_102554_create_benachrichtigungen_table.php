<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenachrichtigungenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benachrichtigungen', function (Blueprint $table) {
            $table->increments('benachrichtigungen_id');
            $table->integer('matchlikes_id'); // neu
            $table->integer('match_id'); // neu
            $table->integer('anfrage_id'); // neu
            $table->boolean('anfr_ant'); // neu
            $table->boolean('gel_ungel'); // neu
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
        Schema::dropIfExists('benachrichtigungen');
    }
}
