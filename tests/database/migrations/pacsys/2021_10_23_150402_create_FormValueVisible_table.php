<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValueVisibleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormValueVisible', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name', 10)->default('Visible');
            $table->string('FormName', 15)->nullable()->index('FormName');
            $table->boolean('Visible1')->default(0);
            $table->boolean('Visible2')->default(0);
            $table->boolean('Visible3')->default(0);
            $table->boolean('Visible4')->default(0);
            $table->boolean('Visible5')->default(0);
            $table->boolean('Visible6')->default(0);
            $table->boolean('Visible7')->default(0);
            $table->boolean('Visible8')->default(0);
            $table->boolean('Visible9')->default(0);
            $table->boolean('Visible10')->default(0);
            $table->boolean('Visible11')->default(0);
            $table->boolean('Visible12')->default(0);
            $table->boolean('Visible13')->default(0);
            $table->boolean('Visible14')->default(0);
            $table->boolean('Visible15')->default(0);
            $table->boolean('Visible16')->default(0);
            $table->boolean('Visible17')->default(0);
            $table->boolean('Visible18')->default(0);
            $table->boolean('Visible19')->default(0);
            $table->boolean('Visible20')->default(0);
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
        Schema::dropIfExists('FormValueVisible');
    }
}
