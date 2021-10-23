<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoInvoicesViewView extends Migration
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
            CREATE VIEW `eo_invoices_view` AS select `eo_invoices`.`id` AS `id`,`eo_invoices`.`number` AS `number`,`eo_invoices`.`customer_code` AS `customer_code`,`eo_invoices`.`customer_purchase_order` AS `customer_purchase_order`,`eo_invoices`.`date` AS `date`,`eo_invoices`.`note` AS `note`,`eo_invoices`.`emails` AS `emails`,`eo_invoices`.`printed` AS `printed`,`eo_invoices`.`session_id` AS `session_id`,`eo_invoices`.`created_at` AS `created_at`,`eo_invoices`.`updated_at` AS `updated_at`,`eo_invoices`.`archive` AS `archive`,`eo_invoices`.`revision` AS `revision` from `eo_invoices` where (not(`eo_invoices`.`archive`))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `eo_invoices_view`;
        SQL;
    }
}
