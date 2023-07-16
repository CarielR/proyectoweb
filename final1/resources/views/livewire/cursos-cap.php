@php
    $cursosCaps = DB::table('cursoscaps')->get();
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

<div class="container">
    <div class="report-header">
        <h2>Reporte de Cursos/Caps</h2>
        <p>Fecha del reporte: {{ date('Y-m-d') }}</p>
    </div>

    <div class="table-container">
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
    </div>

    <div class="report-footer">
        <p>Este es el pie de página del reporte.</p>
        <p>Página generada el: {{ date('Y-m-d H:i:s') }}</p>
    </div>
</div>
