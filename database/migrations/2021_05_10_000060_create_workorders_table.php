<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkordersTable extends Migration
{
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number')->nullable();
            $table->string('customer_code');
            $table->string('part_number')->nullable();
            $table->string('process_code')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('price_code')->nullable();
            $table->date('date_received')->nullable();
            $table->date('date_required')->nullable();
            $table->string('customer_purchase_order')->nullable();
            $table->string('customer_packing_list')->nullable();
            $table->string('quantity');
            $table->string('unit_code')->nullable();
            $table->string('quantity_shipped')->nullable();
            $table->integer('our_last_packing_list')->nullable();
            $table->string('destination_code')->nullable();
            $table->string('carrier_code')->nullable();
            $table->string('freight_code')->nullable();
            $table->date('date_shipped')->nullable();
            $table->string('invoice_number')->nullable();
            $table->date('invoice_date')->nullable();
            $table->decimal('invoice_amount', 15, 2)->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('rework')->default(0)->nullable();
            $table->boolean('hot')->default(0)->nullable();
            $table->boolean('started')->default(0)->nullable();
            $table->boolean('completed')->default(0)->nullable();
            $table->boolean('shipped')->default(0)->nullable();
            $table->boolean('cod')->default(0)->nullable();
            $table->boolean('invoiced')->default(0)->nullable();
            $table->longText('note')->nullable();
            $table->integer('image_count')->nullable();
            $table->string('session')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->boolean('printed')->default(0)->nullable();
            $table->timestamps();
        });
    }
}
