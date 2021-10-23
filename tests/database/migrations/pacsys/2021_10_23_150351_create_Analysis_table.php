<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalysisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Analysis', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('RecordName', 15)->nullable()->index('TankName');
            $table->string('FormName', 15)->nullable()->index('BathName');
            $table->dateTime('Date')->index('Date');
            $table->string('Value1', 45)->nullable();
            $table->string('Value2', 45)->nullable();
            $table->string('Value3', 45)->nullable();
            $table->string('Value4', 45)->nullable();
            $table->string('Value5', 45)->nullable();
            $table->string('Value6', 45)->nullable();
            $table->string('Value7', 45)->nullable();
            $table->string('Value8', 45)->nullable();
            $table->string('Value9', 45)->nullable();
            $table->string('Value10', 45)->nullable();
            $table->string('Value11', 45)->nullable();
            $table->string('Value12', 45)->nullable();
            $table->string('Value13', 45)->nullable();
            $table->string('Value14', 45)->nullable();
            $table->string('Value15', 45)->nullable();
            $table->string('Value16', 45)->nullable();
            $table->string('Value17', 45)->nullable();
            $table->string('Value18', 45)->nullable();
            $table->string('Value19', 45)->nullable();
            $table->string('Value20', 45)->nullable();
            $table->string('Tank', 10)->default('')->index('Tank');
            $table->string('EmpCode', 10)->nullable();
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
            $table->boolean('DeleteVisible')->default(0);
            $table->string('IDy', 45)->default('0');
            $table->string('ActValue1', 45)->nullable();
            $table->string('ActValue2', 45)->nullable();
            $table->string('ActValue3', 45)->nullable();
            $table->string('ActValue4', 45)->nullable();
            $table->string('ActValue5', 45)->nullable();
            $table->string('ActValue6', 45)->nullable();
            $table->string('ActValue7', 45)->nullable();
            $table->string('ActValue8', 45)->nullable();
            $table->string('ActValue9', 45)->nullable();
            $table->string('ActValue10', 45)->nullable();
            $table->string('ActValue11', 45)->nullable();
            $table->string('ActValue12', 45)->nullable();
            $table->string('ActValue13', 45)->nullable();
            $table->string('ActValue14', 45)->nullable();
            $table->string('ActValue15', 45)->nullable();
            $table->string('ActValue16', 45)->nullable();
            $table->string('ActValue17', 45)->nullable();
            $table->string('ActValue18', 45)->nullable();
            $table->string('ActValue19', 45)->nullable();
            $table->string('ActValue20', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Analysis');
    }
}
