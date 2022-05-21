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
        Schema::create('history_and_additions', function (Blueprint $table) {
            $table->id('id_History_and_additions');
            $table->foreign('Disease_history_id_Disease_history')->references('id_Disease_history')->on('disease_history');
            $table->foreign('Medicines_Medicines')->references('Medicines')->on('medicines');
            $table->foreign('Mode_id_Mode')->references('id_Mode')->on('mode');
            $table->foreign('Diagnosis_id_Diagnosis')->references('id_Diagnosis')->on('diagnosis');
            $table->foreign('Manipulations_of_medical_personnel_id_Manipulations_of_medical_personal')->references('id_Manipulations_of_medical_personal')->on('manipulations_of_medical_personnel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_and_additions');
    }
};
