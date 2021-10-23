<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoEmployeeLaborCardsView extends Migration
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
            CREATE VIEW `eo_employee_labor_cards` AS select `eo_labor_cards`.`id` AS `id`,`eo_labor_cards`.`work_order_number` AS `work_order_number`,`eo_labor_cards`.`job_date` AS `job_date`,cast(`eo_labor_cards`.`time_of_day` as date) AS `date_run`,cast(`eo_labor_cards`.`time_of_day` as time) AS `time_run`,cast(`eo_labor_cards`.`time_finished` as time) AS `time_finished`,`eo_labor_cards`.`employee_code` AS `employee_code`,`sft_employees`.`name` AS `employee_name`,`eo_labor_cards`.`step_code` AS `step_code`,format(`eo_labor_cards`.`actual_hours`,3) AS `process_time`,format(`eo_labor_cards`.`man_hours`,2) AS `operator_time`,format(`eo_labor_cards`.`actual_pieces`,3) AS `actual_pieces`,format(`eo_labor_cards`.`loads`,3) AS `loads`,format(`eo_labor_cards`.`cycle_time`,3) AS `cycle_time`,`eo_labor_cards`.`equipment_code` AS `equipment_code`,format(`eo_labor_cards`.`equipment_quantity`,3) AS `equipment_quantity` from (`eo_labor_cards` left join `sft_employees` on((`eo_labor_cards`.`employee_code` = `sft_employees`.`code`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_employee_labor_cards`;
        SQL;
    }
}
