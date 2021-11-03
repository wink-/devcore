<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('physical_address')->nullable();
            $table->string('address_extension')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('destination_code')->nullable();
            $table->integer('packing_list_copies')->nullable();
            $table->string('CONTACT1')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('EXTENSION1')->nullable();
            $table->string('CONTACT2')->nullable();
            $table->string('PHONE2')->nullable();
            $table->string('EXTENSION2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('invoice_emails')->nullable();
            $table->boolean('cod')->default(0)->nullable();
            $table->string('tax_id')->nullable();
            $table->longText('note')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_fax')->nullable();
            $table->string('billing_email')->nullable();
            $table->integer('ship_to_addressid')->nullable();
            $table->string('ship_to_address_code')->nullable();
            $table->string('ship_to_address')->nullable();
            $table->string('ship_to_city')->nullable();
            $table->string('ship_to_state')->nullable();
            $table->string('ship_to_zip')->nullable();
            $table->string('ship_to_phone')->nullable();
            $table->string('ship_to_fax')->nullable();
            $table->string('ship_to_email')->nullable();
            $table->boolean('archive')->default(0)->nullable();
            $table->integer('revision')->nullable();
            $table->string('carrier_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
