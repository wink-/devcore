<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValuePeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormValuePeriod', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 10)->default('Period');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('Period1', 15);
            $table->string('Period2', 15);
            $table->string('Period3', 15);
            $table->string('Period4', 15);
            $table->string('Period5', 15);
            $table->string('Period6', 15);
            $table->string('Period7', 15);
            $table->string('Period8', 15);
            $table->string('Period9', 15);
            $table->string('Period10', 15);
            $table->string('Period11', 15);
            $table->string('Period12', 15);
            $table->string('Period13', 15);
            $table->string('Period14', 15);
            $table->string('Period15', 15);
            $table->string('Period16', 15);
            $table->string('Period17', 15);
            $table->string('Period18', 15);
            $table->string('Period19', 15);
            $table->string('Period20', 15);
            $table->string('Tank', 15)->nullable()->default('');
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FormValuePeriod');
    }
}
