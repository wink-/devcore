<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuritiesTable extends Migration
{
    public function up()
    {
        Schema::create('securities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_code')->nullable();
            $table->string('scope')->nullable();
            $table->datetime('time_stamp')->nullable();
            $table->timestamps();
        });
    }
}
