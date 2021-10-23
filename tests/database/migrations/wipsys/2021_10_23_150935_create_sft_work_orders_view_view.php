<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftWorkOrdersViewView extends Migration
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
            CREATE VIEW `sft_work_orders_view` AS select `sft_work_orders`.`id` AS `id`,`sft_work_orders`.`number` AS `number`,`sft_work_orders`.`customer_code` AS `customer_code`,`sft_work_orders`.`part_id` AS `part_id`,`sft_work_orders`.`part_number` AS `part_number`,`sft_work_orders`.`process_code` AS `process_code`,`sft_work_orders`.`quantity` AS `quantity`,`sft_work_orders`.`unit_code` AS `unit_code`,`sft_work_orders`.`price` AS `price`,`sft_work_orders`.`price_code` AS `price_code`,`sft_work_orders`.`date_received` AS `date_received`,`sft_work_orders`.`date_required` AS `date_required`,`sft_work_orders`.`customer_purchase_order` AS `customer_purchase_order`,`sft_work_orders`.`customer_packing_list` AS `customer_packing_list`,`sft_work_orders`.`quantity_shipped` AS `quantity_shipped`,`sft_work_orders`.`our_last_packing_list` AS `our_last_packing_list`,`sft_work_orders`.`date_shipped` AS `date_shipped`,`sft_work_orders`.`shipped_amount` AS `shipped_amount`,`sft_work_orders`.`inventory_amount` AS `inventory_amount`,`sft_work_orders`.`destination_code` AS `destination_code`,`sft_work_orders`.`carrier_code` AS `carrier_code`,`sft_work_orders`.`freight_code` AS `freight_code`,`sft_work_orders`.`invoice_number` AS `invoice_number`,`sft_work_orders`.`invoice_date` AS `invoice_date`,`sft_work_orders`.`invoice_amount` AS `invoice_amount`,`sft_work_orders`.`priority` AS `priority`,`sft_work_orders`.`rework` AS `rework`,`sft_work_orders`.`hot` AS `hot`,`sft_work_orders`.`started` AS `started`,`sft_work_orders`.`completed` AS `completed`,`sft_work_orders`.`shipped` AS `shipped`,`sft_work_orders`.`invoiced` AS `invoiced`,`sft_work_orders`.`cod` AS `cod`,`sft_work_orders`.`note` AS `note`,`sft_parts`.`revision_code` AS `revision_code`,`sft_parts`.`description` AS `description`,`sft_parts`.`method_code` AS `method_code`,`sft_parts`.`bake` AS `bake`,`sft_parts`.`baking_time_pre` AS `baking_time_pre`,`sft_parts`.`baking_temp_pre` AS `baking_temp_pre`,`sft_parts`.`baking_time_post` AS `baking_time_post`,`sft_parts`.`baking_temp_post` AS `baking_temp_post`,`sft_parts`.`certify` AS `certify`,`sft_parts`.`specification` AS `specification`,`sft_parts`.`material_name` AS `material_name`,`sft_parts`.`thickness_minimum` AS `thickness_minimum`,`sft_parts`.`thickness_maximum` AS `thickness_maximum`,`sft_parts`.`thickness_unit_code` AS `thickness_unit_code`,`sft_parts`.`note` AS `part_note`,`sft_parts`.`special_requirement` AS `special_requirement`,`sft_parts`.`quote_id` AS `quote_id`,`sft_parts`.`image_count` AS `part_image_count`,`sft_parts`.`quality_check_1` AS `quality_check_1`,(select `sft_quality_checks`.`description` from `sft_quality_checks` where (`sft_quality_checks`.`id` = `sft_parts`.`quality_check_1`)) AS `quality_check_1_description`,`sft_parts`.`quality_check_2` AS `quality_check_2`,(select `sft_quality_checks`.`description` from `sft_quality_checks` where (`sft_quality_checks`.`id` = `sft_parts`.`quality_check_2`)) AS `quality_check_2_description`,`sft_parts`.`quality_check_3` AS `quality_check_3`,(select `sft_quality_checks`.`description` from `sft_quality_checks` where (`sft_quality_checks`.`id` = `sft_parts`.`quality_check_3`)) AS `quality_check_3_description`,`sft_parts`.`quality_check_4` AS `quality_check_4`,(select `sft_quality_checks`.`description` from `sft_quality_checks` where (`sft_quality_checks`.`id` = `sft_parts`.`quality_check_4`)) AS `quality_check_4_description`,`sft_parts`.`quality_check_5` AS `quality_check_5`,(select `sft_quality_checks`.`description` from `sft_quality_checks` where (`sft_quality_checks`.`id` = `sft_parts`.`quality_check_5`)) AS `quality_check_5_description`,`sft_parts`.`quality_check_6` AS `quality_check_6`,(select `sft_quality_checks`.`description` from `sft_quality_checks` where (`sft_quality_checks`.`id` = `sft_parts`.`quality_check_6`)) AS `quality_check_6_description`,`sft_processes`.`name` AS `process_name`,`sft_priorities`.`image_key` AS `priority_image_key`,`sft_procedures`.`code` AS `procedure_code`,`sft_procedures`.`description` AS `procedure_description`,`sft_customers`.`name` AS `customer_name`,`sft_customers`.`physical_address` AS `customer_address`,`sft_customers`.`address_extension` AS `customer_address_extension`,`sft_customers`.`city` AS `customer_city`,`sft_customers`.`state` AS `customer_state`,`sft_customers`.`zip` AS `customer_zip`,`sft_customers`.`company_phone` AS `customer_phone`,`sft_customers`.`fax` AS `customer_fax`,(select `sft_system`.`company_name` from `sft_system` where (`sft_system`.`id` = 1)) AS `company_name`,(select count(0) from `sft_tags` where (`sft_tags`.`work_order_number` = `sft_work_orders`.`number`)) AS `tag_count`,(select `sft_methods`.`name` from `sft_methods` where (`sft_methods`.`code` = `sft_parts`.`method_code`)) AS `method_name`,`sft_work_orders`.`image_count` AS `work_order_image_count`,`sft_work_orders`.`printed` AS `printed`,`sft_work_orders`.`session_id` AS `session_id`,`sft_work_orders`.`revision` AS `revision`,`sft_work_orders`.`archive` AS `archive`,`sft_work_orders`.`created_at` AS `created_at`,`sft_work_orders`.`updated_at` AS `updated_at` from (((((`sft_work_orders` left join `sft_parts` on((`sft_work_orders`.`part_id` = `sft_parts`.`id`))) left join `sft_customers` on((`sft_work_orders`.`customer_code` = `sft_customers`.`code`))) left join `sft_processes` on((`sft_work_orders`.`process_code` = `sft_processes`.`code`))) left join `sft_priorities` on((`sft_work_orders`.`priority` = `sft_priorities`.`code`))) left join `sft_procedures` on((`sft_parts`.`procedure_code` = `sft_procedures`.`code`))) order by `sft_work_orders`.`number`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_work_orders_view`;
        SQL;
    }
}
