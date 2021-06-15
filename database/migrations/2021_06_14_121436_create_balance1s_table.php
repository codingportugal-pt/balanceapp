<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalance1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance1s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();//definir apenas números positivos.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->double('amount',10,2)->default(0);

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance1s');
    }
}
