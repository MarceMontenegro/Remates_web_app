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
        Schema::create('remates', function (Blueprint $table) {
            $table->id('id_remates');
            $table->string('nombre', 20);
            $table->string('descripcion', 255);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->tinyInteger('estado')->default(0); // Estado: 0 = Pendiente, 1 = Activo, 2 = Finalizado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('remates', function (Blueprint $table) {
            $table->dropColumn('estado');
        });
    }
};
