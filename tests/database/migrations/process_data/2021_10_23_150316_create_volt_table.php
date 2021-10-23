<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoltTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volt', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('record_id')->index('record_id');
            $table->decimal('volt', 8, 1);
            $table->timestamp('created_at')->useCurrent()->index('created_at');
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volt');
    }
}
