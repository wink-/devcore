<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeScopesView extends Migration
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
            CREATE VIEW `employee_scopes` AS select `employees`.`id` AS `id`,`employees`.`code` AS `code`,`employees`.`name` AS `name`,`employees`.`pin` AS `pin`,`Security`.`Scope` AS `scope` from (`employees` join `Security` on((`Security`.`EmpCode` = `employees`.`code`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `employee_scopes`;
        SQL;
    }
}
