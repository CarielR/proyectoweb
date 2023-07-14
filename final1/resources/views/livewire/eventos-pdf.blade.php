@php
    $servicios = DB::table('eventos')->get();
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
            <th>#</th>
            <th>Nombre Event</th>
            <th>Descripcion Event</th>
            <th>Fecha Event</th>
            <th>Horas Event</th>
            <th>Ubicacion Event</th>
            <th>Observacion Event</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
                <td>{{ $servicio->nombre_event }}</td>
                <td>{{ $servicio->descripcion_event }}</td>
                <td>{{ $servicio->fecha_event }}</td>
                <td>{{ $servicio->horas_event }}</td>
                <td>{{ $servicio->ubicacion_event	 }}</td>
                <td>{{ $servicio->observacion_event }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

