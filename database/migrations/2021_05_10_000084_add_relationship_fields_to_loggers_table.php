<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLoggersTable extends Migration
{
    public function up()
    {
        Schema::table('loggers', function (Blueprint $table) {
            $table->unsignedBigInteger('logger_type_id')->nullable();
            $table->foreign('logger_type_id', 'logger_type_fk_3579312')->references('id')->on('logger_types');
        });
    }
}
