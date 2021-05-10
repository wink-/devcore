<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('carrier_id')->nullable();
            $table->foreign('carrier_id', 'carrier_fk_3208265')->references('id')->on('carriers');
        });
    }
}
