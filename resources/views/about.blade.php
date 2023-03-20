@extends('layouts.layout')

@section('titulo', 'ZHOULE')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/NavDrop.js')}}" defer></script>
    <script src="{{asset('js/about.js')}}" defer></script>

@endsection

@section('contenido')
    <div class="container-about">
        <div class="about-section">
            <div class="info-container">
                <h1>ZHOULE TEAM</h1>
                <p class="text">ZHOULE TEAM es un equipo de esports recién fundado que busca dejar huella en el mundo de los videojuegos. Con un grupo de jugadores apasionados y comprometidos, este equipo promete dar lo mejor de sí en cada competición.</p>
                <p class="text">La fundación de ZHOULE TEAM surgió de la unión de amigos que compartían una misma pasión: los videojuegos. Tras mucho tiempo de juego y práctica, decidieron unirse para crear su propio equipo y llevar su habilidad al siguiente nivel. Con el tiempo, se dieron cuenta de que juntos podían lograr grandes cosas y así surgió ZHOULE TEAM.</p>
                <p class="text">ZHOULE TEAM no solo se enfoca en ganar competencias, también buscan ser una comunidad donde los jugadores puedan compartir sus experiencias y conocimientos. Para ello, ofrecen espacios de entrenamiento y desarrollo, además de eventos donde los seguidores del equipo puedan interactuar con los jugadores.</p>
            </div>
        </div>
    </div>
@endsection
