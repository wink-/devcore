<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('form_type')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->boolean('archived')->default(0)->nullable();
            $table->string('revision')->nullable();
            $table->string('analysis_procedure')->nullable();
            $table->timestamps();
        });
    }
}
