<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_sessions', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('session_id', 228)->nullable()->index('session_id');
            $table->text('jwt')->nullable();
            $table->boolean('active')->default(0)->index('active');
            $table->longText('key_strokes')->nullable();
            $table->string('user_id', 10)->nullable()->index('user_id');
            $table->string('user_code', 10)->nullable()->index('user_code');
            $table->string('user', 228)->nullable()->index('user');
            $table->string('email', 228)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->bigInteger('revision')->index('revision');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eo_sessions');
    }
}
