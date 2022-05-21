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
        Schema::create('nurse', function (Blueprint $table) {
            $table->id('id_Nurse');
            $table->string('License');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('Mname');
            $table->date('DOB');
            $table->string('Gender');
            $table->string('Residence_address');
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
        Schema::dropIfExists('nurse');
    }
};
