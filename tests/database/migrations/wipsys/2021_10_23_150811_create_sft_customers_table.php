<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_customers', function (Blueprint $table) {
            $table->string('code', 10)->nullable()->unique('code');
            $table->string('name', 228)->nullable()->index('name');
            $table->string('physical_address', 228)->nullable();
            $table->string('address_extension', 228)->nullable();
            $table->string('city', 228)->nullable();
            $table->char('state', 2)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('destination_code', 10)->nullable();
            $table->integer('packing_list_copies')->default(2);
            $table->integer('carrier_id')->nullable();
            $table->string('carrier_code', 10)->nullable();
            $table->string('CONTACT1', 25)->nullable();
            $table->string('company_phone', 13)->nullable();
            $table->string('EXTENSION1', 4)->nullable();
            $table->string('CONTACT2', 25)->nullable();
            $table->string('PHONE2', 13)->nullable();
            $table->string('EXTENSION2', 4)->nullable();
            $table->string('fax', 13)->nullable();
            $table->string('email', 228)->nullable();
            $table->text('invoice_emails')->nullable();
            $table->boolean('cod')->nullable()->default(0);
            $table->boolean('minimum_line_charge_by_order')->nullable()->default(0);
            $table->boolean('minimum_line_charge_by_day')->nullable()->default(0);
            $table->string('tax_id', 228)->nullable();
            $table->text('note')->nullable();
            $table->integer('id')->primary();
            $table->string('billing_address', 228)->nullable();
            $table->string('billing_city', 191)->nullable();
            $table->string('billing_state', 191)->nullable();
            $table->string('billing_zip', 191)->nullable();
            $table->string('billing_phone', 191)->nullable();
            $table->string('billing_fax', 191)->nullable();
            $table->string('billing_email', 191)->nullable();
            $table->integer('ship_to_address_id')->nullable();
            $table->string('ship_to_address_code', 10)->nullable();
            $table->string('ship_to_address', 191)->nullable();
            $table->string('ship_to_city', 191)->nullable();
            $table->string('ship_to_state', 191)->nullable();
            $table->string('ship_to_zip', 191)->nullable();
            $table->string('ship_to_phone', 191)->nullable();
            $table->string('ship_to_fax', 191)->nullable();
            $table->string('ship_to_email', 191)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('archive')->default(0);
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
        Schema::dropIfExists('sft_customers');
    }
}
