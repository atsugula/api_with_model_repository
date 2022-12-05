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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('consecutive');
            $table->unsignedBigInteger('monitor_id');
            $table->unsignedBigInteger('cultural_right_id');
            $table->unsignedBigInteger('nac_id');
            $table->date('activity_date');
            $table->string('start_time')->format('g:i A');
            $table->string('final_hour')->format('g:i A');
            $table->unsignedBigInteger('expertise_id');
            $table->timestamp('fecha_db');
            // Declarar las relaciones con las tablas
            $table->foreign('monitor_id')->references('id')->on('monitors');
            $table->foreign('cultural_right_id')->references('id')->on('cultural_rights');
            $table->foreign('nac_id')->references('id')->on('nacs');
            $table->foreign('expertise_id')->references('id')->on('expertises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
