<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSftEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_employees', function (Blueprint $table) {
            $table->string('code', 10)->nullable()->unique('code');
            $table->string('name', 228)->nullable();
            //$table->mediumblob('signature')->nullable();
            $table->string('pin', 228)->default('')->index('pin');
            $table->boolean('production')->default(0);
            $table->boolean('supervisor')->default(0);
            $table->mediumText('note')->nullable();
            $table->integer('id')->primary();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision')->nullable();
        });
        // once the table is created use a raw query to ALTER it and add the MEDIUMBLOB
        DB::statement("ALTER TABLE sft_employees ADD `signature` MEDIUMBLOB");        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sft_employees');
    }
}
