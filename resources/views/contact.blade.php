@extends('master')

@if ($nombre != "Victor")
        <p>No eres Victor</p>
    @else
        <p>Hola Victor</p>
    @endif

    @foreach ([1,2,3,4,5] as $item) 
        <p>{{ $item }}</p>
        
    @endforeach



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 2</title>
</head>
<body>
    <h1>Página de contacto</h1>

    <p>Hola, mi nombre es {{ $nombre }}</p>

    @if ($nombre != "Victor")
        <p>No eres Victor</p>
    @else
        <p>Hola Victor</p>
    @endif

    @foreach ([1,2,3,4,5] as $item) 
        <p>{{ $item }}</p>
        
    @endforeach


</body>
</html> -->