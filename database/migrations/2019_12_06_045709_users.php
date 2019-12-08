<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users',function (Blueprint $table){
            $table->bigIncrements('user_id');
            $table->string('name','20');
            $table->string('username','30');
            $table->string('email','100');
            $table->string('password','200');
            $table->text('image')->nullable();
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('group_id')->on('user_groups')->onUpdate('cascade');
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
        Schema::dropIfExists('users');
    }
}
