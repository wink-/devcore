<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCalDevicesTable extends Migration
{
    public function up()
    {
        Schema::table('cal_devices', function (Blueprint $table) {
            $table->unsignedBigInteger('source_id')->nullable();
            $table->foreign('source_id', 'source_fk_3208608')->references('id')->on('cal_sources');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id', 'type_fk_3208609')->references('id')->on('cal_types');
            $table->unsignedBigInteger('period_id')->nullable();
            $table->foreign('period_id', 'period_fk_3208610')->references('id')->on('cal_periods');
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id', 'location_fk_3208611')->references('id')->on('cal_locations');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id', 'owner_fk_3208614')->references('id')->on('cal_owners');
        });
    }
}
