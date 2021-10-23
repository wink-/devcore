<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValueRangeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormValueRange', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 10)->default('Range');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('min1', 15);
            $table->string('max1', 15);
            $table->string('min2', 15);
            $table->string('max2', 15);
            $table->string('min3', 15);
            $table->string('max3', 15);
            $table->string('min4', 15);
            $table->string('max4', 15);
            $table->string('min5', 15);
            $table->string('max5', 15);
            $table->string('min6', 15);
            $table->string('max6', 15);
            $table->string('min7', 15);
            $table->string('max7', 15);
            $table->string('min8', 15);
            $table->string('max8', 15);
            $table->string('min9', 15);
            $table->string('max9', 15);
            $table->string('min10', 15);
            $table->string('max10', 15);
            $table->string('min11', 15);
            $table->string('max11', 15);
            $table->string('min12', 15);
            $table->string('max12', 15);
            $table->string('min13', 15);
            $table->string('max13', 15);
            $table->string('min14', 15);
            $table->string('max14', 15);
            $table->string('min15', 15);
            $table->string('max15', 15);
            $table->string('min16', 15);
            $table->string('max16', 15);
            $table->string('min17', 15);
            $table->string('max17', 15);
            $table->string('min18', 15);
            $table->string('max18', 15);
            $table->string('min19', 15);
            $table->string('max19', 15);
            $table->string('min20', 15);
            $table->string('max20', 15);
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
        Schema::dropIfExists('FormValueRange');
    }
}
