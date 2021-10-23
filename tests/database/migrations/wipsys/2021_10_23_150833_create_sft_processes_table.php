<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_processes', function (Blueprint $table) {
            $table->string('code', 10)->nullable()->unique('code');
            $table->string('name', 228)->nullable()->index('name');
            $table->decimal('minimum_lot_charge', 10, 2)->nullable();
            $table->integer('id')->primary();
            $table->boolean('compliant_rohs')->nullable()->default(1);
            $table->boolean('compliant_reach')->nullable()->default(1);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_processes');
    }
}
