<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftPackingListTagsViewView extends Migration
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
            CREATE VIEW `sft_packing_list_tags_view` AS select `sft_work_orders`.`customer_code` AS `customer_code`,`sft_work_orders`.`part_number` AS `part_number`,`sft_work_orders`.`part_id` AS `part_id`,`sft_work_orders`.`process_code` AS `process_code`,`sft_work_orders`.`quantity` AS `work_order_quantity`,`sft_work_orders`.`unit_code` AS `unit_code`,`sft_work_orders`.`date_required` AS `date_required`,`sft_work_orders`.`customer_purchase_order` AS `customer_purchase_order`,`sft_work_orders`.`customer_packing_list` AS `customer_packing_list`,`sft_work_orders`.`destination_code` AS `destination_code`,`sft_work_orders`.`carrier_code` AS `carrier_code`,`sft_work_orders`.`freight_code` AS `freight_code`,`sft_work_orders`.`cod` AS `cod`,`sft_parts`.`revision_code` AS `revision_code`,`sft_parts`.`certify` AS `certify`,`sft_parts`.`description` AS `description`,`sft_parts`.`method_code` AS `method_code`,`sft_parts`.`bake` AS `bake`,`sft_parts`.`baking_time_pre` AS `baking_time_pre`,`sft_parts`.`baking_temp_pre` AS `baking_temp_pre`,`sft_parts`.`baking_time_post` AS `baking_time_post`,`sft_parts`.`baking_temp_post` AS `baking_temp_post`,`sft_parts`.`specification` AS `specification`,`sft_parts`.`material_name` AS `material_name`,`sft_parts`.`thickness_minimum` AS `thickness_minimum`,`sft_parts`.`thickness_maximum` AS `thickness_maximum`,`sft_parts`.`thickness_unit_code` AS `thickness_unit_code`,`sft_parts`.`procedure_code` AS `procedure_code`,`sft_tags`.`id` AS `id`,`sft_tags`.`number` AS `number`,`sft_tags`.`work_order_number` AS `work_order_number`,`sft_tags`.`quantity` AS `quantity`,`sft_tags`.`quantity_shipped` AS `quantity_shipped`,`sft_tags`.`date_received` AS `date_received`,`sft_tags`.`container` AS `container`,`sft_tags`.`note` AS `note`,`sft_tags`.`ordinal` AS `ordinal`,`sft_tags`.`shipped` AS `shipped`,`sft_tags`.`revision` AS `revision`,`sft_tags`.`archive` AS `archive`,`sft_tags`.`created_at` AS `created_at`,`sft_tags`.`updated_at` AS `updated_at` from ((`sft_work_orders` join `sft_tags` on((`sft_work_orders`.`number` = `sft_tags`.`work_order_number`))) join `sft_parts` on((`sft_work_orders`.`part_id` = `sft_parts`.`id`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_packing_list_tags_view`;
        SQL;
    }
}
