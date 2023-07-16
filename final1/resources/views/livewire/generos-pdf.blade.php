@php
    $resultados = DB::table('generos')->get();
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

    .report-header img {
        width: 100px;
        height: auto;
        margin-right: 10px;
        display: inline-block;
        vertical-align: middle;
    }

    .report-footer {
        text-align: center;
        margin-top: 20px;
        color: #999999;
    }

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
        word-wrap: break-word;
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
</style>

<div class="container">
    <div class="report-header">
        <h1 class="logo">Analytika Women</h1>
        <h2>Reporte de Géneros</h2>
        <p>Fecha del reporte: {{ date('Y-m-d') }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre Género</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultados as $resultado)
                <tr>
                    <td>{{ $resultado->Nombre_gen }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="report-footer">
        <p>Este es el pie de página del reporte.</p>
        <p>Página generada el: {{ date('Y-m-d H:i:s') }}</p>
    </div>
</div>



