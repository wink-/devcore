<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlutoCorrectiveActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pluto_corrective_actions', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('discrepant_material_id')->nullable()->index('FK_corrective_actions_discrepant_material');
            $table->text('description_of_non_conformance')->nullable();
            $table->text('containment')->nullable();
            $table->text('interim_action')->nullable();
            $table->text('preventative_action')->nullable();
            $table->text('root_cause')->nullable();
            $table->text('verification')->nullable();
            $table->boolean('complete')->nullable()->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pluto_corrective_actions');
    }
}
