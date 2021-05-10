<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTypesTable extends Migration
{
    public function up()
    {
        Schema::create('form_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('form_type')->nullable();
            $table->string('description')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->timestamps();
        });
    }
}
