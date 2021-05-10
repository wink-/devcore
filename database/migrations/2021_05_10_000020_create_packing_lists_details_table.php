<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackingListsDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('packing_lists_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('packing_list_number')->nullable();
            $table->integer('tag_number')->nullable();
            $table->integer('work_order_number')->nullable();
            $table->integer('part')->nullable();
            $table->string('part_number')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('destination_code')->nullable();
            $table->string('process_code')->nullable();
            $table->string('method_code')->nullable();
            $table->string('customer_packing_list')->nullable();
            $table->string('customer_purchase_order')->nullable();
            $table->integer('certification_number')->nullable();
            $table->boolean('certify')->default(0)->nullable();
            $table->float('tag_quantity', 10, 2)->nullable();
            $table->float('tag_quantity_shipped', 10, 2)->nullable();
            $table->float('quantity', 10, 2)->nullable();
            $table->float('shipped_amount', 10, 2)->nullable();
            $table->date('packing_list_date')->nullable();
            $table->date('date_received')->nullable();
            $table->string('session')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->timestamps();
        });
    }
}
