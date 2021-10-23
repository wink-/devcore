<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalysisViewView extends Migration
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
            CREATE VIEW `AnalysisView` AS select `Analysis`.`ID` AS `ID`,`Analysis`.`RecordName` AS `RecordName`,`Analysis`.`FormName` AS `FormName`,concat_ws('<br>',convert(date_format(`Analysis`.`Date`,'%Y-%m-%d') using latin1),concat_ws(' ',convert(date_format(`Analysis`.`Date`,'%k:%i') using latin1),`Analysis`.`EmpCode`)) AS `Date`,concat_ws('<br>',`Analysis`.`Value1`,`Analysis`.`ActValue1`) AS `Value1`,concat_ws('<br>',`Analysis`.`Value2`,`Analysis`.`ActValue2`) AS `Value2`,concat_ws('<br>',`Analysis`.`Value3`,`Analysis`.`ActValue3`) AS `Value3`,concat_ws('<br>',`Analysis`.`Value4`,`Analysis`.`ActValue4`) AS `Value4`,concat_ws('<br>',`Analysis`.`Value5`,`Analysis`.`ActValue5`) AS `Value5`,concat_ws('<br>',`Analysis`.`Value6`,`Analysis`.`ActValue6`) AS `Value6`,concat_ws('<br>',`Analysis`.`Value7`,`Analysis`.`ActValue7`) AS `Value7`,concat_ws('<br>',`Analysis`.`Value8`,`Analysis`.`ActValue8`) AS `Value8`,concat_ws('<br>',`Analysis`.`Value9`,`Analysis`.`ActValue9`) AS `Value9`,concat_ws('<br>',`Analysis`.`Value10`,`Analysis`.`ActValue10`) AS `Value10`,concat_ws('<br>',`Analysis`.`Value11`,`Analysis`.`ActValue11`) AS `Value11`,concat_ws('<br>',`Analysis`.`Value12`,`Analysis`.`ActValue12`) AS `Value12`,concat_ws('<br>',`Analysis`.`Value13`,`Analysis`.`ActValue13`) AS `Value13`,concat_ws('<br>',`Analysis`.`Value14`,`Analysis`.`ActValue14`) AS `Value14`,concat_ws('<br>',`Analysis`.`Value15`,`Analysis`.`ActValue15`) AS `Value15`,concat_ws('<br>',`Analysis`.`Value16`,`Analysis`.`ActValue16`) AS `Value16`,concat_ws('<br>',`Analysis`.`Value17`,`Analysis`.`ActValue17`) AS `Value17`,concat_ws('<br>',`Analysis`.`Value18`,`Analysis`.`ActValue18`) AS `Value18`,concat_ws('<br>',`Analysis`.`Value19`,`Analysis`.`ActValue19`) AS `Value19`,concat_ws('<br>',`Analysis`.`Value20`,`Analysis`.`ActValue20`) AS `Value20` from `Analysis`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `AnalysisView`;
        SQL;
    }
}
