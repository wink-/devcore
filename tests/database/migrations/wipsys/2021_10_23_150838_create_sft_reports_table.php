<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_reports', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 228)->nullable()->unique('name');
            $table->string('description', 228)->nullable();
            $table->string('model', 228)->nullable();
            $table->string('heading', 228)->nullable();
            $table->boolean('report_date')->default(0);
            $table->text('query')->nullable();
            $table->text('definition')->nullable();
            $table->dateTime('date1')->nullable();
            $table->dateTime('date2')->nullable();
            $table->dateTime('date3')->nullable();
            $table->dateTime('date4')->nullable();
            $table->string('value1', 228)->nullable();
            $table->string('value2', 228)->nullable();
            $table->string('value3', 228)->nullable();
            $table->string('value4', 228)->nullable();
            $table->string('value5', 228)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_reports');
    }
}
