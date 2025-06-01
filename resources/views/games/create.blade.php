@extends('layouts.layout')

@section('title', 'Registro de Videojuego')

@section('content')
    <h2>Formulario de Registro de Videojuego</h2>
    <form action="">
        Nombre del juego: <input type="text" name="nombre"><br>
        Precio: <input type="number" name="precio"><br>
        Stock: <input type="number" name="stock"><br>
        Categoría: <input type="text" name="categoria"><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
@endsection
