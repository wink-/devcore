<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValueActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormValueAction', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 10)->default('Action');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->boolean('Action1')->default(0);
            $table->boolean('Action2')->default(0);
            $table->boolean('Action3')->default(0);
            $table->boolean('Action4')->default(0);
            $table->boolean('Action5')->default(0);
            $table->boolean('Action6')->default(0);
            $table->boolean('Action7')->default(0);
            $table->boolean('Action8')->default(0);
            $table->boolean('Action9')->default(0);
            $table->boolean('Action10')->default(0);
            $table->boolean('Action11')->default(0);
            $table->boolean('Action12')->default(0);
            $table->boolean('Action13')->default(0);
            $table->boolean('Action14')->default(0);
            $table->boolean('Action15')->default(0);
            $table->boolean('Action16')->default(0);
            $table->boolean('Action17')->default(0);
            $table->boolean('Action18')->default(0);
            $table->boolean('Action19')->default(0);
            $table->boolean('Action20')->default(0);
            $table->boolean('Tank')->default(0);
            $table->timestamp('TimeStamp')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FormValueAction');
    }
}
