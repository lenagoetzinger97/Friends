<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_request', function (Blueprint $table) {
            $table->increments('sr_id');
            $table->integer('user_id'); // User A (Sender)
            $table->integer('user_id'); // User B (Empfänger)
            $table->string('nachrichteninhalt'); // neu
            $table->string('antwort'); // neu
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
        Schema::dropIfExists('send_request');
    }
}
