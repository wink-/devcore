<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaborCardsTable extends Migration
{
    public function up()
    {
        Schema::create('labor_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('work_order_number')->nullable();
            $table->string('employee_code')->nullable();
            $table->string('step_code')->nullable();
            $table->date('job_date')->nullable();
            $table->datetime('time_of_day')->nullable();
            $table->float('actual_hours', 10, 2)->nullable();
            $table->float('man_hours', 10, 2)->nullable();
            $table->float('actual_pieces', 10, 2)->nullable();
            $table->string('equipment_code')->nullable();
            $table->float('equipment_quantity', 10, 2)->nullable();
            $table->float('loads', 10, 2)->nullable();
            $table->float('cycle_time', 10, 2)->nullable();
            $table->datetime('time_finished')->nullable();
            $table->string('session')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
