<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftWorkOrdersHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_work_orders_history', function (Blueprint $table) {
            $table->integer('number')->nullable()->default(0)->unique('number');
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->string('customer_name', 228)->nullable()->index('customer_name');
            $table->integer('part_id')->nullable()->index('part_id');
            $table->string('part_number', 228)->nullable()->index('part_number');
            $table->string('process_code', 10)->nullable()->index('process_code');
            $table->decimal('price', 10, 2)->nullable()->index('price');
            $table->string('price_code', 10)->nullable();
            $table->dateTime('date_received')->nullable()->index('date_received');
            $table->dateTime('date_required')->nullable();
            $table->string('customer_purchase_order', 15)->nullable()->index('customer_purchase_order');
            $table->string('customer_packing_list', 15)->nullable()->index('customer_packing_list');
            $table->decimal('quantity', 10, 2)->nullable()->default(0.00)->index('quantity');
            $table->string('unit_code', 10)->nullable();
            $table->decimal('quantity_shipped', 10, 2)->nullable()->default(0.00)->index('quantity_shipped');
            $table->integer('our_last_packing_list')->nullable()->index('our_last_packing_list');
            $table->string('destination_code', 10)->nullable()->default('same');
            $table->string('carrier_code', 10)->nullable();
            $table->string('freight_code', 10)->nullable();
            $table->dateTime('date_shipped')->nullable();
            $table->decimal('shipped_amount', 10, 2)->nullable()->index('shipped_amount');
            $table->decimal('inventory_amount', 10, 2)->nullable()->index('inventory_amount');
            $table->integer('invoice_number')->nullable()->index('invoice_number');
            $table->dateTime('invoice_date')->nullable()->index('invoice_date');
            $table->decimal('invoice_amount', 10, 2)->nullable()->index('invoice_amount');
            $table->integer('priority')->nullable()->default(0);
            $table->boolean('rework')->nullable()->default(0);
            $table->boolean('hot')->nullable()->default(0);
            $table->boolean('started')->nullable()->default(0);
            $table->boolean('completed')->default(0);
            $table->boolean('shipped')->nullable()->default(0);
            $table->boolean('cod')->nullable()->default(0);
            $table->boolean('invoiced')->nullable()->default(0);
            $table->text('note')->nullable();
            $table->string('STEPNAME1', 8)->nullable();
            $table->decimal('TMANHRS1', 10, 2)->nullable();
            $table->decimal('TOTHOURS1', 10, 2)->nullable();
            $table->string('STEPNAME2', 8)->nullable();
            $table->decimal('TMANHRS2', 10, 2)->nullable();
            $table->decimal('TOTHOURS2', 10, 2)->nullable();
            $table->string('STEPNAME3', 8)->nullable();
            $table->decimal('TMANHRS3', 10, 2)->nullable();
            $table->decimal('TOTHOURS3', 10, 2)->nullable();
            $table->integer('id')->primary();
            $table->integer('image_count')->nullable()->default(0)->index('imageCount');
            $table->string('session_id', 228)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->boolean('archive')->default(1);
            $table->bigInteger('revision')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_work_orders_history');
    }
}
