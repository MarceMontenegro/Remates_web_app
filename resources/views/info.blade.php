@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <center><strong><h1>Sobre Nosotros</h1></strong></center>
@stop

@section('content')
    <div class="container">
        

        <p><strong>¿Quiénes somos?</strong></p>
        <p>Somos la empresa <b>MSA-Remates</b>, líder en el sector de subastas, dedicada a conectar compradores y vendedores de una amplia variedad de productos, desde arte y antigüedades hasta bienes inmobiliarios y vehículos. Con años de experiencia en el mercado, nuestra misión es proporcionar un entorno seguro, transparente y profesional para que nuestros clientes realicen sus transacciones con total confianza.</p>

        <p><strong>Nuestros Valores</strong></p>
        <ul>
            <li><strong>Integridad:</strong> Creemos en la transparencia y en mantener la integridad en todas nuestras operaciones, asegurando que cada subasta sea justa y bien gestionada.</li>
            <li><strong>Innovación:</strong> Constantemente innovamos en nuestros procesos para ofrecer una experiencia más amigable y accesible, tanto en nuestras plataformas online como en nuestras oficinas físicas.</li>
            <li><strong>Servicio al Cliente:</strong> El cliente es nuestra prioridad. Nos esforzamos en ofrecer un servicio de atención y asistencia que supere las expectativas, para que cada experiencia sea satisfactoria y fluida.</li>
        </ul>

        <p><strong>Nuestra Historia</strong></p>
        <p>Fundada hace más de una década, comenzamos como una pequeña casa de subastas con un equipo de personas apasionadas por conectar a compradores y vendedores. Con el paso de los años, hemos crecido y nos hemos adaptado a las tendencias digitales, desarrollando una plataforma en línea avanzada que permite a nuestros usuarios participar en subastas desde cualquier parte del mundo.</p>

        <p><strong>Lo que Ofrecemos</strong></p>
        <ul>
            <li><strong>Subastas Presenciales y Online:</strong> Organizamos eventos de subasta tanto en nuestras instalaciones como en línea, donde puedes acceder a una gran variedad de productos y participar desde la comodidad de tu hogar.</li>
            <li><strong>Asesoramiento Personalizado:</strong> Ofrecemos asesoría tanto para compradores como para vendedores, ayudándoles a maximizar el valor de sus bienes y a tomar decisiones informadas.</li>
            <li><strong>Gestión Integral:</strong> Desde la promoción de los artículos en subasta hasta la asistencia post-venta, gestionamos todos los aspectos del proceso para garantizar una experiencia fluida.</li>
        </ul>

        <p><strong>Compromiso Social</strong></p>
        <p>Nos comprometemos a operar de manera ética y a contribuir a la comunidad. Parte de nuestras ganancias se destina a organizaciones benéficas locales y a proyectos de sostenibilidad, ya que creemos en retribuir a la sociedad.</p>

        <p><strong>Contáctanos</strong></p>
        <p>Para más información, estamos siempre disponibles para resolver cualquier consulta. ¡Estamos aquí para ayudarte a participar en una subasta emocionante y satisfactoria!</p>
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
