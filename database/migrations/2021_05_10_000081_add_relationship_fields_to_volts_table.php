<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVoltsTable extends Migration
{
    public function up()
    {
        Schema::table('volts', function (Blueprint $table) {
            $table->unsignedBigInteger('record_id')->nullable();
            $table->foreign('record_id', 'record_fk_3579343')->references('id')->on('pd_records');
        });
    }
}
