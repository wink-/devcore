<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValueUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormValueUnit', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 10)->default('Unit');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('unit1', 15);
            $table->string('unit2', 15);
            $table->string('unit3', 15);
            $table->string('unit4', 15);
            $table->string('unit5', 15);
            $table->string('unit6', 15);
            $table->string('unit7', 15);
            $table->string('unit8', 15);
            $table->string('unit9', 15);
            $table->string('unit10', 15);
            $table->string('unit11', 15);
            $table->string('unit12', 15);
            $table->string('unit13', 15);
            $table->string('unit14', 15);
            $table->string('unit15', 15);
            $table->string('unit16', 15);
            $table->string('unit17', 15);
            $table->string('unit18', 15);
            $table->string('unit19', 15);
            $table->string('unit20', 15);
            $table->string('Tank', 15)->default('n');
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
        Schema::dropIfExists('FormValueUnit');
    }
}
