<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('customer_purchase_order')->nullable();
            $table->datetime('date')->nullable();
            $table->longText('note')->nullable();
            $table->string('emails')->nullable();
            $table->boolean('printed')->default(0)->nullable();
            $table->string('session')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
