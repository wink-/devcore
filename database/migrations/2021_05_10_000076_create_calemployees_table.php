<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalemployeesTable extends Migration
{
    public function up()
    {
        Schema::create('calemployees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iden')->nullable();
            $table->string('user_init')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }
}
