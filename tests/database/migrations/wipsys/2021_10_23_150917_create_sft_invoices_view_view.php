<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftInvoicesViewView extends Migration
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
            CREATE VIEW `sft_invoices_view` AS select `sft_invoices`.`id` AS `id`,`sft_invoices`.`number` AS `number`,`sft_invoices`.`customer_code` AS `customer_code`,`sft_invoices`.`customer_purchase_order` AS `customer_purchase_order`,`sft_invoices`.`date` AS `date`,`sft_invoices`.`note` AS `note`,`sft_invoices`.`emails` AS `emails`,`sft_invoices`.`printed` AS `printed`,`sft_invoices`.`session_id` AS `session_id`,`sft_invoices`.`created_at` AS `created_at`,`sft_invoices`.`updated_at` AS `updated_at`,`sft_invoices`.`archive` AS `archive`,`sft_invoices`.`revision` AS `revision` from `sft_invoices` where (not(`sft_invoices`.`archive`))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_invoices_view`;
        SQL;
    }
}
