<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoWorkOrderSalesView extends Migration
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
            CREATE VIEW `eo_work_order_sales` AS select `eo_work_orders`.`id` AS `id`,`eo_work_orders`.`number` AS `number`,`eo_work_orders`.`customer_code` AS `customer_code`,`eo_work_orders`.`part_id` AS `part_id`,`eo_work_orders`.`part_number` AS `part_number`,`eo_work_orders`.`process_code` AS `process_code`,`eo_work_orders`.`quantity` AS `quantity`,`eo_work_orders`.`unit_code` AS `unit_code`,`eo_work_orders`.`price` AS `price`,`eo_work_orders`.`price_code` AS `price_code`,`eo_work_orders`.`date_received` AS `date_received`,`eo_work_orders`.`date_required` AS `date_required`,`eo_work_orders`.`customer_purchase_order` AS `customer_purchase_order`,`eo_work_orders`.`customer_packing_list` AS `customer_packing_list`,`eo_work_orders`.`quantity_shipped` AS `quantity_shipped`,`eo_work_orders`.`our_last_packing_list` AS `our_last_packing_list`,`eo_work_orders`.`date_shipped` AS `date_shipped`,`eo_work_orders`.`destination_code` AS `destination_code`,`eo_work_orders`.`carrier_code` AS `carrier_code`,`eo_work_orders`.`freight_code` AS `freight_code`,`eo_work_orders`.`invoice_number` AS `invoice_number`,`eo_work_orders`.`invoice_date` AS `invoice_date`,`eo_work_orders`.`invoice_amount` AS `invoice_amount`,`eo_work_orders`.`priority` AS `priority`,`eo_work_orders`.`rework` AS `rework`,`eo_work_orders`.`hot` AS `hot`,`eo_work_orders`.`started` AS `started`,`eo_work_orders`.`completed` AS `completed`,`eo_work_orders`.`shipped` AS `shipped`,`eo_work_orders`.`invoiced` AS `invoiced`,`eo_work_orders`.`cod` AS `cod`,`eo_work_orders`.`note` AS `note`,`sft_work_groups`.`name` AS `workgroup_name`,`eo_work_orders`.`created_at` AS `created_at`,`eo_work_orders`.`updated_at` AS `updated_at` from ((`eo_work_orders` join `sft_parts` on((`eo_work_orders`.`part_id` = `sft_parts`.`id`))) left join `sft_work_groups` on(((`sft_parts`.`process_code` = `sft_work_groups`.`process_code`) and (`sft_parts`.`method_code` = `sft_work_groups`.`method_code`))))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_work_order_sales`;
        SQL;
    }
}
