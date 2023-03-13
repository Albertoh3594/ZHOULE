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
