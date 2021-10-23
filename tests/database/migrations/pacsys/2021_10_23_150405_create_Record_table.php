<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Record', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 15)->nullable()->unique('Name');
            $table->string('Description', 45)->nullable();
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('FormType', 15)->nullable()->index('FormType');
            $table->string('ScopeName', 15)->nullable()->index('ScopeName');
            $table->unsignedInteger('ImageID')->default(0);
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
            $table->unsignedInteger('CapacityOld')->default(0);
            $table->double('Capacity')->nullable();
            $table->string('CapacityUnit', 15)->default('gallons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Record');
    }
}
