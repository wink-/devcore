<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalExportView extends Migration
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
            CREATE VIEW `calExport` AS select `device`.`location` AS `location`,`device`.`name` AS `name`,`calibration`.`ID` AS `ID`,`employee`.`userInit` AS `userInit`,`calibration`.`employeeID` AS `employeeID`,`calibration`.`calDate` AS `calDate`,`calibration`.`calDue` AS `calDue`,`calibration`.`status` AS `status` from (((`calibrationMaxID` join `calibration` on((`calibration`.`ID` = `calibrationMaxID`.`ID`))) join `employee` on((`employee`.`ID` = `calibration`.`employeeID`))) join `device` on((`device`.`ID` = `calibration`.`deviceID`))) where ((`calibration`.`status` = 'Active') or (`calibration`.`status` = 'CalInv')) order by `device`.`location`,`device`.`name`,`calibration`.`ID`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `calExport`;
        SQL;
    }
}
