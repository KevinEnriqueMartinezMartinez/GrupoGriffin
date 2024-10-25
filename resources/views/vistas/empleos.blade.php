@extends('layouts.index')

@section('content')
<div class="container my-3">
    <h2 class="text-center text-white mb-4">Lista de Empleos</h2>
    <div class="row">
        <!-- Empleo 1 -->
        <div class="col-md-4">
            <div class="card job-card">
                <div class="card-body">
                    <h5 class="card-title">Vendedor/a de Calzado</h5>
                    <img src="img/3.png" class="card-img-top" alt="...">
                    <p class="card-text text-dark">Buscamos personas entusiastas y apasionadas por el servicio al cliente para unirse a nuestro equipo.</p>
                    <p class="text-muted">Salario: $500.00 / mes</p>
                    <a href="#" class="btn btn-primary">Aplicar</a>
                </div>
            </div>
        </div>
        <!-- Empleo 2 -->
        <div class="col-md-4">
            <div class="card job-card">
                <div class="card-body">
                    <h5 class="card-title">Encargado/a de Tienda</h5>
                    <img src="img/5.png" class="card-img-top" alt="...">
                    <p class="card-text text-dark">Estamos en búsqueda de un encargado de tienda con experiencia en gestión y liderazgo.</p>
                    <p class="text-muted">Salario: $700.00 / mes</p>
                    <a href="#" class="btn btn-primary">Aplicar</a>
                </div>
            </div>
        </div>
        <!-- Empleo 3 -->
        <div class="col-md-4">
            <div class="card job-card">
                <div class="card-body">
                    <h5 class="card-title">Asistente de Almacén</h5>
                    <img src="img/3.png" class="card-img-top" alt="...">
                    <p class="card-text text-dark">Se requiere asistente de almacén para organizar y gestionar el inventario de productos.</p>
                    <p class="text-muted">Salario: $400.00 / mes</p>
                    <a href="#" class="btn btn-primary">Aplicar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<section>
    <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.1294452884828!2d-89.85082241347665!3d13.927747243723203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62981d0f3708b9%3A0x8c59c1a57c907f88!2sAvenida%20Duran%2C%20Ahuachapan!5e0!3m2!1ses-419!2ssv!4v1718921543645!5m2!1ses-419!2ssv"
        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>
@endsection