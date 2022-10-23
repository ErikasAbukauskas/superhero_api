<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('character_id')->constrained('characters')->onDelete('cascade');
            // $table->foreignId('image_id')->constrained('images')->onDelete('cascade');
            $table->string('alignment');//checkbox good or bad
            $table->string('height');
            $table->string('weight');
            $table->string('aliases')->unique();
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
        Schema::dropIfExists('heroes');
    }
}
