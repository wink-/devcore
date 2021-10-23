<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_system', function (Blueprint $table) {
            $table->string('company_name', 228)->nullable();
            $table->string('export_path', 228)->nullable();
            $table->integer('current_work_order')->nullable();
            $table->integer('last_work_order_number')->nullable();
            $table->integer('last_work_order_number_to_print')->nullable();
            $table->integer('last_work_order_printed')->nullable();
            $table->text('print_work_order_numbers')->nullable();
            $table->boolean('print_work_orders')->nullable()->default(0);
            $table->integer('last_tag_number')->nullable();
            $table->integer('last_tag_number_to_print')->nullable();
            $table->integer('last_tag_printed')->nullable();
            $table->text('print_tag_numbers')->nullable();
            $table->boolean('print_tags')->nullable()->default(0);
            $table->integer('last_packing_list_number')->nullable();
            $table->integer('last_packing_list_number_to_print')->nullable();
            $table->integer('last_packing_list_printed')->nullable();
            $table->boolean('print_packing_lists')->nullable()->default(0);
            $table->integer('last_certification_number')->nullable();
            $table->integer('last_invoice_number')->nullable();
            $table->text('email_invoice_numbers')->nullable();
            $table->text('print_invoice_numbers')->nullable();
            $table->text('email_archived_invoice_numbers')->nullable();
            $table->text('print_archived_invoice_numbers')->nullable();
            $table->string('image_server', 228)->nullable();
            $table->string('image_folder', 228)->nullable();
            $table->string('work_order_image_category', 228)->nullable();
            $table->string('part_image_category', 228)->nullable();
            $table->string('address', 228)->nullable();
            $table->string('city', 228)->nullable();
            $table->char('state', 2)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('phone', 13)->nullable();
            $table->string('fax', 13)->nullable();
            $table->string('email', 228)->nullable();
            $table->string('website_url', 228)->nullable();
            $table->string('ups_account_number', 228)->nullable();
            $table->integer('refresh_delay')->nullable();
            $table->integer('shut_down_delay')->nullable();
            $table->string('work_order_crud_caption', 228)->nullable();
            $table->integer('id')->default(0)->primary();
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
        Schema::dropIfExists('eo_system');
    }
}
