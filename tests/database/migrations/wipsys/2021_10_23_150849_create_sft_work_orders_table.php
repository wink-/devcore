<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_work_orders', function (Blueprint $table) {
            $table->integer('number')->nullable()->default(0)->unique('number');
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->integer('part_id')->nullable()->index('part_id');
            $table->string('part_number', 228)->nullable()->index('part_number');
            $table->string('process_code', 10)->nullable()->index('process_code');
            $table->decimal('price', 10, 2)->nullable();
            $table->string('price_code', 10)->nullable();
            $table->dateTime('date_received')->nullable()->index('date_received');
            $table->dateTime('date_required')->nullable();
            $table->string('customer_purchase_order', 15)->nullable();
            $table->string('customer_packing_list', 15)->nullable();
            $table->decimal('quantity', 10, 2)->nullable()->default(0.00);
            $table->string('unit_code', 10)->nullable();
            $table->decimal('quantity_shipped', 10, 2)->nullable()->default(0.00);
            $table->integer('our_last_packing_list')->nullable()->index('our_last_packing_list');
            $table->string('destination_code', 10)->nullable()->default('same');
            $table->string('carrier_code', 10)->nullable();
            $table->string('freight_code', 10)->nullable();
            $table->dateTime('date_shipped')->nullable();
            $table->decimal('shipped_amount', 10, 2)->nullable()->index('shipped_amount');
            $table->decimal('inventory_amount', 10, 2)->nullable()->index('inventory_amount');
            $table->integer('invoice_number')->nullable()->default(0)->index('invoice_number');
            $table->dateTime('invoice_date')->nullable()->index('invoice_date');
            $table->decimal('invoice_amount', 10, 2)->nullable()->index('invoice_amount');
            $table->integer('priority')->default(0);
            $table->boolean('rework')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('started')->default(0);
            $table->boolean('completed')->default(0);
            $table->boolean('shipped')->default(0);
            $table->boolean('cod')->default(0);
            $table->boolean('invoiced')->default(0);
            $table->text('note')->nullable();
            $table->integer('id')->primary();
            $table->boolean('printed')->nullable()->default(0)->index('printed');
            $table->integer('image_count')->nullable()->default(0);
            $table->string('session_id', 228)->nullable();
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
        Schema::dropIfExists('sft_work_orders');
    }
}
