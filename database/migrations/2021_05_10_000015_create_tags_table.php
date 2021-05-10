<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number')->nullable();
            $table->integer('work_order_number')->nullable();
            $table->float('quantity', 10, 2)->nullable();
            $table->float('quantity_shipped', 10, 2)->nullable();
            $table->boolean('shipped')->default(0)->nullable();
            $table->date('date_received')->nullable();
            $table->longText('note')->nullable();
            $table->integer('ordinal')->nullable();
            $table->string('container')->nullable();
            $table->boolean('printed')->default(0)->nullable();
            $table->string('sessionid')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
