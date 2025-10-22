<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta la migración.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('nombre'); // Nombre del producto
            $table->decimal('precio', 10, 2); // Precio con dos decimales
            $table->integer('stock'); // Cantidad en inventario
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade'); // Relación con categoría
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Revierte la migración.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
