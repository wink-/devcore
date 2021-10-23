<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoPackingListsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_packing_lists_detail', function (Blueprint $table) {
            $table->integer('packing_list_number')->index('packing_list_number');
            $table->integer('tag_number')->index('tag_number');
            $table->integer('work_order_number')->index('work_order_number');
            $table->integer('part_id')->nullable()->index('part_id');
            $table->string('part_number', 228)->nullable();
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->string('destination_code', 10)->nullable()->index('destination_code');
            $table->string('process_code', 10)->nullable()->index('process_code');
            $table->string('method_code', 10)->nullable()->index('method_code');
            $table->string('customer_packing_list', 15)->nullable()->index('customer_packing_list');
            $table->string('customer_purchase_order', 15)->nullable()->index('customer_purchase_order');
            $table->string('customer_number', 228)->nullable();
            $table->integer('certification_number')->nullable()->index('certification_number');
            $table->tinyInteger('certify')->nullable();
            $table->decimal('tag_quantity', 10, 2)->nullable()->default(0.00);
            $table->decimal('tag_quantity_shipped', 10, 2)->nullable()->default(0.00);
            $table->decimal('quantity', 10, 2)->nullable();
            $table->decimal('shipped_amount', 10, 2)->nullable()->index('shipped_amount');
            $table->dateTime('packing_list_date')->nullable()->index('packing_list_date');
            $table->dateTime('date_received')->nullable()->index('date_received');
            $table->integer('id')->primary();
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
        Schema::dropIfExists('eo_packing_lists_detail');
    }
}
