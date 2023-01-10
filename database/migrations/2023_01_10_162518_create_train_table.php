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
        Schema::create('train', function (Blueprint $table) {

            $table->id();

            $table->string('company', 25);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->date('departure_time');
            $table->date('arrival_time');
            $table->integer('train_id');
            $table->tinyInteger('train_coach');
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(0);

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
        Schema::dropIfExists('train');
    }
};
