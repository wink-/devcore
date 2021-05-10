<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackingListsTable extends Migration
{
    public function up()
    {
        Schema::create('packing_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number')->nullable();
            $table->date('date')->nullable();
            $table->string('employee_code')->nullable();
            $table->string('user_code')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('destination_code')->nullable();
            $table->string('carrier_code')->nullable();
            $table->string('freight_code')->nullable();
            $table->string('customer_purchase_order')->nullable();
            $table->boolean('cod')->default(0)->nullable();
            $table->date('date_received')->nullable();
            $table->boolean('printed')->default(0)->nullable();
            $table->string('session')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
