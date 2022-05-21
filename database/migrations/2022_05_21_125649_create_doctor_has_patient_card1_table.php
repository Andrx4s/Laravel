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
        Schema::create('doctor_has_patient_card1', function (Blueprint $table) {
            $table->foreignId('Doctor_id_Doctor');
            $table->foreign('Doctor_id_Doctor')->references('id')->on('doctor');
            $table->foreignId('Patient_card_id_Patient_card');
            $table->foreign('Patient_card_id_Patient_card')->references('id_Patient')->on('patient_card');
            $table->foreignId('Department_and_Head_id');
            $table->foreign('Department_and_Head_id')->references('Department_Head')->on('department_and_head_department_id');
            $table->foreignId('History_and_additions_id');
            $table->foreign('History_and_additions_id')->references('id_History_and_additions')->on('history_and_additions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_has_patient_card1');
    }
};
