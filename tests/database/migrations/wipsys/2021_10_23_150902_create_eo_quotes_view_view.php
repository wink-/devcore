<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoQuotesViewView extends Migration
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
            CREATE VIEW `eo_quotes_view` AS select `sft_quotes`.`id` AS `id`,`sft_quotes`.`part_id` AS `part_id`,`sft_quotes`.`part_number` AS `part_number`,`sft_quotes`.`revision_code` AS `revision_code`,`sft_quotes`.`part_description` AS `part_description`,`sft_quotes`.`method_code` AS `method_code`,`sft_quotes`.`method` AS `method`,`sft_quotes`.`material` AS `material`,`sft_materials`.`description` AS `material_description`,`sft_quotes`.`specification` AS `specification`,`sft_quotes`.`quantity_minimum` AS `quantity_minimum`,`sft_quotes`.`quantity_maximum` AS `quantity_maximum`,`sft_quotes`.`unit_code` AS `unit_code`,`sft_quotes`.`price` AS `price`,`sft_quotes`.`price_code` AS `price_code`,`sft_quotes`.`minimum_lot_charge` AS `minimum_lot_charge`,if(`sft_quotes`.`price_break` IS NULL,0,`sft_quotes`.`price_break`) AS `price_break`,if(`sft_quotes`.`quantity_price_break` IS NULL,0,`sft_quotes`.`quantity_price_break`) AS `quantity_price_break`,`sft_quotes`.`contact_id` AS `contact_id`,`sft_quotes`.`customer_rfq` AS `customer_rfq`,`sft_quotes`.`bake_notes` AS `bake_notes`,`sft_quotes`.`baking_time_pre` AS `baking_time_pre`,`sft_quotes`.`baking_time_post` AS `baking_time_post`,`sft_quotes`.`baking_temp_pre` AS `baking_temp_pre`,`sft_quotes`.`baking_temp_post` AS `baking_temp_post`,`sft_quotes`.`blasting` AS `blasting`,`sft_quotes`.`blast_notes` AS `blast_notes`,`sft_quotes`.`masking` AS `masking`,`sft_quotes`.`mask_notes` AS `mask_notes`,`sft_quotes`.`testing` AS `testing`,`sft_quotes`.`test_notes` AS `test_notes`,`sft_quotes`.`notes` AS `notes`,`sft_quotes`.`comments` AS `comments`,`sft_quotes`.`thickness_minimum` AS `thickness_minimum`,`sft_quotes`.`thickness_maximum` AS `thickness_maximum`,`sft_quotes`.`thickness_unit_code` AS `thickness_unit_code`,`sft_contacts`.`first_name` AS `first_name`,`sft_contacts`.`last_name` AS `last_name`,`sft_contacts`.`email` AS `email`,`sft_contacts`.`quote_emails` AS `quote_emails`,`sft_contacts`.`email_quote_print` AS `email_quote_print`,`sft_quotes`.`emails` AS `emails`,`sft_quotes`.`email_print` AS `email_print`,`sft_customers`.`code` AS `customer_code`,`sft_customers`.`name` AS `customer_name`,`sft_processes`.`code` AS `process_code`,`sft_processes`.`name` AS `process_name`,`sft_users`.`code` AS `user_code`,`sft_users`.`user` AS `user_name`,`sft_quotes`.`revision` AS `revision`,if(`sft_quotes`.`archive` IS NULL,FALSE,`sft_quotes`.`archive`) AS `archive`,`sft_quotes`.`created_at` AS `created_at`,`sft_quotes`.`updated_at` AS `updated_at` from (((((`sft_quotes` left join `sft_contacts` on((`sft_quotes`.`contact_id` = `sft_contacts`.`id`))) left join `sft_customers` on((`sft_quotes`.`customer_id` = `sft_customers`.`id`))) left join `sft_processes` on((`sft_quotes`.`process_id` = `sft_processes`.`id`))) left join `sft_users` on((convert(`sft_quotes`.`user_code` using utf8mb4) = `sft_users`.`code`))) left join `sft_materials` on((convert(`sft_quotes`.`material` using utf8mb4) = `sft_materials`.`name`))) order by `sft_quotes`.`id` desc
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_quotes_view`;
        SQL;
    }
}
