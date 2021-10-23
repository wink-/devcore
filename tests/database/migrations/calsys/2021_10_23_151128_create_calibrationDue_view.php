<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibrationDueView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView()
    {
        return <<<SQL
            CREATE VIEW `calibrationDue` AS select `calibration`.`ID` AS `ID`,`calibrationMaxID`.`deviceID` AS `deviceID`,`calibrationMaxID`.`name` AS `name`,`calibrationMaxID`.`description` AS `description`,`calibrationMaxID`.`typeID` AS `typeID`,`calibrationMaxID`.`location` AS `location`,`calibration`.`status` AS `status`,`calibration`.`calDate` AS `calDate`,`calibration`.`calDue` AS `calDue`,`calibrationMaxID`.`period` AS `period` from (`calibrationMaxID` join `calibration` on((`calibration`.`ID` = `calibrationMaxID`.`ID`))) where (`calibration`.`calDue` > 0) order by `calibration`.`calDue`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `calibrationDue`;
        SQL;
    }
}
