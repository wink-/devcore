<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_code')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_rfq')->nullable();
            $table->integer('partid')->nullable();
            $table->string('part_number');
            $table->string('revision_code')->nullable();
            $table->string('part_description')->nullable();
            $table->string('specification')->nullable();
            $table->string('material')->nullable();
            $table->string('method_code')->nullable();
            $table->string('method')->nullable();
            $table->string('quantity_minimum')->nullable();
            $table->string('quantity_maximum')->nullable();
            $table->decimal('price', 15, 2);
            $table->string('units')->nullable();
            $table->decimal('minimum_lot_charge', 15, 2);
            $table->integer('quantity_price_break')->nullable();
            $table->decimal('price_break', 15, 2)->nullable();
            $table->string('weight')->nullable();
            $table->string('surface_area')->nullable();
            $table->string('thickness_minimum')->nullable();
            $table->string('thickness_maximum')->nullable();
            $table->longText('notes')->nullable();
            $table->longText('comments')->nullable();
            $table->boolean('baking')->default(0)->nullable();
            $table->string('baking_time_pre')->nullable();
            $table->string('baking_temp_pre')->nullable();
            $table->string('baking_time_post')->nullable();
            $table->string('baking_temp_post')->nullable();
            $table->string('bake_notes')->nullable();
            $table->boolean('blasting')->default(0)->nullable();
            $table->string('blast_notes')->nullable();
            $table->boolean('masking')->default(0)->nullable();
            $table->string('mask_notes')->nullable();
            $table->boolean('testing')->default(0)->nullable();
            $table->string('test_notes')->nullable();
            $table->decimal('value_min', 15, 2)->nullable();
            $table->decimal('value_max', 15, 2)->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->string('session')->nullable();
            $table->timestamps();
        });
    }
}
