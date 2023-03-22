@extends('layouts.layout')

@section('titulo', 'ZHOULE')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/products.js')}}"></script>
    <script src="{{asset('js/NavDrop.js')}}" defer></script>

@endsection

@section('contenido')

<!-- Boton hacia arriba -->
<a href="#" class="ir-arriba"title="Volver arriba">
    <span class="fa-stack">
        <span class="fa fa-circle fa-stack-2x"></span>
        <span class="fa fa-arrow-up fa-stack-1x fa-inverse"></span>
    </span>
</a>

<div id="img-content">
    <img src="images/products/cabecera-productos.webp" alt="cabecera productos">
    <h1 class="texto">PRODUCTOS</h1>
</div>
{{-- <p id="total-products" data-total-products="{{ $totalProducts }}">Mostrando {{ count($productos) }} de {{ $totalProducts }} productos</p> --}}

<div class="main-products">
    <div class="container">
            <div id="product-list" class="row">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-3 col-xl-3">
                            <div class="single-product">
                                    <div class="img-content">
                                        <a href="{{ route('producto', ['id' => $product->id]) }}"><img src="{{ asset($product->imagenPrincipal->route) }}" alt="imagen_{{$product->name}}"></a>
                                    </div>
                                    <div class="text-content">
                                            <h3 class="product-title">{{ $product->name }}</h3>
                                            <h4 class="product-price">{{ $product->price }} €</h4>
                                    </div>
                            </div>
                    </div>
                @endforeach
            </div>
    </div>
    <!-- Botón "Ver más" -->
    @if (count($products) < $totalProducts)
            <button id="load-more" data-offset="{{ $offset }}"><span>Ver más</span></button>
            <input type="hidden" id="total-products" data-total-products="{{ $totalProducts }}">
    @endif
</div>
@endsection

</section>
