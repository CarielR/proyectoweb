@php
    $eventos = DB::table('empleos')->get();
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
<div>
<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente ID</th>
                <th>Nombre de la empresa</th>
                <th>Descripción de la empresa</th>
                <th>Modalidad de empleo</th>
                <th>Horario de empleo</th>
                <th>Fecha de publicación de empleo</th>
                <th>Experiencia requerida</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
            <tr>
                <td>{{ $evento->id }}</td>
                <td>{{ $evento->cliente_id }}</td>
                <td>{{ $evento->nombre_emp }}</td>
                <td>{{ $evento->descripcion_emp }}</td>
                <td>{{ $evento->modalidad_emp }}</td>
                <td>{{ $evento->horario_emp }}</td>
                <td>{{ $evento->fechapub_emp }}</td>
                <td>{{ $evento->experiencia_emp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>