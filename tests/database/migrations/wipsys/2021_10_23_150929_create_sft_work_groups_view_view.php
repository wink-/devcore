<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftWorkGroupsViewView extends Migration
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
            CREATE VIEW `sft_work_groups_view` AS select `sft_work_groups`.`id` AS `id`,`sft_work_groups`.`name` AS `name`,`sft_work_groups`.`process_code` AS `process_code`,`sft_work_groups`.`method_code` AS `method_code`,`sft_methods`.`name` AS `method_name`,`sft_work_groups`.`method_default` AS `method_default`,`sft_work_groups`.`step_code` AS `step_code` from (`sft_work_groups` join `sft_methods` on((`sft_work_groups`.`method_code` = `sft_methods`.`code`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_work_groups_view`;
        SQL;
    }
}
