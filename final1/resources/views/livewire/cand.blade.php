@php
    $resultados = DB::table('clientes')->get();
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
            <th>Género ID</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Teléfono 1</th>
            <th>Teléfono 2</th>
            <th>Email</th>
            <th>Título</th>
            <th>Rol</th>
            <th>Experiencia</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($resultados as $resultado)
            <tr>
                <td>{{ $resultado->id }}</td>
                <td>{{ $resultado->genero_id }}</td>
                <td>{{ $resultado->nombre_cli }}</td>
                <td>{{ $resultado->fecha_nac_cli }}</td>
                <td>{{ $resultado->telefono1_cli }}</td>
                <td>{{ $resultado->telefono2_cli }}</td>
                <td>{{ $resultado->email_cli }}</td>
                <td>{{ $resultado->titulo_cli }}</td>
                <td>{{ $resultado->rol_cli }}</td>
                <td>{{ $resultado->experiencia_cli }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>