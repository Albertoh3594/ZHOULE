@extends('layouts.layout')

@section('titulo', 'ZHOULE')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/NavDrop.js')}}" defer></script>
    <script src="{{asset('js/teams.js')}}" defer></script>

@endsection

@section('contenido')
    <div id="img-content">
        <img src="{{ asset('/images/teams/'. $team->game->nombre . '.webp') }}" alt="imagen_{{$team->game->nombre}}" class="teamBackgroundImage">
        <h1 class="texto">{{$team->game->nombre}}</h1>
    </div>

    <div class="container-team">
        <p class="info-game">{{$team->game->descripcion}}</p>
        <div id="content">
            <div class="player-list-container">
                <div class="player-list-title">
                <h1><span>Nuestro Equipo</span></h1>
                </div>

                <div class="player-profiles">
                    @foreach ($team->users as $user)
                    <div class="player-profile">
                        <img src="{{asset('images/logo.png')}}" alt="image_profile_" class="player-picture">
                        <span class="player-name">{{$user->nombre}}</span></a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="content-img">
                <img src="{{asset('images/teams/imagen_equipo.webp')}}" alt="imagen_equipo">
            </div>
        </div>
    </div>
@endsection
