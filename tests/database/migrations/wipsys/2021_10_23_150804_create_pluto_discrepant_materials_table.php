<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlutoDiscrepantMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pluto_discrepant_materials', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('workorder_id')->nullable();
            $table->integer('workorder')->nullable();
            $table->integer('part_id')->nullable();
            $table->string('part_number', 50)->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('customer_code', 50)->nullable();
            $table->integer('process_id')->nullable();
            $table->string('process_code', 50)->nullable();
            $table->integer('quantity_rejected')->nullable();
            $table->text('reason_for_rejection')->nullable();
            $table->timestamp('rejection_date')->nullable();
            $table->enum('rejection_type', ['internal', 'external'])->nullable();
            $table->timestamp('corrective_action_due_date')->nullable();
            $table->string('picture', 100)->nullable();
            $table->string('form', 100)->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pluto_discrepant_materials');
    }
}
