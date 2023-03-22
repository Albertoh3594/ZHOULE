@extends('layouts.layout')

@section('titulo', 'ZHOULE')

@section('head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/NavDrop.js')}}" defer></script>


@endsection

@section('contenido')

    <div class="slider" id="home-area">
        <div class="slide">
            <div class="contenido">
                <h1>ZHOULE TEAM</h1>
                <p>¡Hola! Somos ZHOULE TEAM, un equipo de esports recién fundado. Estamos compuestos por un grupo de apasionados por los videojuegos y la competición. Nuestra misión es convertirnos en uno de los equipos de esports más destacados del panorama internacional, y para ello trabajamos duro cada día.</p>
                <a href="#contenido-area" class="flecha-slider" title="Flecha para bajar al contenido"></a>
            </div>
            <img src="{{asset("/images/home/slider-1.webp")}}" alt="foto1">
        </div>
        <div class="slide">
            <div class="contenido">
                <h1>ZHOULE TEAM</h1>
                <p>¡Hola! Somos ZHOULE TEAM, un equipo de esports recién fundado. Estamos compuestos por un grupo de apasionados por los videojuegos y la competición. Nuestra misión es convertirnos en uno de los equipos de esports más destacados del panorama internacional, y para ello trabajamos duro cada día.</p>
                <a href="#contenido-area" class="flecha-slider" title="Flecha para bajar al contenido"></a>
            </div>
            <img src="{{asset("/images/home/slider-2.webp")}}" alt="foto2">
        </div>
        <div class="slide">
            <div class="contenido">
                <h1>ZHOULE TEAM</h1>
                <p>¡Hola! Somos ZHOULE TEAM, un equipo de esports recién fundado. Estamos compuestos por un grupo de apasionados por los videojuegos y la competición. Nuestra misión es convertirnos en uno de los equipos de esports más destacados del panorama internacional, y para ello trabajamos duro cada día.</p>
                <a href="#contenido-area" class="flecha-slider" title="Flecha para bajar al contenido"></a>
            </div>
            <img src="{{asset("/images/home/slider-3.webp")}}" alt="foto3">
        </div>
    </div>
    <!-- Boton hacia arriba -->
    <a href="#" class="ir-arriba"title="Volver arriba">
        <span class="fa-stack">
            <span class="fa fa-circle fa-stack-2x"></span>
            <span class="fa fa-arrow-up fa-stack-1x fa-inverse"></span>
        </span>
    </a>

    <div id="contenido-area">
            <div id="noticias-section">

            </div>

        <div id="teams-section">
                <div class="teamsSectionContainer">
                    <h2 class="teamsSectionTitle">NUESTROS EQUIPOS</h2>
                    <h4 class="teamsSectionSubTitle">Conoce a nuestros jugadores</h4>
                    <div class="teamsContainer">
                        @foreach ($teams as $team)
                        <div class="teamContainer">
                            <a href="{{ route('team', ['id' => $team->id]) }}"><img src="{{ asset('/images/teams/'. $team->game->name . '.webp') }}" alt="imagen_{{$team->game->name}}" class="teamBackgroundImage" style="height: 100%; width: 100%;"></a>
                            <p class="nameTeam">{{$team->game->name}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>

        <div class="carrousel-sponsors">
            <div class="carrousel-content">
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/amd-Logo.webp')}}" alt="logo-amd" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/audi-Logo.webp')}}" alt="logo-audi" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Logitech-Logo.webp')}}" alt="logo-logitech" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Nike-Logo.webp')}}" alt="logo-nike" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Secretlab-Logo.webp')}}" alt="logo-secretlab" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Cocacola-Logo.webp')}}" alt="cocacola-logo" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Ford-Logo.webp')}}" alt="ford-logo" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/amd-Logo.webp')}}" alt="logo-amd" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/audi-Logo.webp')}}" alt="logo-audi" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Logitech-Logo.webp')}}" alt="logo-logitech" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Nike-Logo.webp')}}" alt="logo-nike" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Secretlab-Logo.webp')}}" alt="logo-secretlab" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Cocacola-Logo.webp')}}" alt="cocacola-logo" style="height: auto; width: auto">
                </div>
                <div class="carrousel-item">
                    <img src="{{asset('../images/sponsors/Ford-Logo.webp')}}" alt="ford-logo" style="height: auto; width: auto">
                </div>
            </div>
        </div>
    </div>
@endsection

