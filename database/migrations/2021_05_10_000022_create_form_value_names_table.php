<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValueNamesTable extends Migration
{
    public function up()
    {
        Schema::create('form_value_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('form_name')->nullable();
            $table->string('name_1')->nullable();
            $table->string('name_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('name_5')->nullable();
            $table->string('name_6')->nullable();
            $table->string('name_7')->nullable();
            $table->string('name_8')->nullable();
            $table->string('name_9')->nullable();
            $table->string('name_10')->nullable();
            $table->string('name_11')->nullable();
            $table->string('name_12')->nullable();
            $table->string('name_13')->nullable();
            $table->string('name_14')->nullable();
            $table->string('name_15')->nullable();
            $table->string('name_16')->nullable();
            $table->string('name_17')->nullable();
            $table->string('name_18')->nullable();
            $table->string('name_19')->nullable();
            $table->string('name_20')->nullable();
            $table->string('tank')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->string('blank')->nullable();
            $table->timestamps();
        });
    }
}
