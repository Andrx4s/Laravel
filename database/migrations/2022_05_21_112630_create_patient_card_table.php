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
        Schema::create('patient_card', function (Blueprint $table) {
            $table->id('id_Patient_card');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('Mname');
            $table->date('DOB');
            $table->string('Gender');
            $table->float('Weight_(kg)');
            $table->integer('Growth_(cm)');
            $table->string('Group_primary_accounting');
            $table->string('Allergies_to_medications');
            $table->string('Residence_address');
            $table->string('Phone_number');
            $table->string('Passport');
            $table->integer('Identification_code');
            $table->string('Place_of_work');
            $table->integer('Identification_code');
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
        Schema::dropIfExists('_patient_card');
    }
};
