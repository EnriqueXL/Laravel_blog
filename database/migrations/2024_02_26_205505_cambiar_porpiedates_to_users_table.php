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
        Schema::table('nombre_de_tu_tabla', function (Blueprint $table) {
            // cambiar campos nulleables y cambiamos el maximo permitido
            $table->string('nombre_de_columna', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nombre_de_tu_tabla', function (Blueprint $table) {
            $table->string('nombre_de_columna', 255)->nullable(false)->change();
        });
    }
};
