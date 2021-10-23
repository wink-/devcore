<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftCertificationsViewView extends Migration
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
            CREATE VIEW `sft_certifications_view` AS select distinct `sft_packing_lists_detail`.`certification_number` AS `certification_number`,`sft_packing_lists_detail`.`packing_list_number` AS `packing_list_number` from `sft_packing_lists_detail` order by `sft_packing_lists_detail`.`certification_number` desc
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_certifications_view`;
        SQL;
    }
}
