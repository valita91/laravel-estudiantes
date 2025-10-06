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
        Schema::create('estudiantes', function (Blueprint $table) {
        $table->id();                           // id automático
        $table->string('nombre', 100);          // texto corto para nombre
        $table->string('apellido', 100);        // texto corto para apellido
        $table->string('telefono', 30)->nullable(); // puede quedar vacío
        $table->date('fecha_inscripcion');      // formato fecha
        $table->timestamps();                   // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
