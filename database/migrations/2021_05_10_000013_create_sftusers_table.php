<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSftusersTable extends Migration
{
    public function up()
    {
        Schema::create('sftusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid')->nullable();
            $table->string('code')->nullable();
            $table->string('user')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
