<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('pd_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('active')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->string('command')->nullable();
            $table->float('multiplier', 15, 4)->nullable();
            $table->string('description')->nullable();
            $table->integer('graph_y_lower')->nullable();
            $table->integer('graph_y_upper')->nullable();
            $table->timestamps();
        });
    }
}
