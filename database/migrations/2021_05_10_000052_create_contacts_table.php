<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_code')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('extension')->nullable();
            $table->string('email')->nullable();
            $table->string('cell')->nullable();
            $table->string('fax')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->string('quote_emails')->nullable();
            $table->boolean('email_quote_print')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
