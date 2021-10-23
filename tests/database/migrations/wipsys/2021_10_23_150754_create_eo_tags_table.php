<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_tags', function (Blueprint $table) {
            $table->integer('number')->nullable()->unique('number');
            $table->integer('work_order_number')->nullable()->index('work_order_number');
            $table->decimal('quantity', 10, 2)->nullable();
            $table->decimal('quantity_shipped', 10, 2)->nullable();
            $table->boolean('shipped')->nullable()->default(0);
            $table->dateTime('date_received')->nullable();
            $table->text('note')->nullable();
            $table->integer('ordinal')->nullable()->default(1);
            $table->string('container', 228)->nullable();
            $table->integer('id')->primary();
            $table->boolean('printed')->nullable()->default(0)->index('printed');
            $table->string('session_id', 228)->nullable()->index('session_id');
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
        Schema::dropIfExists('eo_tags');
    }
}
