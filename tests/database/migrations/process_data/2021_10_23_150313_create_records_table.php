<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->integer('id')->unique('id');
            $table->tinyInteger('active')->nullable();
            $table->string('name', 128)->nullable()->index('name');
            $table->integer('logger_id')->default(0)->index('logger_id');
            $table->integer('record_type_id')->default(0)->index('type_id');
            $table->string('command')->nullable();
            $table->double('multiplier')->default(1);
            $table->string('description', 128)->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('graph_y_lower')->nullable();
            $table->integer('graph_y_upper')->nullable();
            $table->timestamp('created_at')->useCurrent();
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
        Schema::dropIfExists('records');
    }
}
