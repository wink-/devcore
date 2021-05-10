<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScopesTable extends Migration
{
    public function up()
    {
        Schema::create('scopes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->timestamps();
        });
    }
}
