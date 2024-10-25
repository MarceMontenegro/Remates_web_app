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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id('id_oferta'); // Cambiado a id_oferta para mayor claridad
            $table->decimal('monto', 10, 2); // Aumentado el tamaño
            $table->string('nombre_completo'); // Agregado el campo nombre_completo
            $table->string('pais'); // Agregado el campo pais
            $table->string('provincia'); // Agregado el campo provincia
            $table->string('ciudad'); // Agregado el campo ciudad
            $table->string('dni'); // Agregado el campo dni
            $table->string('cuil'); // Agregado el campo cuil
            $table->string('metodo_pago'); // Agregado el campo metodo_pago
            $table->string('telefono'); // Agregado el campo telefono
            $table->string('direccion'); // Agregado el campo direccion
            $table->string('codigo_postal'); // Agregado el campo codigo_postal
            $table->tinyInteger('estado')->default(0); // Estado: 0 = Pendiente, 1 = Activo, 2 = Finalizado

            $table->unsignedBigInteger('id_usuario');  // El usuario que realiza la oferta
            $table->unsignedBigInteger('producto'); // Relacionado con el producto
            $table->unsignedBigInteger('id_remate'); // Relacionado con el remate

            // Definición de las claves foráneas
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('producto')->references('id_producto')->on('productos')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('id_remate')->references('id_remates')->on('remates')->onDelete('no action')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
