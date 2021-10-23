<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_quotes', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('customer_id')->nullable()->index('customer_id');
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->string('customer_name', 228)->nullable()->index('customer_name');
            $table->integer('contact_id')->nullable();
            $table->string('customer_rfq', 15)->nullable();
            $table->integer('part_id')->nullable()->index('part_id');
            $table->string('part_number', 50)->nullable()->index('part_number');
            $table->string('revision_code', 10)->nullable()->index('revision_code');
            $table->string('part_description', 191)->nullable()->index('part_description');
            $table->string('specification', 191)->nullable()->index();
            $table->string('material', 191)->nullable()->index('material');
            $table->integer('process_id')->nullable()->index('process_id');
            $table->string('process_code', 10)->nullable()->index('process_code');
            $table->string('process_old', 50)->nullable();
            $table->string('method_code', 10)->nullable();
            $table->string('method', 50)->nullable();
            $table->string('quantity_minimum', 191)->nullable()->index('quantity_minimum');
            $table->string('quantity_maximum', 191)->nullable()->index('quantity_maximum');
            $table->string('unit_code', 10)->nullable();
            $table->string('units', 191)->nullable();
            $table->string('quantity1', 30)->nullable();
            $table->decimal('price', 15, 2)->nullable()->index('price');
            $table->string('price_code', 10)->nullable();
            $table->decimal('minimum_lot_charge', 15, 2)->nullable()->index('minimum_lot_charge');
            $table->integer('quantity_price_break')->nullable();
            $table->decimal('price_break', 15, 2)->nullable();
            $table->double('weight')->nullable();
            $table->string('weight_unit_code', 10)->nullable();
            $table->string('surface_area', 30)->nullable();
            $table->string('surface_area_unit_code', 10)->nullable();
            $table->string('thickness_minimum', 10)->nullable();
            $table->string('thickness_maximum', 10)->nullable();
            $table->string('thickness_unit_code', 10)->nullable();
            $table->text('notes')->nullable();
            $table->text('comments')->nullable();
            $table->string('quotedBy', 10)->nullable();
            $table->tinyInteger('baking')->nullable();
            $table->string('baking_time_pre', 191)->nullable();
            $table->string('baking_temp_pre', 191)->nullable();
            $table->string('baking_time_post', 191)->nullable();
            $table->string('baking_temp_post', 191)->nullable();
            $table->text('bake_notes')->nullable();
            $table->tinyInteger('blasting')->nullable();
            $table->text('blast_notes')->nullable();
            $table->tinyInteger('masking')->nullable();
            $table->text('mask_notes')->nullable();
            $table->tinyInteger('testing')->nullable();
            $table->text('test_notes')->nullable();
            $table->integer('user_id')->nullable()->index('user_id');
            $table->string('user_code', 10)->nullable()->index('user_code');
            $table->text('emails')->nullable();
            $table->boolean('email_print')->nullable()->default(0);
            $table->string('print', 191)->nullable();
            $table->decimal('value_min', 15, 2)->nullable();
            $table->decimal('value_max', 15, 2)->nullable();
            $table->integer('image_count')->nullable()->default(0);
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision')->nullable();
            $table->string('session_id', 228)->nullable()->index('session_id');
            $table->timestamp('created_at')->nullable()->useCurrent()->index('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable()->index('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_quotes');
    }
}
