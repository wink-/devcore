<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftOpenOrdersView extends Migration
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
            CREATE VIEW `sft_open_orders` AS select `sft_work_orders`.`number` AS `workorder`,`sft_work_orders`.`customer_code` AS `customer_code`,cast(`sft_work_orders`.`date_received` as date) AS `date_received`,cast(`sft_work_orders`.`date_required` as date) AS `date_due`,`sft_work_orders`.`quantity` AS `quantity`,(select sum(`sft_labor_cards`.`actual_pieces`) from `sft_labor_cards` where ((`sft_labor_cards`.`work_order_number` = `sft_work_orders`.`number`) and (`sft_labor_cards`.`step_code` = `sft_work_groups`.`step_code`) and (`sft_labor_cards`.`man_hours` > 0))) AS `quantity_run`,`sft_work_orders`.`quantity_shipped` AS `quantity_shipped`,(`sft_work_orders`.`quantity` - `sft_work_orders`.`quantity_shipped`) AS `quantity_not_shipped`,(select count(`sft_tags`.`number`) from `sft_tags` where (`sft_tags`.`work_order_number` = `sft_work_orders`.`number`)) AS `tags`,`sft_work_orders`.`customer_purchase_order` AS `billnum`,`sft_work_orders`.`customer_packing_list` AS `shipnum`,concat(ifnull(`sft_work_orders`.`customer_purchase_order`,''),' ',ifnull(`sft_work_orders`.`customer_packing_list`,'')) AS `customer_packing_list`,`sft_work_orders`.`our_last_packing_list` AS `ourpl`,`sft_work_orders`.`shipped` AS `shipped`,cast(`sft_work_orders`.`date_shipped` as date) AS `dateship`,`sft_work_orders`.`note` AS `wonote`,`sft_work_orders`.`hot` AS `hot`,`sft_work_orders`.`priority` AS `priority`,`sft_work_orders`.`started` AS `started`,`sft_work_orders`.`completed` AS `complete`,`sft_parts`.`number` AS `part_number`,`sft_parts`.`description` AS `partname`,cast(`sft_parts`.`thickness_minimum` as char charset utf8) AS `minthk`,cast(`sft_parts`.`thickness_maximum` as char charset utf8) AS `maxthk`,`sft_parts`.`bake` AS `bake`,`sft_parts`.`specification` AS `spec`,`sft_parts`.`material_name` AS `material`,`sft_parts`.`note` AS `partnote`,`sft_parts`.`special_requirement` AS `splreqr`,`sft_customers`.`name` AS `custname`,`sft_processes`.`code` AS `proccode`,`sft_processes`.`name` AS `process_name`,`sft_work_groups`.`name` AS `workgroup_name`,`sft_work_groups`.`step_code` AS `step_code` from ((((((`sft_work_orders` join `sft_customers` on((`sft_work_orders`.`customer_code` = `sft_customers`.`code`))) join `sft_processes` on((`sft_work_orders`.`process_code` = `sft_processes`.`code`))) join `sft_destinations` on((`sft_work_orders`.`destination_code` = `sft_destinations`.`code`))) join `sft_parts` on((`sft_work_orders`.`part_id` = `sft_parts`.`id`))) join `sft_priorities` on((`sft_work_orders`.`priority` = `sft_priorities`.`id`))) left join `sft_work_groups` on(((`sft_parts`.`process_code` = `sft_work_groups`.`process_code`) and (`sft_parts`.`method_code` = `sft_work_groups`.`method_code`)))) where (((not(`sft_work_orders`.`shipped`)) or (`sft_work_orders`.`date_shipped` = curdate())) and (`sft_work_orders`.`customer_code` <> 'SFT') and ((`sft_work_orders`.`quantity` - `sft_work_orders`.`quantity_shipped`) > 0)) order by `sft_work_orders`.`shipped` desc,`sft_work_orders`.`priority` desc,`sft_work_orders`.`date_required`,`sft_work_orders`.`number`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_open_orders`;
        SQL;
    }
}
