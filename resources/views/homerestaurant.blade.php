
@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a href="{{ route('login') }}">
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"                                >
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif
<h2>Crea una nueva orden</h2>
<a href="{{route('create.order')}}">pulsa aquí</a>
</body>
</html>