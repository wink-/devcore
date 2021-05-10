<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('i_dx')->nullable();
            $table->string('record_name')->nullable();
            $table->string('form_name')->nullable();
            $table->string('value_name')->nullable();
            $table->string('value')->nullable();
            $table->date('rec_date')->nullable();
            $table->date('act_date')->nullable();
            $table->boolean('complete')->default(0)->nullable();
            $table->string('rec_emp_code')->nullable();
            $table->string('unit')->nullable();
            $table->string('act_value')->nullable();
            $table->string('scope_name')->nullable();
            $table->string('comment')->nullable();
            $table->string('tank')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('i_dy')->nullable();
            $table->integer('value_num')->nullable();
            $table->timestamps();
        });
    }
}
