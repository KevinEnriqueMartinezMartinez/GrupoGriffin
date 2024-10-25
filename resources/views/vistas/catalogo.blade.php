@extends('layouts.index')

@section('content')
<div class="container my-3">
    <h2 class="display-4 text-center text-white mb-4">Catálogo</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4" style="width: 100%;">
                <img src="img/8.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-text text-dark">Atrévete a destacar con los Nike Air: el equilibrio perfecto entre innovación y estilo que te acompañará en cada aventura.</p>
                    <p class="text-muted"><del>$120.00</del> <strong class="text-success">PRECIO: $99.99</strong></p>
                    <div class="d-flex justify-content-center">
                        <a href="index2.html" class="btn btn-primary" role="button">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="width: 100%;">
                <img src="img/9.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-text text-dark">Eleva tu look y rendimiento con nuestros increíbles zapatos Nike Air. Diseñados para brindarte la máxima comodidad.</p>
                    <p class="text-muted"><del>$110.00</del> <strong class="text-success">PRECIO: $89.99</strong></p>
                    <div class="d-flex justify-content-center">
                        <button id="boton1" class="btn btn-primary">Ver más</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="width: 100%;">
                <img src="img/10.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-text text-dark">Transforma tu entrenamiento con el soporte y la ligereza que solo los Nike Air pueden ofrecerte; ¡haz que cada kilómetro cuente!</p>
                    <p class="text-muted"><del>$130.00</del> <strong class="text-success">PRECIO: $109.99</strong></p>
                    <div class="d-flex justify-content-center">
                        <button id="boton2" class="btn btn-primary">Ver más</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4"> <!-- Clase mt-4 para margen superior -->
        <div class="col-md-4">
            <div class="card mb-4" style="width: 100%;">
                <img src="img/11.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-text text-dark">Atrévete a destacar con los Nike Air: el equilibrio perfecto entre innovación y estilo que te acompañará en cada aventura.</p>
                    <p class="text-muted"><del>$120.00</del> <strong class="text-success">PRECIO: $99.99</strong></p>
                    <div class="d-flex justify-content-center">
                        <a href="index2.html" class="btn btn-primary" role="button">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="width: 100%;">
                <img src="img/13.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-text text-dark">Eleva tu look y rendimiento con nuestros increíbles zapatos Nike Air. Diseñados para brindarte la máxima comodidad.</p>
                    <p class="text-muted"><del>$110.00</del> <strong class="text-success">PRECIO: $89.99</strong></p>
                    <div class="d-flex justify-content-center">
                        <button id="boton1" class="btn btn-primary">Ver más</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="width: 100%;">
                <img src="img/15.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-text text-dark">Transforma tu entrenamiento con el soporte y la ligereza que solo los Nike Air pueden ofrecerte; ¡haz que cada kilómetro cuente!</p>
                    <p class="text-muted"><del>$130.00</del> <strong class="text-success">PRECIO: $109.99</strong></p>
                    <div class="d-flex justify-content-center">
                        <button id="boton2" class="btn btn-primary">Ver más</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection