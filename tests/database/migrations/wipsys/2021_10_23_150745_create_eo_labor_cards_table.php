<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoLaborCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_labor_cards', function (Blueprint $table) {
            $table->integer('work_order_number')->nullable()->index('work_order_number');
            $table->string('employee_code', 10)->nullable()->index('employee_code');
            $table->string('step_code', 10)->nullable();
            $table->dateTime('job_date')->nullable()->index('job_date');
            $table->dateTime('time_of_day')->nullable()->index('time_of_day');
            $table->decimal('actual_hours', 10, 2)->nullable();
            $table->decimal('man_hours', 10, 2)->default(0.00);
            $table->decimal('actual_pieces', 10, 2)->nullable();
            $table->string('equipment_code', 10)->nullable();
            $table->decimal('equipment_quantity', 10, 2)->nullable();
            $table->decimal('loads', 10, 2)->nullable();
            $table->decimal('cycle_time', 10, 2)->nullable();
            $table->dateTime('time_finished')->nullable()->index('time_finished');
            $table->integer('id')->primary();
            $table->string('session_id', 228)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eo_labor_cards');
    }
}
