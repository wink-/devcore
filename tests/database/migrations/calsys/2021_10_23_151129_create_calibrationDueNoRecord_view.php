<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibrationDueNoRecordView extends Migration
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
            CREATE VIEW `calibrationDueNoRecord` AS select `calibrationDue`.`ID` AS `ID`,`calibrationDue`.`deviceID` AS `deviceID`,`calibrationDue`.`name` AS `name`,`calibrationDue`.`description` AS `description`,`calibrationDue`.`typeID` AS `typeID`,`calibrationDue`.`location` AS `location`,`calibrationDue`.`status` AS `status`,`calibrationDue`.`calDate` AS `calDate`,`calibrationDue`.`calDue` AS `calDue`,`calibrationDue`.`period` AS `period` from `calibrationDue` order by `calibrationDue`.`calDue`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `calibrationDueNoRecord`;
        SQL;
    }
}
