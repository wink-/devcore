<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftWorkOrdersHistoryViewView extends Migration
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
            CREATE VIEW `sft_work_orders_history_view` AS select `sft_work_orders_history`.`id` AS `id`,`sft_work_orders_history`.`number` AS `number`,`sft_work_orders_history`.`customer_code` AS `customer_code`,`sft_work_orders_history`.`customer_name` AS `customer_name`,`sft_work_orders_history`.`part_id` AS `part_id`,`sft_work_orders_history`.`part_number` AS `part_number`,`sft_work_orders_history`.`process_code` AS `process_code`,`sft_work_orders_history`.`quantity` AS `quantity`,`sft_work_orders_history`.`unit_code` AS `unit_code`,`sft_work_orders_history`.`price` AS `price`,`sft_work_orders_history`.`price_code` AS `price_code`,`sft_work_orders_history`.`date_received` AS `date_received`,`sft_work_orders_history`.`date_required` AS `date_required`,`sft_work_orders_history`.`customer_purchase_order` AS `customer_purchase_order`,`sft_work_orders_history`.`customer_packing_list` AS `customer_packing_list`,`sft_work_orders_history`.`quantity_shipped` AS `quantity_shipped`,`sft_work_orders_history`.`our_last_packing_list` AS `our_last_packing_list`,`sft_work_orders_history`.`date_shipped` AS `date_shipped`,`sft_work_orders_history`.`shipped_amount` AS `shipped_amount`,`sft_work_orders_history`.`inventory_amount` AS `inventory_amount`,`sft_work_orders_history`.`destination_code` AS `destination_code`,`sft_work_orders_history`.`carrier_code` AS `carrier_code`,`sft_work_orders_history`.`freight_code` AS `freight_code`,`sft_work_orders_history`.`invoice_number` AS `invoice_number`,`sft_work_orders_history`.`invoice_date` AS `invoice_date`,`sft_work_orders_history`.`invoice_amount` AS `invoice_amount`,`sft_work_orders_history`.`priority` AS `priority`,`sft_work_orders_history`.`rework` AS `rework`,`sft_work_orders_history`.`hot` AS `hot`,`sft_work_orders_history`.`started` AS `started`,`sft_work_orders_history`.`completed` AS `completed`,`sft_work_orders_history`.`shipped` AS `shipped`,`sft_work_orders_history`.`invoiced` AS `invoiced`,`sft_work_orders_history`.`cod` AS `cod`,`sft_work_orders_history`.`note` AS `note`,`sft_work_orders_history`.`image_count` AS `work_order_image_count`,`sft_parts_history`.`revision_code` AS `revision_code`,`sft_parts_history`.`description` AS `description`,`sft_parts_history`.`method_code` AS `method_code`,`sft_parts_history`.`bake` AS `bake`,`sft_parts_history`.`baking_time_pre` AS `baking_time_pre`,`sft_parts_history`.`baking_temp_pre` AS `baking_temp_pre`,`sft_parts_history`.`baking_time_post` AS `baking_time_post`,`sft_parts_history`.`baking_temp_post` AS `baking_temp_post`,`sft_parts_history`.`certify` AS `certify`,`sft_parts_history`.`specification` AS `specification`,`sft_parts_history`.`material_name` AS `material_name`,`sft_parts_history`.`thickness_minimum` AS `thickness_minimum`,`sft_parts_history`.`thickness_maximum` AS `thickness_maximum`,`sft_parts_history`.`thickness_unit_code` AS `thickness_unit_code`,`sft_parts_history`.`note` AS `part_note`,`sft_parts_history`.`special_requirement` AS `special_requirement`,`sft_parts_history`.`image_count` AS `part_image_count`,`sft_work_orders_history`.`session_id` AS `session_id`,`sft_work_orders_history`.`archive` AS `archive`,`sft_work_orders_history`.`revision` AS `revision`,`sft_work_orders_history`.`created_at` AS `created_at`,`sft_work_orders_history`.`updated_at` AS `updated_at` from (`sft_work_orders_history` left join `sft_parts_history` on((`sft_work_orders_history`.`number` = `sft_parts_history`.`work_order_number`))) order by `sft_work_orders_history`.`number`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_work_orders_history_view`;
        SQL;
    }
}
