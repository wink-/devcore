<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoPackingListTagsViewView extends Migration
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
            CREATE VIEW `eo_packing_list_tags_view` AS select `eo_work_orders`.`customer_code` AS `customer_code`,`eo_work_orders`.`part_number` AS `part_number`,`eo_work_orders`.`part_id` AS `part_id`,`eo_work_orders`.`process_code` AS `process_code`,`eo_work_orders`.`quantity` AS `work_order_quantity`,`eo_work_orders`.`unit_code` AS `unit_code`,`eo_work_orders`.`date_required` AS `date_required`,`eo_work_orders`.`customer_purchase_order` AS `customer_purchase_order`,`eo_work_orders`.`customer_packing_list` AS `customer_packing_list`,`eo_work_orders`.`destination_code` AS `destination_code`,`eo_work_orders`.`carrier_code` AS `carrier_code`,`eo_work_orders`.`freight_code` AS `freight_code`,`eo_work_orders`.`cod` AS `cod`,`sft_parts`.`revision_code` AS `revision_code`,`sft_parts`.`certify` AS `certify`,`sft_parts`.`description` AS `description`,`sft_parts`.`method_code` AS `method_code`,`sft_parts`.`bake` AS `bake`,`sft_parts`.`baking_time_pre` AS `baking_time_pre`,`sft_parts`.`baking_temp_pre` AS `baking_temp_pre`,`sft_parts`.`baking_time_post` AS `baking_time_post`,`sft_parts`.`baking_temp_post` AS `baking_temp_post`,`sft_parts`.`specification` AS `specification`,`sft_parts`.`material_name` AS `material_name`,`sft_parts`.`thickness_minimum` AS `thickness_minimum`,`sft_parts`.`thickness_maximum` AS `thickness_maximum`,`sft_parts`.`thickness_unit_code` AS `thickness_unit_code`,`sft_parts`.`procedure_code` AS `procedure_code`,`eo_tags`.`id` AS `id`,`eo_tags`.`number` AS `number`,`eo_tags`.`work_order_number` AS `work_order_number`,`eo_tags`.`quantity` AS `quantity`,`eo_tags`.`quantity_shipped` AS `quantity_shipped`,`eo_tags`.`date_received` AS `date_received`,`eo_tags`.`container` AS `container`,`eo_tags`.`note` AS `note`,`eo_tags`.`ordinal` AS `ordinal`,`eo_tags`.`shipped` AS `shipped`,`eo_tags`.`revision` AS `revision`,`eo_tags`.`archive` AS `archive`,`eo_tags`.`created_at` AS `created_at`,`eo_tags`.`updated_at` AS `updated_at` from ((`eo_work_orders` join `eo_tags` on((`eo_work_orders`.`number` = `eo_tags`.`work_order_number`))) join `sft_parts` on((`eo_work_orders`.`part_id` = `sft_parts`.`id`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_packing_list_tags_view`;
        SQL;
    }
}
