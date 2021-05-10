<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpsTable extends Migration
{
    public function up()
    {
        Schema::create('ups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tracking_number')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('shipment_process_timestamp')->nullable();
            $table->string('service_type')->nullable();
            $table->float('weight', 10, 2)->nullable();
            $table->string('ref_1')->nullable();
            $table->string('ref_2')->nullable();
            $table->string('ref_3')->nullable();
            $table->string('ref_4')->nullable();
            $table->string('ref_5')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
