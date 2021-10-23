<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoUserSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_user_settings', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->unique('user_id');
            $table->integer('employee_id')->nullable();
            $table->string('user_code', 10)->unique('user_code');
            $table->string('user', 228)->nullable();
            $table->string('title', 228)->nullable();
            $table->string('email', 228)->nullable();
            $table->boolean('production')->default(0);
            $table->boolean('supervisor')->default(0);
            $table->boolean('entering')->default(0);
            $table->boolean('lab')->default(0);
            $table->boolean('quality')->default(0);
            $table->boolean('shipping')->default(0);
            $table->boolean('quoting')->default(0);
            $table->boolean('pricing')->default(0);
            $table->boolean('billing')->default(0);
            $table->boolean('administrator')->default(0);
            $table->string('print_session_id', 228)->nullable();
            $table->string('work_order_printer', 228)->nullable();
            $table->integer('last_work_order_number_to_print')->nullable();
            $table->integer('last_work_order_printed')->nullable();
            $table->text('print_work_order_numbers')->nullable();
            $table->boolean('print_work_orders')->nullable()->default(0);
            $table->string('tag_printer', 228)->nullable();
            $table->integer('last_tag_number_to_print')->nullable();
            $table->integer('last_tag_printed')->nullable();
            $table->text('print_tag_numbers')->nullable();
            $table->boolean('print_tags')->nullable()->default(0);
            $table->string('packing_list_printer', 228)->nullable();
            $table->integer('last_packing_list_number_to_print')->nullable();
            $table->integer('last_packing_list_printed')->nullable();
            $table->text('print_packing_list_numbers')->nullable();
            $table->boolean('print_packing_lists')->nullable()->default(0);
            $table->string('invoice_printer', 228)->nullable();
            $table->text('email_invoice_numbers')->nullable();
            $table->text('print_invoice_numbers')->nullable();
            $table->text('email_archived_invoice_numbers')->nullable();
            $table->text('print_archived_invoice_numbers')->nullable();
            $table->text('email_quote_numbers')->nullable();
            $table->mediumText('note')->nullable();
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
        Schema::dropIfExists('eo_user_settings');
    }
}
