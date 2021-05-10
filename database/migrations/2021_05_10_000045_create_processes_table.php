<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->decimal('minimum_lot_charge', 15, 2)->nullable();
            $table->boolean('compliant_rohs')->default(0)->nullable();
            $table->boolean('compliant_reach')->default(0)->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
