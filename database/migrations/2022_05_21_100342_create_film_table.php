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
        Schema::create('film', function (Blueprint $table) {
            $table->id('film_id');
            $table->string('title');
            $table->text('description');
            $table->year('release_year');
            $table->tinyInteger('language_id');
            $table->tinyInteger('original_language_id');
            $table->tinyInteger('rental_duration');
            $table->decimal('rental_rate', $precision = 4, $scale = 2);
            $table->smallInteger('length');
            $table->decimal('replacement_cost', $precision = 5, $scale = 2);
            $table->enum('rating',[]);
            $table->set('special_features',[]);
            $table->timestamp('lat_update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
};
