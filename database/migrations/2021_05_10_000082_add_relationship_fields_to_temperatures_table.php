<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTemperaturesTable extends Migration
{
    public function up()
    {
        Schema::table('temperatures', function (Blueprint $table) {
            $table->unsignedBigInteger('record_id')->nullable();
            $table->foreign('record_id', 'record_fk_3579332')->references('id')->on('pd_records');
        });
    }
}
