@php
    $servicios = DB::table('eventos')->get();
@endphp

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F3F4;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #FFFFFF;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .report-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .report-header h2 {
        color: #663399;
        font-size: 24px;
        font-weight: bold;
        margin: 0;
    }

    .report-header p {
        color: #999999;
        margin: 0;
    }

    .report-header .logo {
        font-size: 40px;
        color: #663399;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin: 0;
        padding: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: left;
        font-size: 10px;
        border-bottom: 1px solid #ddd;
    }

    .table thead th {
        background-color: #663399;
        color: #FFFFFF;
        font-weight: bold;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .report-footer {
        text-align: center;
        color: #999999;
    }
</style>

<div class="container">
    <div class="report-header">
        <h2>Reporte de Eventos</h2>
        <h1 class="logo">Analytika Women</h1>
        <p>Fecha del reporte: {{ date('Y-m-d') }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre Evento</th>
                <th>Descripción Evento</th>
                <th>Fecha Evento</th>
                <th>Horas Evento</th>
                <th>Ubicación Evento</th>
                <th>Observación Evento</th>
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
                    <td>{{ $servicio->ubicacion_event }}</td>
                    <td>{{ $servicio->observacion_event }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="report-footer">
        <p>Este es el pie de página del reporte.</p>
        <p>Página generada el: {{ date('Y-m-d H:i:s') }}</p>
    </div>
</div>
