<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftDuplicatePartsView extends Migration
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
            CREATE VIEW `sft_duplicate_parts` AS select `sft_parts`.`id` AS `pId`,`sft_parts`.`customer_code` AS `pCustCode`,`sft_parts`.`number` AS `pNumber`,`sft_parts`.`process_code` AS `pProcessCode`,`sft_parts`.`procedure_code` AS `pProcedureCode`,`sft_parts`.`price` AS `pPrice`,`sft_parts`.`price_code` AS `pPriceCode`,`sft_parts`.`material_name` AS `pMaterialName`,`sft_parts`.`certify` AS `pCertify`,`sft_parts`.`bake` AS `pBake`,`sft_parts`.`quote_id` AS `pQuoteId`,`sft_parts`.`created_at` AS `pCreatedAt`,(select count(`sft_parts`.`id`) from `sft_parts` where ((`sft_parts`.`number` = `pNumber`) and (`sft_parts`.`customer_code` = `pCustCode`) and (`sft_parts`.`process_code` = `pProcessCode`) and (`sft_parts`.`procedure_code` = `pProcedureCode`) and (`sft_parts`.`material_name` = `pMaterialName`) and ((`sft_parts`.`quote_id` = `pQuoteId`) or (`sft_parts`.`quote_id` IS NULL and `pQuoteId` IS NULL)))) AS `pNotDistinct` from `sft_parts`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_duplicate_parts`;
        SQL;
    }
}
