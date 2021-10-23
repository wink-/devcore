<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibrationMaxIDView extends Migration
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
            CREATE VIEW `calibrationMaxID` AS select max(`calibration`.`ID`) AS `ID`,`device`.`ID` AS `deviceID`,`device`.`name` AS `name`,`device`.`description` AS `description`,`device`.`typeID` AS `typeID`,`device`.`location` AS `location`,`device`.`period` AS `period` from (`device` join `calibration` on((`device`.`ID` = `calibration`.`deviceID`))) group by `device`.`location`,`device`.`name`,`device`.`ID` order by `ID` desc
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `calibrationMaxID`;
        SQL;
    }
}
