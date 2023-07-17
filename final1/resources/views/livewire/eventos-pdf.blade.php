@php
    $servicios = DB::table('eventos')->get();
@endphp

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F3F4;
    }

    .container {
        margin: 0 auto;
        padding: 20px;
        background-color: #FFFFFF;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 100%; /* Ajusta el ancho al 100% */
        overflow-x: auto; /* Agrega scroll horizontal si es necesario */
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

    .table-container {
        max-width: 100%;
        overflow-x: auto;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        margin-bottom: 10px;
    }

    .table th{

        text-align: center;
        border-bottom: 1px solid #ddd;
        font-size: 6px; /* Ajusta el tamaño de fuente */
    }

    .table td {
        padding-bottom: 3px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        font-size: 6px; /* Ajusta el tamaño de fuente */
    }

    .table thead th {
        background-color: #663399;
        color: #FFFFFF;
        font-weight: bold;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .report-footer {
        text-align: center;
        margin-top: 20px;
        color: #999999;
    }

    /* Estilo para el PDF */
    @media print {
        body {
            width: 100%; /* Ajusta el ancho al 100% para visualización horizontal */
            transform: rotate(90deg); /* Gira el contenido para visualización horizontal */
        }

        .container {
            margin: 0;
            padding: 0;
        }

        .table {
            font-size: 10px; /* Ajusta el tamaño de fuente para visualización horizontal */
        }
    }

    .pdf-table {
        table-layout: fixed;
    }

    .pdf-table th,
    .pdf-table td {
        word-wrap: break-word;
        white-space: normal;
    }
</style>

<div class="container">
    <div class="report-header">
        <h2>Reporte de Eventos</h2>
        <h1 class="logo">Analytika Women</h1>
        <p>Fecha del reporte: {{ date('Y-m-d') }}</p>
    </div>
    <div class="table-container">
        <div class="table pdf-table">
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
        </div>

    </div>


    <div class="report-footer">
        <p>Este es el pie de página del reporte.</p>
        <p>Página generada el: {{ date('Y-m-d H:i:s') }}</p>
    </div>
</div>
