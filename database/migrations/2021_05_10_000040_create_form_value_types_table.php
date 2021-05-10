<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValueTypesTable extends Migration
{
    public function up()
    {
        Schema::create('form_value_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('form_name')->nullable();
            $table->string('type_1')->nullable();
            $table->string('type_2')->nullable();
            $table->string('type_3')->nullable();
            $table->string('type_4')->nullable();
            $table->string('type_5')->nullable();
            $table->string('type_6')->nullable();
            $table->string('type_7')->nullable();
            $table->string('type_8')->nullable();
            $table->string('type_9')->nullable();
            $table->string('type_10')->nullable();
            $table->string('type_11')->nullable();
            $table->string('type_12')->nullable();
            $table->string('type_13')->nullable();
            $table->string('type_14')->nullable();
            $table->string('type_15')->nullable();
            $table->string('type_16')->nullable();
            $table->string('type_17')->nullable();
            $table->string('type_18')->nullable();
            $table->string('type_19')->nullable();
            $table->string('type_20')->nullable();
            $table->string('tank')->nullable();
            $table->datetime('timestamp')->nullable();
            $table->boolean('false')->default(0)->nullable();
            $table->boolean('true')->default(0)->nullable();
            $table->timestamps();
        });
    }
}
