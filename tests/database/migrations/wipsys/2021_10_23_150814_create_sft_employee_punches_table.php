<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftEmployeePunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_employee_punches', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('user_full_name', 228)->nullable()->index('user_full_name');
            $table->tinyInteger('covid_question_1')->nullable();
            $table->tinyInteger('covid_question_2')->nullable();
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision')->nullable();
            $table->string('session_id', 228)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_employee_punches');
    }
}
