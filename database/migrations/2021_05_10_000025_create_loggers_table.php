<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoggersTable extends Migration
{
    public function up()
    {
        Schema::create('loggers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('active')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('ip_address')->nullable();
            $table->integer('port')->nullable();
            $table->timestamps();
        });
    }
}
