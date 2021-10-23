<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_contacts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('customer_code', 10)->nullable()->index('customer_code');
            $table->integer('customer_id')->nullable();
            $table->string('customer_name', 191)->nullable();
            $table->string('first_name', 191)->nullable()->index('first_name');
            $table->string('last_name', 191)->nullable()->index('last_name');
            $table->string('phone', 191)->nullable();
            $table->string('extension', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->text('quote_emails')->nullable();
            $table->boolean('email_quote_print')->nullable()->default(0);
            $table->string('cell', 191)->nullable();
            $table->string('fax', 191)->nullable();
            $table->boolean('archive')->nullable()->default(0);
            $table->bigInteger('revision')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_contacts');
    }
}
