<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Schwimmen')->nullable();
            $table->string('Tanzen')->nullable();
            $table->string('Fitness')->nullable();
            $table->string('Handball')->nullable();
            $table->string('Klettern')->nullable();
            $table->string('Minigolf')->nullable();
            $table->string('Wandern')->nullable();
            $table->string('Tennis')->nullable();
            $table->Integer('userId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
}
