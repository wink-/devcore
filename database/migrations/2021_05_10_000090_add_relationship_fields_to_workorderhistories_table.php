<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWorkorderhistoriesTable extends Migration
{
    public function up()
    {
        Schema::table('workorderhistories', function (Blueprint $table) {
            $table->unsignedBigInteger('part_id');
            $table->foreign('part_id', 'part_fk_3208497')->references('id')->on('parts');
        });
    }
}
