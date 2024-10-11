@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <center><h1>Centro de Ayuda</h1></center>
@stop

@section('content')
    <div class="container">
        

        <p><strong>¿Quiénes somos?</strong></p>
        <p>Somos una empresa dedicada a facilitar la compra y venta de bienes a través de subastas públicas y privadas. Con años de experiencia en el mercado de remates, ofrecemos una plataforma transparente y segura para que compradores y vendedores realicen sus transacciones de manera eficiente y satisfactoria.</p>

        <h4>Preguntas Frecuentes</h4>

        <p><strong>¿Cómo funciona una subasta en nuestra plataforma?</strong></p>
        <p>Nuestras subastas permiten a los usuarios pujar por los bienes de su interés. Una vez que el remate alcanza la fecha de cierre, el participante con la mayor oferta se adjudica el bien. Todas las subastas se realizan de forma transparente y con seguimiento en tiempo real.</p>

        <p><strong>¿Cómo puedo participar en una subasta?</strong></p>
        <p>Para participar, solo necesitas registrarte en nuestra plataforma, verificar tu cuenta y elegir la subasta de tu interés. Podrás seguir las subastas activas y pujar de manera segura y rápida.</p>

        <p><strong>¿Qué tipos de productos se pueden encontrar en nuestras subastas?</strong></p>
        <p>Ofrecemos una amplia variedad de productos en nuestras subastas, incluyendo bienes inmuebles, vehículos, obras de arte, maquinaria y otros artículos de valor. Contamos con categorías especializadas para que encuentres lo que buscas de manera sencilla.</p>

        <p><strong>¿Cómo recibo asistencia si tengo problemas?</strong></p>
        <p>Nuestro equipo de soporte está disponible para ayudarte en todo el proceso de subasta, desde la inscripción hasta el cierre de la compra. Si tienes preguntas, puedes comunicarte con nosotros a través de los canales disponibles en nuestra página o visitar nuestra sección de <a href="#">Centro de Ayuda</a> donde respondemos las preguntas más comunes.</p>

        <h4>Contacto</h4>
        <p>Para más información o ayuda específica, no dudes en comunicarte con nosotros. Estamos aquí para hacer de tu experiencia en las subastas un proceso sencillo y seguro.</p>
    </div>
@stop

@section('footer')
    <footer class="text-center" style="background-color: #f1f1f1; color: #333; padding: 1rem;">
        <div class="container">
            <p class="mb-1">Menú</p>
            <a href="/sobre-nosotros" class="text-dark mx-2">Sobre Nosotros</a>
            <a href="/centro-ayuda" class="text-dark mx-2">Centro de Ayuda</a>
            
            <div class="mt-3">
                <a href="https://wa.me/1234567890" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://facebook.com/tu_pagina" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="https://instagram.com/tu_pagina" class="text-dark mx-2" target="_blank">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="mailto:tuemail@gmail.com" class="text-dark mx-2">
                    <i class="fas fa-envelope"></i> Gmail
                </a>
                <span class="text-dark mx-2">
                    <i class="fas fa-phone"></i> +1 (123) 456-7890
                </span>
            </div>
        </div>
    </footer>
@stop

@section('css')
<style>
    .bg-beige {
            background-color: #f5f5dc; /* Color beige/crema */
        }
</style>
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
