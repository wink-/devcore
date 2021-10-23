<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Form', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 15)->nullable()->unique('Name');
            $table->string('Description', 60)->nullable();
            $table->string('FormType', 15)->nullable()->index('FormType');
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
            $table->tinyInteger('Archived')->nullable();
            $table->string('Revision', 25)->nullable();
            $table->string('AnalysisProcedure', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Form');
    }
}
