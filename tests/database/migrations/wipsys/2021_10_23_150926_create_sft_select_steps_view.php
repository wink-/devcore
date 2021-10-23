<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftSelectStepsView extends Migration
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
            CREATE VIEW `sft_select_steps` AS select `sft_steps`.`code` AS `code`,`sft_steps`.`description` AS `description`,if(`sft_steps`.`equipment_hours`,concat(`sft_steps`.`code`,' - ',`sft_steps`.`description`,' (process)'),concat(`sft_steps`.`code`,' - ',`sft_steps`.`description`,' (manual)')) AS `code_and_description`,`sft_steps`.`equipment_hours` AS `equipment_hours` from `sft_steps` order by `sft_steps`.`code`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_select_steps`;
        SQL;
    }
}
