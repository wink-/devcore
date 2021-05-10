<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValueActionsTable extends Migration
{
    public function up()
    {
        Schema::create('form_value_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('form_name')->nullable();
            $table->boolean('action_1')->default(0)->nullable();
            $table->boolean('action_2')->default(0)->nullable();
            $table->boolean('action_3')->default(0)->nullable();
            $table->boolean('action_4')->default(0)->nullable();
            $table->boolean('action_5')->default(0)->nullable();
            $table->boolean('action_6')->default(0)->nullable();
            $table->boolean('action_7')->default(0)->nullable();
            $table->boolean('action_8')->default(0)->nullable();
            $table->boolean('action_9')->default(0)->nullable();
            $table->boolean('action_10')->default(0)->nullable();
            $table->boolean('action_11')->default(0)->nullable();
            $table->boolean('action_12')->default(0)->nullable();
            $table->boolean('action_13')->default(0)->nullable();
            $table->boolean('action_14')->default(0)->nullable();
            $table->boolean('action_15')->default(0)->nullable();
            $table->boolean('action_16')->default(0)->nullable();
            $table->boolean('action_17')->default(0)->nullable();
            $table->boolean('action_18')->default(0)->nullable();
            $table->boolean('action_19')->default(0)->nullable();
            $table->boolean('action_20')->default(0)->nullable();
            $table->string('tank')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->timestamps();
        });
    }
}
