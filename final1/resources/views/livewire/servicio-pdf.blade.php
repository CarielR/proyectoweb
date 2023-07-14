@php
    $servicios = DB::table('servicios')->get();
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
            <th>Nombre de Servicio</th>
            <th>Descripción de Servicio</th>
            <th>Precio de Servicio</th>
            <th>Creado en</th>
            <th>Actualizado en</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
                <td>{{ $servicio->cliente_id }}</td>
                <td>{{ $servicio->nombre_serv }}</td>
                <td>{{ $servicio->descripcion_serv }}</td>
                <td>{{ $servicio->precio_serv }}</td>
                <td>{{ $servicio->created_at }}</td>
                <td>{{ $servicio->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

