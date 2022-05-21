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
        Schema::create('head_department', function (Blueprint $table) {
            $table->id();
            $table->string('License');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('Mname');
            $table->date('Issue');
            $table->string('Residence_address');
            $table->string('Phone_number');
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
        Schema::dropIfExists('_head_department');
    }
};
