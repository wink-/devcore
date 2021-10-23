<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlutoDiscrepantMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pluto_discrepant_material', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('workorder_id')->nullable();
            $table->string('part_number', 50)->nullable();
            $table->string('customer_code', 50)->nullable();
            $table->string('process_code', 50)->nullable();
            $table->integer('quantity_rejected')->nullable();
            $table->text('reason_for_rejection')->nullable();
            $table->date('rejection_date')->nullable();
            $table->enum('rejection_type', ['internal', 'external'])->nullable();
            $table->date('corrective_action_due_date')->nullable();
            $table->string('image_url', 100)->nullable();
            $table->string('form_url', 100)->nullable();
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
        Schema::dropIfExists('pluto_discrepant_material');
    }
}
