<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="container-fluid">
                        <button
                            data-mdb-collapse-init
                            class="navbar-toggler"
                            type="button"
                            data-mdb-target="#navbarExample01"
                            aria-controls="navbarExample01"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarExample01">
                            <nav class="navbar navbar-expand-lg bg-dark">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ url('/') }}">INICIO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ url('catalogo') }}">CATÁLOGO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ url('empleos') }}">EMPLEOS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{url('quienes') }}">¿QUIÉNES SOMOS?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{url('contacto') }}">CONTACTO</a>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                    </div>
                </nav>
                <!-- Navbar -->
    
                <!-- Carousel -->
                <div id="carouselExample" class="carousel slide mt-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('img/portada.jpg')}}" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/portada1.jpg')}}" class="d-block w-100" alt="Image 2">
                        </div>
                    </div>
                    
                    <!-- Controles de navegación -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel -->
            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
    <div class="row my-3">
        <div class="col-12">
          <div class="row">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#!" class="nav-link px-2 text-white">Inicio</a></li>
                    <li class="nav-item"><a href="{{url('catalogo')}}" class="nav-link px-2 text-white">Catálogo</a></li>
                    <li class="nav-item"><a href="{{ url('empleos') }}" class="nav-link px-2 text-white">Empleo</a></li>
                    <li class="nav-item"><a href="{{url('quienes') }}" class="nav-link px-2 text-white">Quienes somos</a></li>
                    <li class="nav-item"><a href="{{url('contacto') }}" class="nav-link px-2 text-white">Contactos</a></li>
                </ul>
                <p class="text-center text-white">2024 ®GrupoGriffin Shoes</p>
            </footer>
            
          </div>
        </div>
      </div>
  </body>
 