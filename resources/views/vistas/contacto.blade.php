@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-3">
            <form action="">
                <div class="mb-2">
                    <label for="txtEmail" class="form-label text-white">Correo</label>
                    <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text text-white">Nunca compartiremos tu correo electrónico con nadie más.</div>
                </div>
                <div class="mb-2">
                    <label for="txtComment" class="form-label text-white">Comentario</label>
                    <textarea class="form-control" id="txtComment" rows="7"></textarea>
                </div>
            </form>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
            <img src="{{ asset('img/7.png') }}" alt="image" class="img-fluid">
        </div>
        
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-3">
            <h5 class="text-white">Síguenos en nuestras redes sociales</h5>
            <div>
                <a href="https://www.facebook.com" target="_blank" class="text-white me-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.whatsapp.com" target="_blank" class="text-white me-2">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="text-white">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection