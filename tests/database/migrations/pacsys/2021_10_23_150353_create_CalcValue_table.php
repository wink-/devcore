<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalcValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CalcValue', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('ValueName', 15)->nullable()->index('ValueName');
            $table->string('Description', 45)->nullable();
            $table->string('Formula', 256)->nullable();
            $table->integer('OrderCalc')->default(1);
            $table->string('FormName', 15)->nullable();
            $table->unsignedInteger('DecimalPlaces')->default(0);
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
        Schema::dropIfExists('CalcValue');
    }
}
