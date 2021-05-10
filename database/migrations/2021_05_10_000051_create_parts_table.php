<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number')->nullable();
            $table->string('revision_code')->nullable();
            $table->string('description')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('process_code')->nullable();
            $table->string('method_code')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('price_code')->nullable();
            $table->decimal('price_break', 15, 2)->nullable();
            $table->string('quantity_price_break')->nullable();
            $table->string('unit_code')->nullable();
            $table->decimal('minimum_lot_charge', 15, 2)->nullable();
            $table->decimal('minimum_line_charge', 15, 2)->nullable();
            $table->integer('quote')->nullable();
            $table->boolean('certify')->default(0)->nullable();
            $table->string('specification')->nullable();
            $table->boolean('bake')->default(0)->nullable();
            $table->string('baking_time_pre')->nullable();
            $table->string('baking_temp_pre')->nullable();
            $table->string('baking_time_post')->nullable();
            $table->string('baking_temp_post')->nullable();
            $table->string('procedure_code')->nullable();
            $table->string('material')->nullable();
            $table->string('material_name')->nullable();
            $table->string('material_condition')->nullable();
            $table->float('thickness_minimum', 10, 6)->nullable();
            $table->float('thickness_maximum', 10, 6)->nullable();
            $table->string('thickness_unit_code')->nullable();
            $table->float('surface_area', 10, 2)->nullable();
            $table->string('surface_area_unit_code')->nullable();
            $table->float('weight', 10, 2)->nullable();
            $table->string('weight_unit_code')->nullable();
            $table->float('length', 10, 2)->nullable();
            $table->float('width', 10, 2)->nullable();
            $table->float('height', 10, 2)->nullable();
            $table->string('dimension_unit_code')->nullable();
            $table->float('material_thickness', 15, 4)->nullable();
            $table->string('material_thickness_unit_code')->nullable();
            $table->longText('note')->nullable();
            $table->longText('special_requirement')->nullable();
            $table->longText('operator_note')->nullable();
            $table->integer('quality_check_1')->nullable();
            $table->integer('quality_check_2')->nullable();
            $table->integer('quality_check_3')->nullable();
            $table->integer('quality_check_4')->nullable();
            $table->integer('quality_check_5')->nullable();
            $table->integer('quality_check_6')->nullable();
            $table->integer('image_count')->nullable();
            $table->string('session')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
