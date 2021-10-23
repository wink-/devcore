<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibration', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('deviceID', 15)->nullable()->index('deviceID');
            $table->string('calibratedByID', 15)->nullable()->index('calibratedByID');
            $table->string('employeeID', 15)->nullable()->index('employeeID');
            $table->date('calDate')->nullable()->index('calDate');
            $table->date('calDue')->nullable()->index('calDue');
            $table->string('status', 15)->nullable()->index('status');
            $table->string('record')->nullable();
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
        Schema::dropIfExists('calibration');
    }
}
