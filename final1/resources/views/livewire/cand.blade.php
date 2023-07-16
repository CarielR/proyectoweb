@php
    $resultados = DB::table('clientes')->get();
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


    .table-container {
        max-width: 100%;
        overflow-x: auto;
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
        margin-top: 20px;
        color: #999999;
    }
</style>

<div class="container">
    <div class="report-header">
        <h2>Reporte de Clientes</h2>
        <h1 class="logo">Analytika Women</h1>
        <p>Fecha del reporte: {{ date('Y-m-d') }}</p>
    </div>

    <div class="table-container">
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
    </div>

    <div class="report-footer">
        <p>Este es el pie de página del reporte.</p>
        <p>Página generada el: {{ date('Y-m-d H:i:s') }}</p>
    </div>
</div>
