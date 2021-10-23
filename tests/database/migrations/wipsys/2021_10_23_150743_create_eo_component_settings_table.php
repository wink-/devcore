<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoComponentSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_component_settings', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('component_name', 228)->nullable()->index('name');
            $table->string('email', 228)->nullable()->index('user_email');
            $table->text('settings')->nullable();
            $table->boolean('archive')->default(0);
            $table->bigInteger('revision')->nullable();
            $table->string('session_id', 228)->nullable()->index('session_id');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eo_component_settings');
    }
}
