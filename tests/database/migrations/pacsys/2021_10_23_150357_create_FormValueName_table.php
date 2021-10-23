<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValueNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormValueName', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 15)->default('Name');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('Name1', 45);
            $table->string('Name2', 45);
            $table->string('Name3', 45);
            $table->string('Name4', 45);
            $table->string('Name5', 45);
            $table->string('Name6', 45);
            $table->string('Name7', 45);
            $table->string('Name8', 45);
            $table->string('Name9', 45);
            $table->string('Name10', 45);
            $table->string('Name11', 45);
            $table->string('Name12', 45);
            $table->string('Name13', 45);
            $table->string('Name14', 45);
            $table->string('Name15', 45);
            $table->string('Name16', 45);
            $table->string('Name17', 45);
            $table->string('Name18', 45);
            $table->string('Name19', 45);
            $table->string('Name20', 45);
            $table->string('Tank', 15)->nullable()->default('Tank');
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
            $table->string('Blank', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FormValueName');
    }
}
