<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('name')->nullable();
            $table->string('physical_address')->nullable();
            $table->string('address_extension')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('contact_1')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('extension_1')->nullable();
            $table->string('contact_2')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('extension_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->longText('note')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
