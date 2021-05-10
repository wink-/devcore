<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValueVisiblesTable extends Migration
{
    public function up()
    {
        Schema::create('form_value_visibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('form_name')->nullable();
            $table->string('visible_1')->nullable();
            $table->string('visible_2')->nullable();
            $table->string('visible_3')->nullable();
            $table->string('visible_4')->nullable();
            $table->string('visible_5')->nullable();
            $table->string('visible_6')->nullable();
            $table->string('visible_7')->nullable();
            $table->string('visible_8')->nullable();
            $table->string('visible_9')->nullable();
            $table->string('visible_10')->nullable();
            $table->string('visible_11')->nullable();
            $table->string('visible_12')->nullable();
            $table->string('visible_13')->nullable();
            $table->string('visible_14')->nullable();
            $table->string('visible_15')->nullable();
            $table->string('visible_16')->nullable();
            $table->string('visible_17')->nullable();
            $table->string('visible_18')->nullable();
            $table->string('visible_19')->nullable();
            $table->string('visible_20')->nullable();
            $table->string('tank')->nullable();
            $table->datetime('timestamp')->nullable();
            $table->timestamps();
        });
    }
}
