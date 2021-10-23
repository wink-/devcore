<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoPackingListsDetailViewView extends Migration
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
            CREATE VIEW `eo_packing_lists_detail_view` AS select `eo_packing_lists_detail`.`id` AS `id`,`eo_packing_lists_detail`.`packing_list_number` AS `packing_list_number`,`eo_packing_lists_detail`.`tag_number` AS `tag_number`,`eo_packing_lists_detail`.`work_order_number` AS `work_order_number`,`eo_packing_lists_detail`.`process_code` AS `process_code`,`eo_packing_lists_detail`.`method_code` AS `method_code`,`eo_packing_lists_detail`.`quantity` AS `quantity`,`eo_packing_lists_detail`.`shipped_amount` AS `shipped_amount`,`eo_packing_lists_detail`.`certification_number` AS `certification_number`,`eo_packing_lists_detail`.`certify` AS `certify`,`eo_packing_lists_detail`.`archive` AS `archive`,`eo_packing_lists_detail`.`created_at` AS `created_at`,`eo_packing_lists_detail`.`updated_at` AS `updated_at`,`eo_packing_lists_detail`.`revision` AS `revision`,`eo_packing_lists`.`date` AS `date`,`eo_packing_lists`.`user_code` AS `user_code`,`eo_user_settings`.`user` AS `user`,`eo_user_settings`.`title` AS `title`,`eo_tags`.`quantity` AS `tag_quantity`,`eo_tags`.`quantity_shipped` AS `tag_quantity_shipped`,`eo_tags`.`shipped` AS `tag_shipped`,`eo_tags`.`date_received` AS `date_received`,ifnull(`eo_work_orders`.`customer_code`,`eo_work_orders_history`.`customer_code`) AS `customer_code`,ifnull(`eo_work_orders`.`part_number`,`eo_work_orders_history`.`part_number`) AS `part_number`,ifnull(`eo_work_orders`.`part_id`,`eo_work_orders_history`.`part_id`) AS `part_id`,ifnull(`eo_work_orders`.`price`,`eo_work_orders_history`.`price`) AS `price`,ifnull(`eo_work_orders`.`price_code`,`eo_work_orders_history`.`price_code`) AS `price_code`,ifnull(`eo_work_orders`.`inventory_amount`,`eo_work_orders_history`.`inventory_amount`) AS `inventory_amount`,ifnull(`eo_work_orders`.`invoice_amount`,`eo_work_orders_history`.`invoice_amount`) AS `invoice_amount`,ifnull(`eo_work_orders`.`customer_purchase_order`,`eo_work_orders_history`.`customer_purchase_order`) AS `customer_purchase_order`,ifnull(`eo_work_orders`.`customer_packing_list`,`eo_work_orders_history`.`customer_packing_list`) AS `customer_packing_list`,ifnull(`eo_work_orders`.`shipped`,`eo_work_orders_history`.`shipped`) AS `work_order_shipped`,ifnull(`eo_work_orders`.`cod`,`eo_work_orders_history`.`cod`) AS `cod`,ifnull(`eo_work_orders`.`unit_code`,`eo_work_orders_history`.`unit_code`) AS `unit_code`,ifnull(`sft_parts`.`revision_code`,`sft_parts_history`.`revision_code`) AS `revision_code`,ifnull(`sft_parts`.`description`,`sft_parts_history`.`description`) AS `description`,ifnull(`sft_processes_view`.`name`,`sft_processes`.`name`) AS `process_name`,ifnull(`sft_parts`.`bake`,`sft_parts_history`.`bake`) AS `bake`,ifnull(`sft_parts`.`baking_time_pre`,`sft_parts_history`.`baking_time_pre`) AS `baking_time_pre`,ifnull(`sft_parts`.`baking_temp_pre`,`sft_parts_history`.`baking_temp_pre`) AS `baking_temp_pre`,ifnull(`sft_parts`.`baking_time_post`,`sft_parts_history`.`baking_time_post`) AS `baking_time_post`,ifnull(`sft_parts`.`baking_temp_post`,`sft_parts_history`.`baking_temp_post`) AS `baking_temp_post`,ifnull(`sft_parts`.`specification`,`sft_parts_history`.`specification`) AS `specification`,ifnull(`sft_parts`.`thickness_minimum`,`sft_parts_history`.`thickness_minimum`) AS `thickness_minimum`,ifnull(`sft_parts`.`thickness_maximum`,`sft_parts_history`.`thickness_maximum`) AS `thickness_maximum`,ifnull(`sft_parts`.`thickness_unit_code`,`sft_parts_history`.`thickness_unit_code`) AS `thickness_unit_code`,`sft_customers`.`name` AS `customer_name`,`sft_customers`.`physical_address` AS `customer_address`,`sft_customers`.`address_extension` AS `customer_address_extension`,`sft_customers`.`city` AS `customer_city`,`sft_customers`.`state` AS `customer_state`,`sft_customers`.`zip` AS `customer_zip`,`sft_customers`.`company_phone` AS `customer_phone`,`sft_customers`.`fax` AS `customer_fax`,`sft_destinations`.`code` AS `destination_code`,`sft_destinations`.`name` AS `destination_name`,`sft_destinations`.`physical_address` AS `destination_address`,`sft_destinations`.`address_extension` AS `destination_address_extension`,`sft_destinations`.`city` AS `destination_city`,`sft_destinations`.`state` AS `destination_state`,`sft_destinations`.`zip` AS `destination_zip`,`sft_destinations`.`company_phone` AS `destination_phone`,`sft_destinations`.`fax` AS `destination_fax`,`sft_work_groups`.`name` AS `workgroup_name`,`eo_system`.`id` AS `company_id`,`eo_system`.`company_name` AS `company_name`,`eo_system`.`address` AS `company_address`,`eo_system`.`city` AS `company_city`,`eo_system`.`state` AS `company_state`,`eo_system`.`zip` AS `company_zip`,`eo_system`.`phone` AS `company_phone`,`eo_system`.`fax` AS `company_fax`,`eo_system`.`email` AS `company_email` from (((((((((((((`eo_packing_lists_detail` left join `eo_packing_lists` on((`eo_packing_lists_detail`.`packing_list_number` = `eo_packing_lists`.`number`))) left join `eo_tags` on((`eo_packing_lists_detail`.`tag_number` = `eo_tags`.`number`))) left join `eo_work_orders` on((`eo_packing_lists_detail`.`work_order_number` = `eo_work_orders`.`number`))) left join `eo_work_orders_history` on((`eo_packing_lists_detail`.`work_order_number` = `eo_work_orders_history`.`number`))) left join `sft_parts` on((`eo_work_orders`.`part_id` = `sft_parts`.`id`))) left join `sft_parts_history` on((`eo_work_orders_history`.`number` = `sft_parts_history`.`work_order_number`))) left join `sft_processes_view` on((`eo_work_orders`.`process_code` = `sft_processes_view`.`code`))) left join `sft_processes` on((`eo_work_orders_history`.`process_code` = `sft_processes`.`code`))) left join `eo_user_settings` on((`eo_packing_lists`.`user_code` = `eo_user_settings`.`user_code`))) left join `sft_customers` on((`eo_packing_lists`.`customer_code` = `sft_customers`.`code`))) left join `sft_destinations` on((`eo_packing_lists`.`destination_code` = `sft_destinations`.`code`))) left join `sft_work_groups` on(((`eo_packing_lists_detail`.`process_code` = `sft_work_groups`.`process_code`) and (`eo_packing_lists_detail`.`method_code` = `sft_work_groups`.`method_code`)))) left join `eo_system` on((`eo_system`.`id` = 1))) order by `eo_packing_lists_detail`.`id`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_packing_lists_detail_view`;
        SQL;
    }
}
