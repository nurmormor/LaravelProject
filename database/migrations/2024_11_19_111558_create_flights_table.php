<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('avión');
            $table->string('origen');
            $table->string('destino');
            $table->string('duracion');
            $table->string('precio');
            $table->enum('asientos', ['1ª clase', '2ª clase', 'turista'])->default('turista');
            $table->datetime('fecha');
            $table->enum('estado', ['borrador', 'en espera', 'completo', 'en trayecto'])->default('borrador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
