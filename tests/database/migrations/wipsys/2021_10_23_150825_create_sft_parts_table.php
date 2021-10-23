<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_parts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('number', 228)->nullable()->index('number');
            $table->string('revision_code', 10)->nullable()->index('revision_code');
            $table->string('description', 228)->nullable()->index('description');
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->string('customer_name', 228)->nullable()->index('customer_name');
            $table->string('process_code', 10)->nullable()->index('process_code');
            $table->string('method_code', 10)->nullable();
            $table->decimal('price', 10, 2)->nullable()->index('price');
            $table->string('price_code', 10)->nullable();
            $table->decimal('price_break', 10, 2)->nullable();
            $table->decimal('quantity_price_break', 10, 2)->nullable();
            $table->string('unit_code', 10)->nullable();
            $table->decimal('minimum_lot_charge', 10, 2)->nullable();
            $table->decimal('minimum_line_charge', 10, 2)->nullable();
            $table->bigInteger('quote_id')->nullable()->index('quote_id');
            $table->boolean('certify')->default(0);
            $table->string('specification', 228)->nullable()->index('specification');
            $table->boolean('bake')->default(0);
            $table->string('baking_time_pre', 228)->nullable();
            $table->string('baking_temp_pre', 228)->nullable();
            $table->string('baking_time_post', 228)->nullable();
            $table->string('baking_temp_post', 228)->nullable();
            $table->string('procedure_code', 10)->nullable()->index('procedure_code');
            $table->string('material', 228)->nullable();
            $table->string('material_name', 228)->nullable();
            $table->string('material_condition', 228)->nullable();
            $table->decimal('thickness_minimum', 10, 6)->nullable();
            $table->decimal('thickness_maximum', 10, 6)->nullable();
            $table->string('thickness_unit_code', 10)->nullable()->default('in');
            $table->decimal('surface_area', 10, 2)->nullable();
            $table->string('surface_area_unit_code', 10)->nullable();
            $table->decimal('weight', 10, 6)->nullable();
            $table->string('weight_unit_code', 10)->nullable();
            $table->decimal('length', 10, 2)->nullable();
            $table->decimal('width', 10, 6)->nullable();
            $table->decimal('height', 10, 2)->nullable();
            $table->string('dimension_unit_code', 10)->nullable();
            $table->double('material_thickness', 10, 4)->nullable();
            $table->string('material_thickness_unit_code', 10)->nullable();
            $table->text('note')->nullable();
            $table->text('special_requirement')->nullable();
            $table->text('operator_note')->nullable();
            $table->integer('quality_check_1')->nullable();
            $table->integer('quality_check_2')->nullable();
            $table->integer('quality_check_3')->nullable();
            $table->integer('quality_check_4')->nullable();
            $table->integer('quality_check_5')->nullable();
            $table->integer('quality_check_6')->nullable();
            $table->integer('image_count')->nullable()->default(0);
            $table->string('session_id', 228)->nullable()->index('session_id');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
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
        Schema::dropIfExists('sft_parts');
    }
}
