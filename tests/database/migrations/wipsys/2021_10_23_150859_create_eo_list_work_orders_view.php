<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoListWorkOrdersView extends Migration
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
            CREATE VIEW `eo_list_work_orders` AS select `eo_work_orders`.`id` AS `id`,`eo_work_orders`.`number` AS `work_order_number`,`eo_work_orders`.`part_id` AS `part_id`,cast(`eo_work_orders`.`date_received` as date) AS `date_received`,cast(`eo_work_orders`.`date_required` as date) AS `date_required`,`eo_work_orders`.`quantity` AS `quantity`,(select sum(`eo_labor_cards`.`actual_pieces`) from `eo_labor_cards` where ((`eo_labor_cards`.`work_order_number` = `eo_work_orders`.`number`) and (`eo_labor_cards`.`step_code` = `sft_work_groups`.`step_code`) and (`eo_labor_cards`.`man_hours` > 0))) AS `quantity_run`,`eo_work_orders`.`quantity_shipped` AS `quantity_shipped`,(select count(`eo_tags`.`id`) from `eo_tags` where (`eo_tags`.`work_order_number` = `eo_work_orders`.`number`)) AS `tags`,`eo_work_orders`.`customer_purchase_order` AS `customer_purchase_order`,`eo_work_orders`.`customer_packing_list` AS `customer_packing_list`,`eo_work_orders`.`our_last_packing_list` AS `our_last_packing_list`,concat(ifnull(`eo_work_orders`.`customer_purchase_order`,''),' ',ifnull(`eo_work_orders`.`customer_packing_list`,'')) AS `billing_or_shipping_number`,`eo_work_orders`.`shipped` AS `shipped`,cast(`eo_work_orders`.`date_shipped` as date) AS `date_shipped`,`eo_work_orders`.`note` AS `work_order_note`,`eo_work_orders`.`hot` AS `hot`,`eo_work_orders`.`priority` AS `priority`,`eo_work_orders`.`started` AS `started`,`eo_work_orders`.`completed` AS `completed`,`sft_priorities`.`image_key` AS `priority_image_key`,`sft_parts`.`number` AS `part_number`,`sft_parts`.`description` AS `part_name`,cast(`sft_parts`.`thickness_minimum` as char charset utf8) AS `minimum_thickness`,cast(`sft_parts`.`thickness_maximum` as char charset utf8) AS `maximum_thickness`,`sft_parts`.`bake` AS `bake`,`sft_parts`.`specification` AS `specification`,`sft_parts`.`material` AS `material`,`sft_parts`.`note` AS `part_note`,`sft_parts`.`special_requirement` AS `special_requirements`,`sft_customers`.`name` AS `customer_name`,`sft_processes`.`code` AS `process_code`,`sft_processes`.`name` AS `process_name`,`sft_work_groups`.`name` AS `work_group_name`,`sft_work_groups`.`step_code` AS `step_code` from (((((`eo_work_orders` join `sft_customers` on((`eo_work_orders`.`customer_code` = `sft_customers`.`code`))) join `sft_processes` on((`eo_work_orders`.`process_code` = `sft_processes`.`code`))) join `sft_parts` on((`eo_work_orders`.`part_id` = `sft_parts`.`id`))) join `sft_priorities` on((`eo_work_orders`.`priority` = `sft_priorities`.`id`))) left join `sft_work_groups` on(((`sft_parts`.`process_code` = `sft_work_groups`.`process_code`) and (`sft_parts`.`method_code` = `sft_work_groups`.`method_code`)))) where ((not(`eo_work_orders`.`shipped`)) or (`eo_work_orders`.`date_shipped` = curdate())) order by `eo_work_orders`.`shipped` desc,`eo_work_orders`.`priority` desc,cast(`eo_work_orders`.`date_required` as date),`eo_work_orders`.`number`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_list_work_orders`;
        SQL;
    }
}
