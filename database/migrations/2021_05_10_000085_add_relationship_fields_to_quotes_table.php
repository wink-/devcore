<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQuotesTable extends Migration
{
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id', 'customer_fk_3208411')->references('id')->on('customers');
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->foreign('contact_id', 'contact_fk_3208413')->references('id')->on('contacts');
            $table->unsignedBigInteger('process_id');
            $table->foreign('process_id', 'process_fk_3208418')->references('id')->on('processes');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_3208446')->references('id')->on('users');
        });
    }
}
