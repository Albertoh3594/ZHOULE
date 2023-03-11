@extends('layouts.layout-admin')

@section('titulo', 'Login')

@section('contenido')

<div class="main">

    <div class="container">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form">
                <h2>INICIAR SESION</h2>
                <p class="desc">¿Nuevo en ZHOULE TEAM? <a href="#" class="link-registro"> Registrate</a></span></p>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <a href="#" class="link-registro"> ¿Olvidaste tu contraseña?</a>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="submit-link submit" value="Iniciar Sesión"/>

                </div>
            </form>
        </div>
    </div>

</div>
@endsection


@extends('layouts.layout-admin')

@section('titulo', 'Panel - Admin')

@section('contenido')


<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Página Admin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Usuarios</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                {{-- @include('tabla') --}}
            </div>
        </div>
@endsection
