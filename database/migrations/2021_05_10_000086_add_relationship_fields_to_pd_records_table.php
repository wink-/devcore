<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPdRecordsTable extends Migration
{
    public function up()
    {
        Schema::table('pd_records', function (Blueprint $table) {
            $table->unsignedBigInteger('logger_id')->nullable();
            $table->foreign('logger_id', 'logger_fk_3579321')->references('id')->on('loggers');
            $table->unsignedBigInteger('record_type_id')->nullable();
            $table->foreign('record_type_id', 'record_type_fk_3579322')->references('id')->on('record_types');
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->foreign('unit_id', 'unit_fk_3579326')->references('id')->on('pd_units');
        });
    }
}
