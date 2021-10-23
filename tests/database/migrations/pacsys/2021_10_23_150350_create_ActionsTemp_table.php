<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ActionsTemp', function (Blueprint $table) {
            $table->increments('IDx');
            $table->unsignedInteger('ID')->default(0);
            $table->string('RecordName', 15)->nullable()->index('RecordName');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('ValueName', 45)->nullable()->index('ValueName');
            $table->string('Value', 45)->default(0);
            $table->dateTime('RecDate')->nullable()->index('Date');
            $table->dateTime('ActDate')->nullable();
            $table->boolean('Complete')->default(0);
            $table->string('RecEmpCode', 10);
            $table->string('ActEmpCode', 10);
            $table->string('Unit', 15)->default('');
            $table->string('ActValue', 15)->nullable();
            $table->string('ScopeName', 15)->nullable();
            $table->string('Comment', 45)->default('');
            $table->string('Tank', 10)->default('')->index('Tank');
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
            $table->string('EmpName', 45)->nullable();
            $table->string('IDy', 45)->nullable();
            $table->unsignedInteger('ValueNum')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ActionsTemp');
    }
}
