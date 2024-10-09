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
    Schema::create('productos', function (Blueprint $table) {
        $table->id('id_producto');
        $table->unsignedBigInteger('id_remate');
        $table->string('nombre', 20);
        $table->string('descripcion', 20);
        $table->decimal('precio_base', 8, 2);
        $table->integer('estado');
        $table->date('fecha_de_solicitud')->nullable();
        $table->string('imagen_URL', 255)->nullable();
        $table->unsignedBigInteger('id_usuario');  // El usuario que publica el producto

        $table->foreign('id_remate')->references('id_remates')->on('remates')->onDelete('no action')->onUpdate('cascade');
        $table->foreign('id_usuario')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
