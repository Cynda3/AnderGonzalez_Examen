@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Categoria</th>
    </tr>
    @foreach($hotels as $hotel)
    <tr style="color: red;">
      <th>{{$hotel->id}}</th>
      <th>{{$hotel->nombre}}</th>
      <th>{{$hotel->direccion}}</th>
      <th>{{$hotel->categoria}}</th>
    </tr>
    @endforeach

  </table>

@endsection
