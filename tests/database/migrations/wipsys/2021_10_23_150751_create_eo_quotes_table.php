<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_quotes', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('customer_id')->nullable();
            $table->bigInteger('contact_id')->nullable();
            $table->string('customer_rfq', 15)->nullable();
            $table->string('part_number', 50)->nullable();
            $table->string('part_description', 191)->nullable();
            $table->string('specification', 191)->nullable();
            $table->string('material', 191)->nullable();
            $table->bigInteger('process_id')->nullable();
            $table->string('method', 50)->nullable();
            $table->string('quantity_minimum', 191)->nullable();
            $table->string('quantity_maximum', 191)->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('units', 191)->nullable();
            $table->decimal('minimum_lot_charge', 15, 2)->nullable();
            $table->bigInteger('quantity_price_break')->nullable();
            $table->decimal('price_break', 15, 2)->nullable();
            $table->double('weight')->nullable();
            $table->string('surface_area', 30)->nullable();
            $table->string('thickness_minimum', 10)->nullable();
            $table->string('thickness_maximum', 10)->nullable();
            $table->text('notes')->nullable();
            $table->text('comments')->nullable();
            $table->string('baking_time_pre', 191)->nullable();
            $table->string('baking_temp_pre', 191)->nullable();
            $table->string('baking_time_post', 191)->nullable();
            $table->string('baking_temp_post', 191)->nullable();
            $table->string('bake_notes', 191)->nullable();
            $table->tinyInteger('blasting')->nullable();
            $table->string('blast_notes', 191)->nullable();
            $table->tinyInteger('masking')->nullable();
            $table->string('mask_notes', 191)->nullable();
            $table->tinyInteger('testing')->nullable();
            $table->string('test_notes', 191)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('user_code', 10)->nullable();
            $table->text('emails')->nullable();
            $table->boolean('email_print')->nullable()->default(0);
            $table->string('session_id', 228)->nullable()->index('session_id');
            $table->tinyInteger('archive');
            $table->bigInteger('revision')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eo_quotes');
    }
}
