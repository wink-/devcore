<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValuePeriodsTable extends Migration
{
    public function up()
    {
        Schema::create('form_value_periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('form_name')->nullable();
            $table->string('period_1')->nullable();
            $table->string('period_2')->nullable();
            $table->string('period_3')->nullable();
            $table->string('period_4')->nullable();
            $table->string('period_5')->nullable();
            $table->string('period_6')->nullable();
            $table->string('period_7')->nullable();
            $table->string('period_8')->nullable();
            $table->string('period_9')->nullable();
            $table->string('period_10')->nullable();
            $table->string('period_11')->nullable();
            $table->string('period_12')->nullable();
            $table->string('period_13')->nullable();
            $table->string('period_14')->nullable();
            $table->string('period_15')->nullable();
            $table->string('period_16')->nullable();
            $table->string('period_17')->nullable();
            $table->string('period_18')->nullable();
            $table->string('period_19')->nullable();
            $table->string('period_20')->nullable();
            $table->string('tank')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->timestamps();
        });
    }
}
