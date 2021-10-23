<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftWorkGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_work_groups', function (Blueprint $table) {
            $table->string('name', 228)->nullable();
            $table->string('process_code', 10)->nullable()->index('process_code');
            $table->string('method_code', 10)->nullable()->index('method_code');
            $table->boolean('method_default')->default(0)->index('method_default');
            $table->string('step_code', 10)->nullable();
            $table->integer('id')->primary();
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
        Schema::dropIfExists('sft_work_groups');
    }
}
