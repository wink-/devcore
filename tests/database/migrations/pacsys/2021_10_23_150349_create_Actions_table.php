<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Actions', function (Blueprint $table) {
            $table->unsignedInteger('IDx')->default(0);
            $table->increments('ID');
            $table->string('RecordName', 15)->nullable()->index('RecordName');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->string('ValueName', 45)->nullable()->index('ValueName');
            $table->string('Value', 45)->default(0);
            $table->dateTime('RecDate')->nullable()->index('Date');
            $table->dateTime('ActDate')->nullable();
            $table->boolean('Complete')->default(0);
            $table->string('RecEmpCode', 10);
            $table->string('ActEmpCode', 10);
            $table->string('Unit', 15);
            $table->string('ActValue', 15)->nullable();
            $table->string('ScopeName', 15)->nullable();
            $table->string('Comment', 45);
            $table->string('Tank', 10)->index('Tank');
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
        Schema::dropIfExists('Actions');
    }
}
