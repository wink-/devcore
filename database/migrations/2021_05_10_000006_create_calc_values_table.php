<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcValuesTable extends Migration
{
    public function up()
    {
        Schema::create('calc_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('value_name')->nullable();
            $table->string('description')->nullable();
            $table->string('formula')->nullable();
            $table->integer('order_calc')->nullable();
            $table->string('form_name')->nullable();
            $table->integer('decimal_places')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->timestamps();
        });
    }
}
