<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsView extends Migration
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
            CREATE VIEW `Records` AS select `Record`.`Name` AS `Name`,`Record`.`Description` AS `Description`,concat(convert(ifnull(`Form`.`Description`,'') using utf8),', ',convert(ifnull(`Form`.`Revision`,'') using utf8),if(`Record`.`Capacity`,concat(', ',cast(`Record`.`Capacity` as char charset utf8),' gallons'),'')) AS `FormHeader`,if((length(`Form`.`AnalysisProcedure`) > 0),`Form`.`AnalysisProcedure`,' ') AS `AnalysisProcedure`,`Record`.`FormName` AS `FormName`,`Form`.`Description` AS `FormDescription`,`Form`.`Revision` AS `FormRevision`,`Form`.`FormType` AS `FormType`,`Record`.`ScopeName` AS `ScopeName`,`Record`.`ImageID` AS `ImageID`,`Record`.`Capacity` AS `Capacity` from (`Record` join `Form` on((`Form`.`Name` = `Record`.`FormName`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `Records`;
        SQL;
    }
}
