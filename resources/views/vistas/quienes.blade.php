@extends('layouts.index')
@section('content')
<div class="container my-3">
    <div class="row my-3">
        <div class="col-4">
            <h3>¿Quiénes somos?</h3>
            <p>En Griffin Shoes, somos más que una tienda de calzado; somos tu aliado en la búsqueda del estilo y la comodidad. Con más de 10 años de experiencia en el mercado, nos hemos consolidado como líderes en la venta de zapatos de calidad para toda la familia. Nuestro compromiso con la excelencia nos impulsa a ofrecerte una amplia selección de marcas reconocidas y las últimas tendencias en moda, siempre garantizando la satisfacción de nuestros clientes. En Griffin Shoes, cada paso cuenta, y estamos aquí para acompañarte en cada uno de ellos, brindándote no solo productos excepcionales, sino también un servicio al cliente inigualable. ¡Descubre el mundo de posibilidades que tenemos para ti!</p>
        </div>
        <div class="col-8">
            <div class="image-container">
                <img src="{{ asset('img/6.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

@endsection