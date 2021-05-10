<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysisTable extends Migration
{
    public function up()
    {
        Schema::create('analysis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('record_name')->nullable();
            $table->string('form_name')->nullable();
            $table->date('date')->nullable();
            $table->string('value_1')->nullable();
            $table->string('value_2')->nullable();
            $table->string('value_3')->nullable();
            $table->string('value_4')->nullable();
            $table->string('value_5')->nullable();
            $table->string('value_6')->nullable();
            $table->string('value_7')->nullable();
            $table->string('value_8')->nullable();
            $table->string('value_9')->nullable();
            $table->string('value_10')->nullable();
            $table->string('value_11')->nullable();
            $table->string('value_12')->nullable();
            $table->string('value_13')->nullable();
            $table->string('value_14')->nullable();
            $table->string('value_15')->nullable();
            $table->string('value_16')->nullable();
            $table->string('value_17')->nullable();
            $table->string('value_18')->nullable();
            $table->string('value_19')->nullable();
            $table->string('value_20')->nullable();
            $table->string('tank')->nullable();
            $table->string('emp_code')->nullable();
            $table->date('time_stamp')->nullable();
            $table->boolean('delete_visible')->default(0)->nullable();
            $table->string('i_dy')->nullable();
            $table->string('act_value_1')->nullable();
            $table->string('act_value_2')->nullable();
            $table->string('act_value_3')->nullable();
            $table->string('act_value_4')->nullable();
            $table->string('act_value_5')->nullable();
            $table->string('act_value_6')->nullable();
            $table->string('act_value_7')->nullable();
            $table->string('act_value_8')->nullable();
            $table->string('act_value_9')->nullable();
            $table->string('act_value_10')->nullable();
            $table->string('act_value_11')->nullable();
            $table->string('act_value_12')->nullable();
            $table->string('act_value_13')->nullable();
            $table->string('act_value_14')->nullable();
            $table->string('act_value_15')->nullable();
            $table->string('act_value_16')->nullable();
            $table->string('act_value_17')->nullable();
            $table->string('act_value_18')->nullable();
            $table->string('act_value_19')->nullable();
            $table->string('act_value_20')->nullable();
            $table->timestamps();
        });
    }
}
