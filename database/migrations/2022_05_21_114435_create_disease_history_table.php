<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_history', function (Blueprint $table) {
            $table->id('id_Disease_history');
            $table->text('Analyzes_results');
            $table->text('Survey_result');
            $table->string('Patient_status');
            $table->string('№_Temporary_disability');
            $table->string('Results_of_treatment');
            $table->text('Destination');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_history');
    }
};
