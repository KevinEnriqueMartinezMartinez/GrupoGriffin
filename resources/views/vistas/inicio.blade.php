@extends('layouts.index')
@section('content')
<div class="container my-3">
    <div class="row my-3">
        <div class="col-4">
            <h3>®GrupoGriffin Shoes</h3>
            <p>¡Bienvenido a GrupoGriffin Shoes, tu destino número uno para sneakers exclusivos y de alta calidad! Nos enorgullecemos de ofrecerte las últimas tendencias en calzado deportivo, combinando estilo, comodidad y rendimiento. Ya sea que busques un par para destacar en tu día a día o mejorar tu rendimiento deportivo, aquí encontrarás lo mejor. ¡Explora nuestro catálogo y lleva tus pasos al siguiente nivel con GrupoGriffin Shoes!</p>
        </div>
        <div class="col-8">
            <img class="image-container" src="{{ asset('img/1.png') }}" alt="" width="100%" height="75%">
        </div>
        </div>
</div>
<section>
    <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.1294452884828!2d-89.85082241347665!3d13.927747243723203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62981d0f3708b9%3A0x8c59c1a57c907f88!2sAvenida%20Duran%2C%20Ahuachapan!5e0!3m2!1ses-419!2ssv!4v1718921543645!5m2!1ses-419!2ssv"
        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

@endsection