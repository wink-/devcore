<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Security', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('EmpCode', 10)->nullable()->index('EmpCode');
            $table->string('Scope', 15)->nullable()->index('Scope');
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
        Schema::dropIfExists('Security');
    }
}
