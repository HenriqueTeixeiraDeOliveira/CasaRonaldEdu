<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('library_id');
            $table->string('title');
            $table->text('description');
            $table->unsignedSmallInteger('year');   // Range: 0 to 65535
            $table->string('genre');
            $table->string('rating');   // Adults or Kids
            $table->string('length')->nullable();
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
        Schema::dropIfExists('dvds');
    }
}
