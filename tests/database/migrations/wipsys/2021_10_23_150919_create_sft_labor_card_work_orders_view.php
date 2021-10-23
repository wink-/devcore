<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftLaborCardWorkOrdersView extends Migration
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
            CREATE VIEW `sft_labor_card_work_orders` AS select `sft_labor_cards`.`id` AS `id`,`sft_labor_cards`.`work_order_number` AS `work_order_number`,cast(`sft_labor_cards`.`job_date` as date) AS `date_run`,cast(`sft_labor_cards`.`time_of_day` as time) AS `time_of_day`,cast(`sft_labor_cards`.`time_of_day` as time) AS `time_run`,cast(`sft_labor_cards`.`time_finished` as time) AS `time_finished`,`sft_labor_cards`.`employee_code` AS `employee_code`,`sft_labor_cards`.`step_code` AS `step_code`,format(`sft_labor_cards`.`actual_hours`,3) AS `process_time`,format(`sft_labor_cards`.`man_hours`,2) AS `operator_time`,format(`sft_labor_cards`.`actual_pieces`,3) AS `actual_pieces`,`sft_labor_cards`.`equipment_code` AS `equipment_code`,format(`sft_labor_cards`.`loads`,3) AS `loads`,format(`sft_labor_cards`.`equipment_quantity`,3) AS `equipment_quantity`,format(`sft_labor_cards`.`cycle_time`,3) AS `cycle_time`,`sft_work_orders`.`part_id` AS `part_id`,`sft_customers`.`name` AS `customer_name`,`sft_customers`.`code` AS `customer_code`,`sft_processes`.`code` AS `process_code`,`sft_processes`.`name` AS `process_name`,`sft_parts`.`number` AS `part_number` from ((((`sft_labor_cards` join `sft_work_orders` on((`sft_labor_cards`.`work_order_number` = `sft_work_orders`.`number`))) join `sft_parts` on((`sft_work_orders`.`part_id` = `sft_parts`.`id`))) join `sft_customers` on((`sft_work_orders`.`customer_code` = `sft_customers`.`code`))) join `sft_processes` on((`sft_work_orders`.`process_code` = `sft_processes`.`code`))) order by `sft_labor_cards`.`time_of_day` desc
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_labor_card_work_orders`;
        SQL;
    }
}
