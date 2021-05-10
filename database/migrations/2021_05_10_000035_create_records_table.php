<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('form_name')->nullable();
            $table->string('form_type')->nullable();
            $table->string('scope_name')->nullable();
            $table->string('image')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->integer('capacity_old')->nullable();
            $table->string('capacity_unit')->nullable();
            $table->float('capacity', 10, 3)->nullable();
            $table->timestamps();
        });
    }
}
