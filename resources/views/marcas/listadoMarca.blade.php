@extends('layouts.app')

@section('content')

<div class="container">

  <div class="text-center">
    <h1 style="color:#3EBDB9">Nuestras Marcas</h1>
  </div>

  <table class="table mt-4 text-center">
    <thead class="table-info text-center">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
      </tr>
    </thead>
    <tbody>
      @foreach($marca as $m)
      <tr>
        <td>{{ $m->idMarca }}</td>
        <td>{{ $m->descripcion }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection
