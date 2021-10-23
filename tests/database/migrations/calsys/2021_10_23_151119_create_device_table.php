<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('name', 50)->nullable()->index('name');
            $table->string('description', 50)->nullable()->index('Description');
            $table->string('sourceID', 15)->nullable()->index('supplierID');
            $table->string('typeID', 15)->nullable()->index('typeID');
            $table->date('initDate')->nullable()->index('initDate');
            $table->string('period', 15)->nullable()->index('period');
            $table->string('location', 15)->nullable()->index('location');
            $table->string('ownerID', 15)->nullable()->index('ownership');
            $table->string('serialNumber', 15)->nullable()->index('serialNumber');
            $table->timestamp('timeStamp')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device');
    }
}
