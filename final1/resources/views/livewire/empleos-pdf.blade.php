@php
    $eventos = DB::table('empleos')->get();
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

    .logo {
        font-family: Arial, sans-serif;
        font-size: 40px;
        font-weight: bold;
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
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #EEEEEE;
        word-wrap: break-word;
    }

    .table th {
        background-color: #663399;
        color: #FFFFFF;
        font-weight: bold;
    }

    .table td {
        background-color: #FFFFFF;
        color: #333333;
    }

    .report-footer {
        text-align: center;
        margin-top: 20px;
        color: #999999;
    }
</style>
<div class="container">
    <div class="report-header">
        <h2>Reporte de Empleos</h2>
        <h1 class="logo">Analytika Women</h1>
        <p>Fecha del reporte: {{ date('Y-m-d') }}</p>
    </div>

    <div class="table-container">
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

    <div class="report-footer">
        <p>Este es el pie de página del reporte.</p>
        <p>Página generada el: {{ date('Y-m-d H:i:s') }}</p>
    </div>
</div>
