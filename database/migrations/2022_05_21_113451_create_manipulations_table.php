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
        Schema::create('manipulations', function (Blueprint $table) {
            $table->id('id_Manipulations');
            $table->string('Name');
            $table->date('DOB');
            $table->date('Wasted_time');
            $table->float('Cost');
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
        Schema::dropIfExists('manipulations');
    }
};
