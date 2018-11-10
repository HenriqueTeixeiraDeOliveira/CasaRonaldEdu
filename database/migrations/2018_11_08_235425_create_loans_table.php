<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('volunteer_before');
            $table->integer('volunteer_id_before');
            $table->dateTime('loaned_at');
            $table->string('volunteer_after')->nullable();
            $table->string('volunteer_id_after')->nullable();
            $table->dateTime('returned_at')->nullable();
            $table->timestamps();
        });

        Schema::create('loanables', function (Blueprint $table) {       // POLYMORPHIC PIVOT TABLE (MANY TO MANY RELATIONSHIP)
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('loanable_id');
            $table->string('loanable_type');
            $table->timestamps();

            $table->unique(['loan_id','loanable_id','loanable_type']);
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loanables');

        Schema::dropIfExists('loans');
    }
}
