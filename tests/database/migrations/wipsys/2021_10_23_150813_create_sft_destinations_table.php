<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_destinations', function (Blueprint $table) {
            $table->string('code', 10)->nullable()->unique('code');
            $table->string('name', 228)->nullable();
            $table->string('physical_address', 228)->nullable();
            $table->string('address_extension', 228)->nullable();
            $table->string('city', 228)->nullable();
            $table->char('state', 2)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('customer_code', 10)->nullable();
            $table->string('CONTACT1', 25)->nullable();
            $table->string('company_phone', 13)->nullable();
            $table->string('PHONE1', 13)->nullable();
            $table->string('EXTENSION1', 4)->nullable();
            $table->string('CONTACT2', 25)->nullable();
            $table->string('PHONE2', 13)->nullable();
            $table->string('EXTENSION2', 4)->nullable();
            $table->string('fax', 13)->nullable();
            $table->string('email', 228)->nullable();
            $table->text('note')->nullable();
            $table->integer('id')->primary();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
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
        Schema::dropIfExists('sft_destinations');
    }
}
