<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValueRangesTable extends Migration
{
    public function up()
    {
        Schema::create('form_value_ranges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('form_name')->nullable();
            $table->string('min_1')->nullable();
            $table->string('max_1')->nullable();
            $table->string('min_2')->nullable();
            $table->string('max_2')->nullable();
            $table->string('min_3')->nullable();
            $table->string('max_3')->nullable();
            $table->string('min_4')->nullable();
            $table->string('max_4')->nullable();
            $table->string('min_5')->nullable();
            $table->string('max_5')->nullable();
            $table->string('min_6')->nullable();
            $table->string('max_6')->nullable();
            $table->string('min_7')->nullable();
            $table->string('max_7')->nullable();
            $table->string('min_8')->nullable();
            $table->string('max_8')->nullable();
            $table->string('min_9')->nullable();
            $table->string('max_9')->nullable();
            $table->string('min_10')->nullable();
            $table->string('max_10')->nullable();
            $table->string('min_11')->nullable();
            $table->string('max_11')->nullable();
            $table->string('min_12')->nullable();
            $table->string('max_12')->nullable();
            $table->string('min_13')->nullable();
            $table->string('max_13')->nullable();
            $table->string('min_14')->nullable();
            $table->string('max_14')->nullable();
            $table->string('min_15')->nullable();
            $table->string('max_15')->nullable();
            $table->string('min_16')->nullable();
            $table->string('max_16')->nullable();
            $table->string('min_17')->nullable();
            $table->string('max_17')->nullable();
            $table->string('min_18')->nullable();
            $table->string('max_18')->nullable();
            $table->string('min_19')->nullable();
            $table->string('max_19')->nullable();
            $table->string('min_20')->nullable();
            $table->string('max_20')->nullable();
            $table->string('tank')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->timestamps();
        });
    }
}
