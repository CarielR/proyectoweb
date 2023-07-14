@php
    $resultados = DB::table('generos')->get();
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
            <th>Nombre Genero</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach ($resultados as $resultado)
            <tr>
                <td>{{ $resultado->Nombre_gen}}</td> 
            </tr>
        @endforeach
    </tbody>
</table>