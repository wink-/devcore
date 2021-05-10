<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDestinationsTable extends Migration
{
    public function up()
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_code_id')->nullable();
            $table->foreign('customer_code_id', 'customer_code_fk_3208274')->references('id')->on('customers');
        });
    }
}
