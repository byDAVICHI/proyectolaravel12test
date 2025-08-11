@extends('layouts.app-layout')

@section('title')
    Laravel 12 | Home
@endsection

@push('css')
   <style>
       /* Custom styles can go here */
       body {
           background-color: #ff800a; /* Light background */
       }
    </style>
@endpush

@section('content')

    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido a Laravel 12</h1> --}}
        <x-alert2 type="dark" class="mb-4">

            <x-slot:title>Alerta de Información</x-slot:title>
            Contenido de alerta personalizado.
        </x-alert2>

        <p>Esta es la página de inicio de mi aplicación Laravel 12.</p>

    </div>

@endsection


