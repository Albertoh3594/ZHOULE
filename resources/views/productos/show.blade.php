@extends('layouts.layout')

@section('titulo', 'ZHOULE')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/products.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/products.js')}}"></script>
    <script src="{{asset('js/NavDrop.js')}}" defer></script>

@endsection

@section('contenido')

{{-- <div id="img-content">
    <img src="images/products/cabecera-productos.webp" alt="cabecera productos">
    <h1 class="texto">PRODUCTOS</h1>
</div> --}}

<div class="product-details">
    <h2>{{ $product->nombre }}</h2>
    <p>{{ $product->descripcion }}</p>
    {{-- <img src="{{ $product->image_url }}" alt="{{ $product->name }}"> --}}
    <p>Precio: {{ $product->precio }}</p>
    <a href="{{ route('productos') }}">Back to all products</a>
</div>

</section>
