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
        Schema::create('manipulations_of_medical_personnel', function (Blueprint $table) {
            $table->id('id_Manipulations_of_medical_personal');
            $table->foreign('Doctor_id_Doctor')->references('id_Doctor')->on('doctor');
            $table->foreign('Nurse_id_Nurse')->references('id_Nurse')->on('nurse');
            $table->foreign('Patient_card_id_Patient_card')->references('id_Patient_card')->on('patient_card');
            $table->foreign('Nurse_id_Nurse')->references('id_Nurse')->on('nurse');
            $table->foreign('Manipulations_id_Manipulations')->references('id_Manipulations')->on('manipulations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manipulations_of_medical_personnel');
    }
};
