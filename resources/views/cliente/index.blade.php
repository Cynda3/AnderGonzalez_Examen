@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Clientes</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>NIF</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
      <th>{{$cliente->id}}</th>
      <th>{{$cliente->nif}}</th>
      <th>{{$cliente->nombre}}</th>
      <th>{{$cliente->apellido}}</th>
      <th>{{$cliente->telefono}}</th>
    </tr>
    @endforeach


  </table>

@endsection
