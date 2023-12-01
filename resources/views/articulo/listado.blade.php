@extends('layouts.app')

@section('title', 'Marcas')

@section('content')
<div class="container">
        <div class="card mt-3">
            <div class="card-header" style="background-color: #f8f9fa;">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Lista de Marcas</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{route('form_registrar_egreso')}}"  class="btn btn-primary float-end">
                            <i class="bi bi-plus"></i> Registrar Egreso
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="max-height: 500px;">
                    <table id="marca" class="table table-striped table-bordered" style="width:100%">
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
                            @forelse ($marca as $i => $s)
                                <tr style="background-color: #fff;" onmouseover="this.style.backgroundColor='#f8f9fa';" onmouseout="this.style.backgroundColor='#fff';">
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $s->referencia }}</td>
                                    <td>{{ $s->descripcion }}</td>
                                    <td>{{ $s->color }}</td>
                                    <td>{{ $s->precioUnitario }}</td>
                                    <td>{{ $s->observacion }}</td>
                                    <td>{{ $s->foto }}</td>
                                    <td>{{ $s->marca }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No hay Articulos Disponibles!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Inicializar DataTables -->
<script>
    $(document).ready(function() {
        $('#marca').DataTable({
            language: {
                processing: "Procesando...",
                search: "Buscar:",
                lengthMenu: "Mostrar: _MENU_ <br>",
                info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
                infoEmpty: "Mostrando de 0 a 0 de un total de 0 registros",
                infoFiltered: "(filtrado de un total de _MAX_ registros)",
                infoPostFix: "",
                loadingRecords: "Cargando...",
                zeroRecords: "No se encontraron registros coincidentes",
                emptyTable: "No hay datos disponibles en la tabla",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "Último"
                },
                aria: {
                    sortAscending: ": activar para ordenar la columna ascendente",
                    sortDescending: ": activar para ordenar la columna descendente"
                }
            },
            lengthMenu: [[5, 25, 50, -1], [5, 25, 50, "Todos"]],
            dom: '<"d-flex"lf>rtip',
        });
        $('.dataTables_length label').addClass('me-3');
    });
</script>
@endsection
