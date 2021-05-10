<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmpsTable extends Migration
{
    public function up()
    {
        Schema::create('amps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('amp')->nullable();
            $table->integer('amp_minute')->nullable();
            $table->timestamps();
        });
    }
}
