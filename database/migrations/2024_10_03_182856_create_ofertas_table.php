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
        $table->id('id_ofertas');
        $table->decimal('monto', 8, 2);
        $table->unsignedBigInteger('id_usuario');  // El usuario que realiza la oferta
        $table->unsignedBigInteger('producto');
        $table->unsignedBigInteger('id_remate');

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
