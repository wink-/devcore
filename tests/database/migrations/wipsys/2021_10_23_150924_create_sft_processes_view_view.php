<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftProcessesViewView extends Migration
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
            CREATE VIEW `sft_processes_view` AS select `sft_processes`.`id` AS `id`,`sft_processes`.`code` AS `code`,`sft_processes`.`name` AS `name`,`sft_processes`.`minimum_lot_charge` AS `minimum_lot_charge`,`sft_processes`.`compliant_rohs` AS `compliant_rohs`,`sft_processes`.`compliant_reach` AS `compliant_reach`,`sft_processes`.`archive` AS `archive` from `sft_processes` order by `sft_processes`.`id`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_processes_view`;
        SQL;
    }
}
