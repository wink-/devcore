<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlutoUserActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pluto_user_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action', 191);
            $table->string('action_model', 191)->nullable();
            $table->integer('action_id')->nullable();
            $table->timestamps();
            $table->unsignedInteger('user_id')->nullable()->index('179975_5b3a4daeded47');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pluto_user_actions');
    }
}
