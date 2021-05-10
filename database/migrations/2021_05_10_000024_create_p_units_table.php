<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('p_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unit')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }
}
