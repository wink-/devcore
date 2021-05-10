<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValueUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('form_value_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('form_name')->nullable();
            $table->string('unit_1')->nullable();
            $table->string('unit_2')->nullable();
            $table->string('unit_3')->nullable();
            $table->string('unit_4')->nullable();
            $table->string('unit_5')->nullable();
            $table->string('unit_6')->nullable();
            $table->string('unit_7')->nullable();
            $table->string('unit_8')->nullable();
            $table->string('unit_9')->nullable();
            $table->string('unit_10')->nullable();
            $table->string('unit_11')->nullable();
            $table->string('unit_12')->nullable();
            $table->string('unit_13')->nullable();
            $table->string('unit_14')->nullable();
            $table->string('unit_15')->nullable();
            $table->string('unit_16')->nullable();
            $table->string('unit_17')->nullable();
            $table->string('unit_18')->nullable();
            $table->string('unit_19')->nullable();
            $table->string('unit_20')->nullable();
            $table->string('tank')->nullable();
            $table->datetime('timestamp')->nullable();
            $table->timestamps();
        });
    }
}
