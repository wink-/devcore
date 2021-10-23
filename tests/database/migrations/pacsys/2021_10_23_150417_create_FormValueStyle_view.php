<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValueStyleView extends Migration
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
            CREATE VIEW `FormValueStyle` AS select `FormValueType`.`FormName` AS `FormName`,if((`FormValueType`.`Type1` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type1` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type1` = 'comment'),'text-align: left; width: 200px',''))) AS `Width1`,if((`FormValueType`.`Type2` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type2` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type2` = 'comment'),'text-align: left; width: 200px',''))) AS `Width2`,if((`FormValueType`.`Type3` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type3` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type3` = 'comment'),'text-align: left; width: 200px',''))) AS `Width3`,if((`FormValueType`.`Type4` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type4` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type4` = 'comment'),'text-align: left; width: 200px',''))) AS `Width4`,if((`FormValueType`.`Type5` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type5` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type5` = 'comment'),'text-align: left; width: 200px',''))) AS `Width5`,if((`FormValueType`.`Type6` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type6` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type6` = 'comment'),'text-align: left; width: 200px',''))) AS `Width6`,if((`FormValueType`.`Type7` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type7` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type7` = 'comment'),'text-align: left; width: 200px',''))) AS `Width7`,if((`FormValueType`.`Type8` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type8` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type8` = 'comment'),'text-align: left; width: 200px',''))) AS `Width8`,if((`FormValueType`.`Type9` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type9` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type9` = 'comment'),'text-align: left; width: 200px',''))) AS `Width9`,if((`FormValueType`.`Type10` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type10` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type10` = 'comment'),'text-align: left; width: 200px',''))) AS `Width10`,if((`FormValueType`.`Type11` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type11` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type11` = 'comment'),'text-align: left; width: 200px',''))) AS `Width11`,if((`FormValueType`.`Type12` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type12` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type12` = 'comment'),'text-align: left; width: 200px',''))) AS `Width12`,if((`FormValueType`.`Type13` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type13` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type13` = 'comment'),'text-align: left; width: 200px',''))) AS `Width13`,if((`FormValueType`.`Type14` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type14` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type14` = 'comment'),'text-align: left; width: 200px',''))) AS `Width14`,if((`FormValueType`.`Type15` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type15` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type15` = 'comment'),'text-align: left; width: 200px',''))) AS `Width15`,if((`FormValueType`.`Type16` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type16` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type16` = 'comment'),'text-align: left; width: 200px',''))) AS `Width16`,if((`FormValueType`.`Type17` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type17` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type17` = 'comment'),'text-align: left; width: 200px',''))) AS `Width17`,if((`FormValueType`.`Type18` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type18` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type18` = 'comment'),'text-align: left; width: 200px',''))) AS `Width18`,if((`FormValueType`.`Type19` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type19` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type19` = 'comment'),'text-align: left; width: 200px',''))) AS `Width19`,if((`FormValueType`.`Type20` = 'calc'),'text-align: right; width: 45px',if((`FormValueType`.`Type20` = 'data'),'text-align: right; width: 45px',if((`FormValueType`.`Type20` = 'comment'),'text-align: left; width: 150px',''))) AS `Width20` from `FormValueType` order by `FormValueType`.`FormName`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `FormValueStyle`;
        SQL;
    }
}
