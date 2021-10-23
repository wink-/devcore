<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10)->nullable()->unique('Code');
            $table->string('name', 45)->nullable();
            $table->string('user_name', 15)->nullable()->unique('userName');
            $table->string('pin', 100);
            $table->boolean('production')->default(0);
            $table->boolean('supervisor')->default(0);
            $table->timestamp('timestamp')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
