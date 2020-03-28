<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeranstaltungenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veranstaltungen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Eventname');
            $table->date('Eventtag');
            $table->string('Eventuhrzeit');
            $table->string('Eventort');
            $table->string('Eventveranstalter');
            $table->char('Eventbeschreibung',255);
            $table->mediumText('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veranstaltungen');
    }
}
