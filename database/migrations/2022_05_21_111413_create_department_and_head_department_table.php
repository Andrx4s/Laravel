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
        Schema::create('department_and_head_department', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Head_department_id_Head_department');
            $table->foreign('Head_department_id_Head_department')->references('id')->on('head_department');
            $table->foreignId('Department');
            $table->foreign('Department')->references('id_Department')->on('department');
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
        Schema::dropIfExists('_department_and__head_department');
    }
};
