<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftDetailWorkOrdersView extends Migration
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
            CREATE VIEW `sft_detail_work_orders` AS select `sft_work_orders`.`id` AS `id`,`sft_work_orders`.`number` AS `work_order_number`,cast(`sft_work_orders`.`date_received` as date) AS `date_received`,`sft_work_orders`.`quantity` AS `quantity`,0 AS `quantity_run`,`sft_work_orders`.`quantity_shipped` AS `quantity_shipped`,0 AS `tags`,`sft_work_orders`.`customer_purchase_order` AS `customer_purchase_order`,`sft_work_orders`.`customer_packing_list` AS `customer_packing_list`,`sft_work_orders`.`our_last_packing_list` AS `our_last_packing_list`,`sft_work_orders`.`shipped` AS `shipped`,cast(`sft_work_orders`.`date_shipped` as date) AS `date_shipped`,`sft_work_orders`.`note` AS `work_order_note`,`sft_work_orders`.`started` AS `started`,`sft_work_orders`.`completed` AS `completed`,`sft_work_orders`.`part_id` AS `part_id`,`sft_work_orders`.`revision` AS `revision`,`sft_parts`.`number` AS `part_number`,`sft_parts`.`revision_code` AS `revision_code`,`sft_parts`.`description` AS `description`,cast(`sft_parts`.`thickness_minimum` as char charset utf8) AS `minimum_thickness`,cast(`sft_parts`.`thickness_maximum` as char charset utf8) AS `maximum_thickness`,`sft_parts`.`bake` AS `post_embrittlement_bake`,`sft_parts`.`certify` AS `certified`,`sft_parts`.`specification` AS `specification`,`sft_parts`.`material_name` AS `material`,`sft_parts`.`note` AS `part_note`,`sft_parts`.`special_requirement` AS `special_requirement`,concat(if((length(`sft_parts`.`note`) > 1),concat(`sft_parts`.`note`,char(13,10),'---',char(13,10)),''),ifnull(`sft_parts`.`special_requirement`,'')) AS `notes`,`sft_parts`.`operator_note` AS `operator_note`,`sft_customers`.`name` AS `customer_name`,`sft_processes`.`code` AS `process_code`,`sft_processes`.`name` AS `process_name`,`sft_work_groups`.`name` AS `work_group_name`,`sft_work_groups`.`step_code` AS `step_code` from ((((`sft_work_orders` left join `sft_customers` on((`sft_work_orders`.`customer_code` = `sft_customers`.`code`))) left join `sft_processes` on((`sft_work_orders`.`process_code` = `sft_processes`.`code`))) left join `sft_parts` on((`sft_work_orders`.`part_id` = `sft_parts`.`id`))) left join `sft_work_groups` on(((`sft_parts`.`process_code` = `sft_work_groups`.`process_code`) and (`sft_parts`.`method_code` = `sft_work_groups`.`method_code`)))) order by `sft_work_orders`.`number`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_detail_work_orders`;
        SQL;
    }
}
