<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_queries', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 228)->nullable()->unique('name');
            $table->string('description', 228)->nullable();
            $table->string('model', 228)->nullable();
            $table->string('label', 228)->nullable();
            $table->boolean('query_date')->default(0);
            $table->text('query')->nullable();
            $table->text('definition')->nullable();
            $table->string('value1', 228)->nullable();
            $table->string('value2', 228)->nullable();
            $table->string('value3', 228)->nullable();
            $table->string('value4', 228)->nullable();
            $table->string('value5', 228)->nullable();
            $table->date('date1')->nullable();
            $table->date('date2')->nullable();
            $table->date('date3')->nullable();
            $table->date('date4')->nullable();
            $table->integer('page_size')->default(30);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eo_queries');
    }
}
