<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftJobDatesView extends Migration
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
            CREATE VIEW `sft_job_dates` AS select distinct cast(`sft_labor_cards`.`job_date` as date) AS `job_date` from `sft_labor_cards` where (`sft_labor_cards`.`job_date` >= (curdate() - interval 30 day)) order by cast(`sft_labor_cards`.`job_date` as date) desc
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `sft_job_dates`;
        SQL;
    }
}
