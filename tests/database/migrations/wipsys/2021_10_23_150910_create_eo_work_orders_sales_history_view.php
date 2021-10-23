<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoWorkOrdersSalesHistoryView extends Migration
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
            CREATE VIEW `eo_work_orders_sales_history` AS select `eo_work_orders_history`.`id` AS `id`,`eo_work_orders_history`.`number` AS `number`,`eo_work_orders_history`.`customer_code` AS `customer_code`,`sft_customers`.`name` AS `customer_name`,`eo_work_orders_history`.`part_id` AS `part_id`,`eo_work_orders_history`.`part_number` AS `part_number`,`eo_parts_history`.`revision_code` AS `revision_code`,`eo_parts_history`.`description` AS `part_description`,`eo_parts_history`.`price` AS `part_price`,`eo_parts_history`.`price_code` AS `part_price_code`,`eo_parts_history`.`minimum_lot_charge` AS `part_minimum_lot_charge`,`eo_parts_history`.`minimum_line_charge` AS `part_minimum_line_charge`,`eo_work_orders_history`.`process_code` AS `process_code`,`sft_processes`.`name` AS `process_name`,`eo_work_orders_history`.`quantity` AS `quantity`,`eo_work_orders_history`.`unit_code` AS `unit_code`,`eo_work_orders_history`.`price` AS `price`,`eo_work_orders_history`.`price_code` AS `price_code`,`eo_work_orders_history`.`date_received` AS `date_received`,`eo_work_orders_history`.`date_required` AS `date_required`,`eo_work_orders_history`.`customer_purchase_order` AS `customer_purchase_order`,`eo_work_orders_history`.`customer_packing_list` AS `customer_packing_list`,`eo_work_orders_history`.`quantity_shipped` AS `quantity_shipped`,`eo_work_orders_history`.`our_last_packing_list` AS `our_last_packing_list`,`eo_work_orders_history`.`date_shipped` AS `date_shipped`,`eo_work_orders_history`.`shipped_amount` AS `shipped_amount`,`eo_work_orders_history`.`inventory_amount` AS `inventory_amount`,`eo_work_orders_history`.`destination_code` AS `destination_code`,`eo_work_orders_history`.`carrier_code` AS `carrier_code`,`eo_work_orders_history`.`freight_code` AS `freight_code`,`eo_work_orders_history`.`invoice_number` AS `invoice_number`,`eo_work_orders_history`.`invoice_date` AS `invoice_date`,`eo_work_orders_history`.`invoice_amount` AS `invoice_amount`,`eo_work_orders_history`.`priority` AS `priority`,`eo_work_orders_history`.`rework` AS `rework`,`eo_work_orders_history`.`hot` AS `hot`,`eo_work_orders_history`.`started` AS `started`,`eo_work_orders_history`.`completed` AS `completed`,`eo_work_orders_history`.`shipped` AS `shipped`,`eo_work_orders_history`.`invoiced` AS `invoiced`,`eo_work_orders_history`.`cod` AS `cod`,`eo_work_orders_history`.`note` AS `note`,`sft_work_groups`.`name` AS `workgroup_name`,`eo_work_orders_history`.`created_at` AS `created_at`,`eo_work_orders_history`.`updated_at` AS `updated_at`,`eo_work_orders_history`.`archive` AS `archive`,`eo_work_orders_history`.`revision` AS `revision` from ((((`eo_work_orders_history` join `eo_parts_history` on((`eo_work_orders_history`.`number` = `eo_parts_history`.`work_order_number`))) join `sft_customers` on((`eo_work_orders_history`.`customer_code` = `sft_customers`.`code`))) join `sft_processes` on((`eo_work_orders_history`.`process_code` = `sft_processes`.`code`))) left join `sft_work_groups` on(((`eo_parts_history`.`process_code` = `sft_work_groups`.`process_code`) and (`eo_parts_history`.`method_code` = `sft_work_groups`.`method_code`))))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_work_orders_sales_history`;
        SQL;
    }
}
