@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h4>Cliente nuevo</h4>
  <form action="" method="post">
    @csrf
    NIF:<br>
    <input type="text" name="nif" value=""><br><br>
    Nombre:<br>
    <input type="text" name="nombre" value=""><br><br>
    Apellido:<br>
    <input type="text" name="apellido" value=""><br><br>
    Telefono:<br>
    <input type="text" name="telefono" value=""><br><br>
    <button type="submit" name="submit">Enviar</button>
  </form>
  <br>

@endsection
