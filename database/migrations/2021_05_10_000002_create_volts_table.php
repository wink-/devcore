<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoltsTable extends Migration
{
    public function up()
    {
        Schema::create('volts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('volt', 15, 1)->nullable();
            $table->timestamps();
        });
    }
}
