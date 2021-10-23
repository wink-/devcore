<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordDetailsView extends Migration
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
            CREATE VIEW `record_details` AS select `records`.`id` AS `id`,`records`.`active` AS `active`,`records`.`name` AS `name`,`records`.`description` AS `description`,`units`.`name` AS `unit_name`,`units`.`description` AS `unit_description`,`records`.`logger_id` AS `logger_id`,`records`.`command` AS `command`,`records`.`graph_y_lower` AS `graph_y_lower`,`records`.`graph_y_upper` AS `graph_y_upper`,`loggers`.`name` AS `logger_name`,`loggers`.`active` AS `logger_active`,`loggers`.`ip_address` AS `ip`,`loggers`.`port` AS `tcp_port`,`loggers`.`logger_type_id` AS `logger_type_id`,`records`.`record_type_id` AS `record_type_id`,`record_types`.`name` AS `record_type_name`,`records`.`multiplier` AS `multiplier`,`records`.`created_at` AS `created_at`,`records`.`updated_at` AS `updated_at` from (((`records` join `loggers` on((`records`.`logger_id` = `loggers`.`id`))) join `record_types` on((`records`.`record_type_id` = `record_types`.`id`))) join `units` on((`records`.`unit_id` = `units`.`id`))) order by `records`.`logger_id`,`records`.`name`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `record_details`;
        SQL;
    }
}
