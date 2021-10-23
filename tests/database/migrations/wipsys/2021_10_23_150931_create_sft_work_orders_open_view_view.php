<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftWorkOrdersOpenViewView extends Migration
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
            CREATE VIEW `sft_work_orders_open_view` AS select `sft_work_orders`.`id` AS `id`,`sft_work_orders`.`priority` AS `priority`,`sft_work_orders`.`date_required` AS `date_required`,`sft_work_orders`.`number` AS `number`,`sft_work_orders`.`customer_code` AS `customer_code`,`sft_work_orders`.`part_id` AS `part_id`,`sft_work_orders`.`part_number` AS `part_number`,`sft_work_orders`.`process_code` AS `process_code`,`sft_work_orders`.`price` AS `price`,`sft_work_orders`.`price_code` AS `price_code`,`sft_work_orders`.`inventory_amount` AS `inventory_amount`,`sft_work_orders`.`shipped_amount` AS `shipped_amount`,`sft_work_orders`.`invoice_amount` AS `invoice_amount`,`sft_work_orders`.`date_received` AS `date_received`,`sft_work_orders`.`quantity` AS `quantity`,(select sum(`sft_labor_cards`.`actual_pieces`) from `sft_labor_cards` where ((`sft_labor_cards`.`work_order_number` = `sft_work_orders`.`number`) and (`sft_labor_cards`.`step_code` = `sft_work_groups`.`step_code`) and (`sft_labor_cards`.`man_hours` > 0))) AS `quantity_run`,`sft_work_orders`.`quantity_shipped` AS `quantity_shipped`,`sft_work_orders`.`unit_code` AS `unit_code`,`sft_work_orders`.`customer_purchase_order` AS `customer_purchase_order`,`sft_work_orders`.`customer_packing_list` AS `customer_packing_list`,`sft_work_orders`.`our_last_packing_list` AS `our_last_packing_list`,`sft_work_orders`.`shipped` AS `shipped`,`sft_work_orders`.`date_shipped` AS `date_shipped`,`sft_work_orders`.`note` AS `note`,`sft_work_orders`.`hot` AS `hot`,`sft_work_orders`.`started` AS `started`,`sft_work_orders`.`completed` AS `completed`,`sft_work_orders`.`created_at` AS `created_at`,`sft_work_orders`.`updated_at` AS `updated_at`,`sft_work_orders`.`image_count` AS `work_order_image_count`,`sft_parts`.`revision_code` AS `revision_code`,`sft_parts`.`description` AS `part_description`,`sft_parts`.`thickness_minimum` AS `thickness_minimum`,`sft_parts`.`thickness_maximum` AS `thickness_maximum`,`sft_parts`.`thickness_unit_code` AS `thickness_unit_code`,`sft_parts`.`bake` AS `bake`,`sft_parts`.`baking_time_pre` AS `baking_time_pre`,`sft_parts`.`baking_temp_pre` AS `baking_temp_pre`,`sft_parts`.`baking_time_post` AS `baking_time_post`,`sft_parts`.`baking_temp_post` AS `baking_temp_post`,`sft_parts`.`specification` AS `specification`,`sft_parts`.`material_name` AS `material_name`,`sft_parts`.`note` AS `part_note`,`sft_parts`.`special_requirement` AS `special_requirement`,`sft_parts`.`image_count` AS `part_image_count`,`sft_customers`.`name` AS `customer_name`,`sft_processes`.`name` AS `process_name`,`sft_work_groups`.`name` AS `workgroup_name`,`sft_work_groups`.`step_code` AS `step_code` from ((((`sft_work_orders` join `sft_customers` on((`sft_work_orders`.`customer_code` = `sft_customers`.`code`))) join `sft_processes` on((`sft_work_orders`.`process_code` = `sft_processes`.`code`))) join `sft_parts` on((`sft_work_orders`.`part_id` = `sft_parts`.`id`))) left join `sft_work_groups` on(((`sft_parts`.`process_code` = `sft_work_groups`.`process_code`) and (`sft_parts`.`method_code` = `sft_work_groups`.`method_code`)))) where ((`sft_work_orders`.`customer_code` <> 'SFT') and (`sft_work_orders`.`quantity` > `sft_work_orders`.`quantity_shipped`)) order by `sft_work_orders`.`priority` desc,`sft_work_orders`.`date_required`,`sft_work_orders`.`number`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_work_orders_open_view`;
        SQL;
    }
}
