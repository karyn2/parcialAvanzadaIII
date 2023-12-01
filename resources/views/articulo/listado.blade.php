@extends('layouts.app')

@section('title', 'Articulos')

@section('content')
<br>
<div class="container">
    <div class="card mt-3">
        <div class="card-header" style="background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-6">
                    <h4>Lista de Articulos</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive" style="max-height: 500px;">
                <table id="ArticulosTable" class="table table-striped table-bordered text-center" style="width:100%">
                    <thead style="background-color: #f8f9fa;">
                        <tr>
                            <th>#</th>
                            <th>Referencia</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Color</th>
                            <th>Precio Unitario</th>
                            <th>Observación</th>
                            <th>Foto</th>
                            <th>Marca</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @php
                        $i=1;
                        @endphp
                        @foreach($articulos as $f)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $f->referencia }}</td>
                            <td>{{ $f->nombre }}</td>
                            <td>{{ $f->descripcion }}</td>
                            <td>{{ $f->color }}</td>
                            <td>{{ $f->preciounitario }}</td>
                            <td>{{ $f->observacion }}</td>
                            <td> <img src="{{ asset('images/' . $f->foto .'.jpg') }}" class="card-img-top" style="width: 25%;" alt="{{ $f->foto }}"></td>

                            <td>{{ $f->descmarca }}</td>

                            @php
                            $i = $i+1;
                            @endphp
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

