<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_invoices', function (Blueprint $table) {
            $table->integer('number')->nullable()->unique('number');
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->string('customer_purchase_order', 228)->nullable()->index('customer_purchase_order');
            $table->dateTime('date')->nullable()->index('date');
            $table->text('note')->nullable();
            $table->text('emails')->nullable();
            $table->integer('id')->primary();
            $table->boolean('printed')->nullable()->default(0)->index('printed');
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
        Schema::dropIfExists('eo_invoices');
    }
}
