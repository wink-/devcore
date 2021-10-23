<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoWorkOrdersHistoryViewView extends Migration
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
            CREATE VIEW `eo_work_orders_history_view` AS select `eo_work_orders_history`.`id` AS `id`,`eo_work_orders_history`.`number` AS `number`,`eo_work_orders_history`.`customer_code` AS `customer_code`,`eo_work_orders_history`.`customer_name` AS `customer_name`,`eo_work_orders_history`.`part_id` AS `part_id`,`eo_work_orders_history`.`part_number` AS `part_number`,`eo_work_orders_history`.`process_code` AS `process_code`,`eo_work_orders_history`.`quantity` AS `quantity`,`eo_work_orders_history`.`unit_code` AS `unit_code`,`eo_work_orders_history`.`price` AS `price`,`eo_work_orders_history`.`price_code` AS `price_code`,`eo_work_orders_history`.`date_received` AS `date_received`,`eo_work_orders_history`.`date_required` AS `date_required`,`eo_work_orders_history`.`customer_purchase_order` AS `customer_purchase_order`,`eo_work_orders_history`.`customer_packing_list` AS `customer_packing_list`,`eo_work_orders_history`.`quantity_shipped` AS `quantity_shipped`,`eo_work_orders_history`.`our_last_packing_list` AS `our_last_packing_list`,`eo_work_orders_history`.`date_shipped` AS `date_shipped`,`eo_work_orders_history`.`shipped_amount` AS `shipped_amount`,`eo_work_orders_history`.`inventory_amount` AS `inventory_amount`,`eo_work_orders_history`.`destination_code` AS `destination_code`,`eo_work_orders_history`.`carrier_code` AS `carrier_code`,`eo_work_orders_history`.`freight_code` AS `freight_code`,`eo_work_orders_history`.`invoice_number` AS `invoice_number`,`eo_work_orders_history`.`invoice_date` AS `invoice_date`,`eo_work_orders_history`.`invoice_amount` AS `invoice_amount`,`eo_work_orders_history`.`priority` AS `priority`,`eo_work_orders_history`.`rework` AS `rework`,`eo_work_orders_history`.`hot` AS `hot`,`eo_work_orders_history`.`started` AS `started`,`eo_work_orders_history`.`completed` AS `completed`,`eo_work_orders_history`.`shipped` AS `shipped`,`eo_work_orders_history`.`invoiced` AS `invoiced`,`eo_work_orders_history`.`cod` AS `cod`,`eo_work_orders_history`.`note` AS `note`,`eo_work_orders_history`.`image_count` AS `work_order_image_count`,`eo_parts_history`.`revision_code` AS `revision_code`,`eo_parts_history`.`description` AS `description`,`eo_parts_history`.`method_code` AS `method_code`,`eo_parts_history`.`bake` AS `bake`,`eo_parts_history`.`baking_time_pre` AS `baking_time_pre`,`eo_parts_history`.`baking_temp_pre` AS `baking_temp_pre`,`eo_parts_history`.`baking_time_post` AS `baking_time_post`,`eo_parts_history`.`baking_temp_post` AS `baking_temp_post`,`eo_parts_history`.`certify` AS `certify`,`eo_parts_history`.`specification` AS `specification`,`eo_parts_history`.`material_name` AS `material_name`,`eo_parts_history`.`thickness_minimum` AS `thickness_minimum`,`eo_parts_history`.`thickness_maximum` AS `thickness_maximum`,`eo_parts_history`.`thickness_unit_code` AS `thickness_unit_code`,`eo_parts_history`.`note` AS `part_note`,`eo_parts_history`.`special_requirement` AS `special_requirement`,`eo_parts_history`.`image_count` AS `part_image_count`,`eo_work_orders_history`.`session_id` AS `session_id`,`eo_work_orders_history`.`archive` AS `archive`,`eo_work_orders_history`.`revision` AS `revision`,`eo_work_orders_history`.`created_at` AS `created_at`,`eo_work_orders_history`.`updated_at` AS `updated_at` from (`eo_work_orders_history` left join `eo_parts_history` on((`eo_work_orders_history`.`number` = `eo_parts_history`.`work_order_number`))) order by `eo_work_orders_history`.`number`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_work_orders_history_view`;
        SQL;
    }
}
