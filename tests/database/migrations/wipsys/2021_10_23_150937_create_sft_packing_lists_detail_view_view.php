<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftPackingListsDetailViewView extends Migration
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
            CREATE VIEW `sft_packing_lists_detail_view` AS select `sft_packing_lists_detail`.`id` AS `id`,`sft_packing_lists_detail`.`packing_list_number` AS `packing_list_number`,`sft_packing_lists_detail`.`tag_number` AS `tag_number`,`sft_packing_lists_detail`.`work_order_number` AS `work_order_number`,`sft_packing_lists_detail`.`process_code` AS `process_code`,`sft_packing_lists_detail`.`method_code` AS `method_code`,`sft_packing_lists_detail`.`quantity` AS `quantity`,`sft_packing_lists_detail`.`shipped_amount` AS `shipped_amount`,`sft_packing_lists_detail`.`certification_number` AS `certification_number`,`sft_packing_lists_detail`.`certify` AS `certify`,`sft_packing_lists_detail`.`archive` AS `archive`,`sft_packing_lists_detail`.`created_at` AS `created_at`,`sft_packing_lists_detail`.`updated_at` AS `updated_at`,`sft_packing_lists_detail`.`revision` AS `revision`,`sft_packing_lists`.`date` AS `date`,`sft_packing_lists`.`user_code` AS `user_code`,`sft_user_settings`.`user` AS `user`,`sft_user_settings`.`title` AS `title`,`sft_tags`.`quantity` AS `tag_quantity`,`sft_tags`.`quantity_shipped` AS `tag_quantity_shipped`,`sft_tags`.`shipped` AS `tag_shipped`,`sft_tags`.`date_received` AS `date_received`,ifnull(`sft_work_orders`.`customer_code`,`sft_work_orders_history`.`customer_code`) AS `customer_code`,ifnull(`sft_work_orders`.`part_number`,`sft_work_orders_history`.`part_number`) AS `part_number`,ifnull(`sft_work_orders`.`part_id`,`sft_work_orders_history`.`part_id`) AS `part_id`,ifnull(`sft_work_orders`.`price`,`sft_work_orders_history`.`price`) AS `price`,ifnull(`sft_work_orders`.`price_code`,`sft_work_orders_history`.`price_code`) AS `price_code`,ifnull(`sft_work_orders`.`inventory_amount`,`sft_work_orders_history`.`inventory_amount`) AS `inventory_amount`,ifnull(`sft_work_orders`.`invoice_amount`,`sft_work_orders_history`.`invoice_amount`) AS `invoice_amount`,ifnull(`sft_work_orders`.`customer_purchase_order`,`sft_work_orders_history`.`customer_purchase_order`) AS `customer_purchase_order`,ifnull(`sft_work_orders`.`customer_packing_list`,`sft_work_orders_history`.`customer_packing_list`) AS `customer_packing_list`,ifnull(`sft_work_orders`.`shipped`,`sft_work_orders_history`.`shipped`) AS `work_order_shipped`,ifnull(`sft_work_orders`.`cod`,`sft_work_orders_history`.`cod`) AS `cod`,ifnull(`sft_work_orders`.`unit_code`,`sft_work_orders_history`.`unit_code`) AS `unit_code`,ifnull(`sft_parts`.`revision_code`,`sft_parts_history`.`revision_code`) AS `revision_code`,ifnull(`sft_parts`.`description`,`sft_parts_history`.`description`) AS `description`,ifnull(`sft_processes_view`.`name`,`sft_processes`.`name`) AS `process_name`,ifnull(`sft_parts`.`bake`,`sft_parts_history`.`bake`) AS `bake`,ifnull(`sft_parts`.`baking_time_pre`,`sft_parts_history`.`baking_time_pre`) AS `baking_time_pre`,ifnull(`sft_parts`.`baking_temp_pre`,`sft_parts_history`.`baking_temp_pre`) AS `baking_temp_pre`,ifnull(`sft_parts`.`baking_time_post`,`sft_parts_history`.`baking_time_post`) AS `baking_time_post`,ifnull(`sft_parts`.`baking_temp_post`,`sft_parts_history`.`baking_temp_post`) AS `baking_temp_post`,ifnull(`sft_parts`.`specification`,`sft_parts_history`.`specification`) AS `specification`,ifnull(`sft_parts`.`thickness_minimum`,`sft_parts_history`.`thickness_minimum`) AS `thickness_minimum`,ifnull(`sft_parts`.`thickness_maximum`,`sft_parts_history`.`thickness_maximum`) AS `thickness_maximum`,ifnull(`sft_parts`.`thickness_unit_code`,`sft_parts_history`.`thickness_unit_code`) AS `thickness_unit_code`,`sft_customers`.`name` AS `customer_name`,`sft_customers`.`physical_address` AS `customer_address`,`sft_customers`.`address_extension` AS `customer_address_extension`,`sft_customers`.`city` AS `customer_city`,`sft_customers`.`state` AS `customer_state`,`sft_customers`.`zip` AS `customer_zip`,`sft_customers`.`company_phone` AS `customer_phone`,`sft_customers`.`fax` AS `customer_fax`,`sft_destinations`.`code` AS `destination_code`,`sft_destinations`.`name` AS `destination_name`,`sft_destinations`.`physical_address` AS `destination_address`,`sft_destinations`.`address_extension` AS `destination_address_extension`,`sft_destinations`.`city` AS `destination_city`,`sft_destinations`.`state` AS `destination_state`,`sft_destinations`.`zip` AS `destination_zip`,`sft_destinations`.`company_phone` AS `destination_phone`,`sft_destinations`.`fax` AS `destination_fax`,`sft_work_groups`.`name` AS `workgroup_name`,`sft_system`.`id` AS `company_id`,`sft_system`.`company_name` AS `company_name`,`sft_system`.`address` AS `company_address`,`sft_system`.`city` AS `company_city`,`sft_system`.`state` AS `company_state`,`sft_system`.`zip` AS `company_zip`,`sft_system`.`phone` AS `company_phone`,`sft_system`.`fax` AS `company_fax`,`sft_system`.`email` AS `company_email` from (((((((((((((`sft_packing_lists_detail` left join `sft_packing_lists` on((`sft_packing_lists_detail`.`packing_list_number` = `sft_packing_lists`.`number`))) left join `sft_tags` on((`sft_packing_lists_detail`.`tag_number` = `sft_tags`.`number`))) left join `sft_work_orders` on((`sft_packing_lists_detail`.`work_order_number` = `sft_work_orders`.`number`))) left join `sft_work_orders_history` on((`sft_packing_lists_detail`.`work_order_number` = `sft_work_orders_history`.`number`))) left join `sft_parts` on((`sft_work_orders`.`part_id` = `sft_parts`.`id`))) left join `sft_parts_history` on((`sft_work_orders_history`.`number` = `sft_parts_history`.`work_order_number`))) left join `sft_processes_view` on((`sft_work_orders`.`process_code` = `sft_processes_view`.`code`))) left join `sft_processes` on((`sft_work_orders_history`.`process_code` = `sft_processes`.`code`))) left join `sft_user_settings` on((`sft_packing_lists`.`user_code` = `sft_user_settings`.`user_code`))) left join `sft_customers` on((`sft_packing_lists`.`customer_code` = `sft_customers`.`code`))) left join `sft_destinations` on((`sft_packing_lists`.`destination_code` = `sft_destinations`.`code`))) left join `sft_work_groups` on(((`sft_packing_lists_detail`.`process_code` = `sft_work_groups`.`process_code`) and (`sft_packing_lists_detail`.`method_code` = `sft_work_groups`.`method_code`)))) left join `sft_system` on((`sft_system`.`id` = 1))) order by `sft_packing_lists_detail`.`id`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_packing_lists_detail_view`;
        SQL;
    }
}
