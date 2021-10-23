<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ups', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('tracking_number', 220)->nullable()->index('tracking_number');
            $table->string('receiver_name', 220)->nullable()->index('receiver_name');
            $table->string('shipment_process_timestamp', 220)->nullable();
            $table->string('service_type', 220)->nullable();
            $table->decimal('weight', 10, 2)->nullable()->index('weight');
            $table->string('ref_1', 220)->nullable()->index('ref_1');
            $table->string('ref_2', 220)->nullable()->index('ref_2');
            $table->string('ref_3', 220)->nullable()->index('ref_3');
            $table->string('ref_4', 220)->nullable()->index('ref_4');
            $table->string('ref_5', 220)->nullable()->index('ref_5');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->bigInteger('revision')->nullable();
            $table->boolean('archive')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ups');
    }
}
