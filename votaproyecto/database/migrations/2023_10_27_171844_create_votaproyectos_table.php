<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('votaproyectos', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            //agrego columna con la ip
            $table->ipAddress('ip_address');
            //agrego columna que identifica a qué proyecto se ha votado   
            $table->string('nombre_proyecto');
            $table->unsignedBigInteger('id_proyecto');
            $table->foreign('id_proyecto')->references('id')->on('proyectos');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};