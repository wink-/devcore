<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValueTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormValueType', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 10)->default('Type');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('Type1', 15);
            $table->string('Type2', 15);
            $table->string('Type3', 15);
            $table->string('Type4', 15);
            $table->string('Type5', 15);
            $table->string('Type6', 15);
            $table->string('Type7', 15);
            $table->string('Type8', 15);
            $table->string('Type9', 15);
            $table->string('Type10', 15);
            $table->string('Type11', 15);
            $table->string('Type12', 15);
            $table->string('Type13', 15);
            $table->string('Type14', 15);
            $table->string('Type15', 15);
            $table->string('Type16', 15);
            $table->string('Type17', 15);
            $table->string('Type18', 15);
            $table->string('Type19', 15);
            $table->string('Type20', 15);
            $table->string('Tank', 15)->default('data');
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
            $table->boolean('False')->default(0);
            $table->tinyInteger('True')->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FormValueType');
    }
}
