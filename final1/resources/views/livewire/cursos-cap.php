@php
    $cursosCaps = DB::table('cursoscaps')->get();
@endphp
<style>
    .table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table thead th {
        background-color: #f5f5f5;
        font-weight: bold;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente ID</th>
            <th>Nombre del Curso/Caps</th>
            <th>Descripción del Curso/Caps</th>
            <th>Publicación del Curso/Caps</th>
            <th>Edad Mínima</th>
            <th>Edad Máxima</th>
            <th>Enlace</th>
            <th>Cupos</th>
            <th>Costo</th>
            <th>Creado en</th>
            <th>Actualizado en</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cursosCaps as $cursoCaps)
            <tr>
                <td>{{ $cursoCaps->id }}</td>
                <td>{{ $cursoCaps->cliente_id }}</td>
                <td>{{ $cursoCaps->nombre_cursoscaps }}</td>
                <td>{{ $cursoCaps->descipcion_cursoscaps }}</td>
                <td>{{ $cursoCaps->publicacion_cursoscaps }}</td>
                <td>{{ $cursoCaps->edadmin_cursoscaps }}</td>
                <td>{{ $cursoCaps->edadmax_cursoscaps }}</td>
                <td><a href="{{ $cursoCaps->link_cursoscaps }}">Enlace</a></td>
                <td>{{ $cursoCaps->cupos_cursoscaps }}</td>
                <td>{{ $cursoCaps->costo_cursoscaps }}</td>
                <td>{{ $cursoCaps->created_at }}</td>
                <td>{{ $cursoCaps->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
