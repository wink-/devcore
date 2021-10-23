<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftCustomersBakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_customers_bak', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('CUSTCODE', 10)->nullable()->index('CUSTCODE');
            $table->string('CUSTNAME', 40)->nullable();
            $table->string('ADDRESS1', 40)->nullable();
            $table->string('ADDRESS2', 40)->nullable();
            $table->string('ADDRESS3', 40)->nullable();
            $table->string('city')->nullable();
            $table->char('state', 2)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('SHIPTO', 10)->default('Same');
            $table->integer('destination_id')->nullable();
            $table->string('SHIPVIA', 5)->default('0');
            $table->integer('carrier_id')->nullable();
            $table->string('DEFFREIGHT', 10)->nullable()->default('');
            $table->string('CONTACT1', 25)->nullable()->default('');
            $table->string('PHONE1', 13)->nullable()->default('');
            $table->string('EXTENSION1', 4)->nullable()->default('');
            $table->string('CONTACT2', 25)->nullable()->default('');
            $table->string('PHONE2', 13)->nullable()->default('');
            $table->string('EXTENSION2', 4)->nullable()->default('');
            $table->string('fax', 13)->nullable();
            $table->string('email', 50)->nullable();
            $table->boolean('cod')->default(0);
            $table->string('TAXIDEN', 12)->nullable()->default('');
            $table->text('remarks')->nullable();
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_customers_bak');
    }
}
