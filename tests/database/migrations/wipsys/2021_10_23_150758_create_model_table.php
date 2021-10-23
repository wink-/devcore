<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('number')->nullable();
            $table->string('customer_code', 10)->nullable();
            $table->bigInteger('part_id')->nullable();
            $table->string('part_number', 228)->nullable();
            $table->string('process_code', 10)->nullable();
            $table->decimal('quantity', 10, 2)->nullable();
            $table->string('unit_code', 10)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('price_code', 10)->nullable();
            $table->dateTime('date_received')->nullable();
            $table->dateTime('date_required')->nullable();
            $table->string('customer_purchase_order', 15)->nullable();
            $table->string('customer_packing_list', 15)->nullable();
            $table->decimal('quantity_shipped', 10, 2)->nullable();
            $table->bigInteger('our_last_packing_list')->nullable();
            $table->dateTime('date_shipped')->nullable();
            $table->string('destination_code', 10)->nullable();
            $table->string('carrier_code', 10)->nullable();
            $table->string('freight_code', 10)->nullable();
            $table->bigInteger('invoice_number')->nullable();
            $table->dateTime('invoice_date')->nullable();
            $table->decimal('invoice_amount', 10, 2)->nullable();
            $table->bigInteger('priority')->nullable();
            $table->tinyInteger('rework')->nullable();
            $table->tinyInteger('hot')->nullable();
            $table->tinyInteger('started')->nullable();
            $table->tinyInteger('completed')->nullable();
            $table->tinyInteger('shipped')->nullable();
            $table->tinyInteger('invoiced')->nullable();
            $table->tinyInteger('cod')->nullable();
            $table->text('note')->nullable();
            $table->string('description', 228)->nullable();
            $table->string('method_code', 10)->nullable();
            $table->tinyInteger('bake')->nullable();
            $table->tinyInteger('certify')->nullable();
            $table->string('specification', 228)->nullable();
            $table->string('material_name', 228)->nullable();
            $table->decimal('thickness_minimum', 10, 6)->nullable();
            $table->decimal('thickness_maximum', 10, 6)->nullable();
            $table->string('thickness_unit_code', 10)->nullable();
            $table->text('part_note')->nullable();
            $table->text('special_requirement')->nullable();
            $table->bigInteger('quote_id')->nullable();
            $table->string('process_name', 228)->nullable();
            $table->string('customer_name', 228)->nullable();
            $table->string('customer_address', 228)->nullable();
            $table->string('customer_address_extension', 228)->nullable();
            $table->string('customer_city', 228)->nullable();
            $table->string('customer_state', 2)->nullable();
            $table->string('customer_zip', 10)->nullable();
            $table->string('customer_phone', 13)->nullable();
            $table->string('customer_fax', 13)->nullable();
            $table->string('session_id', 228)->nullable();
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
        Schema::dropIfExists('model');
    }
}
