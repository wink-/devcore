<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftPackingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_packing_lists', function (Blueprint $table) {
            $table->integer('number')->nullable()->unique('number');
            $table->dateTime('date')->nullable()->index('date');
            $table->string('employee_code', 10)->nullable()->index('employee_code');
            $table->string('user_code', 10)->nullable()->index('user_code');
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->string('destination_code', 10)->nullable()->index('destination_code');
            $table->string('carrier_code', 10)->nullable()->index('carrier_code');
            $table->string('freight_code', 10)->nullable()->index('freight_code');
            $table->string('customer_purchase_order', 228)->nullable()->index('customer_purchase_order');
            $table->boolean('cod')->default(0);
            $table->dateTime('date_received')->nullable()->index('date_received');
            $table->integer('id')->primary();
            $table->boolean('printed')->nullable()->default(0)->index('printed');
            $table->string('session_id', 228)->nullable()->index();
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
        Schema::dropIfExists('sft_packing_lists');
    }
}
