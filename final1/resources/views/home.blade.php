      <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio</title>
  <link rel="icon" type="image/png" href="img/AW.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css">
  <style>
    .siderbar:hover {
        background-color: red;
    }
	.log{
		float: left;
		width: 100px; /* Ajusta el valor según el tamaño deseado */
        height: auto;
		margin-right: 20px;
	}
    .box {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

}
</style>
@vite(['resources/js/app.js'])
@livewireStyles

</head>
<body class="hold-transition sidebar-mini">
<!-- side-bar-->
<x-side-bar></x-side-bar>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <div class="content-header">
    </div>


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

          <div class="row">
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Registros Actuales {{ date('Y-m-d') }} </h3>
                        </div>
                        <div class="box-body">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Numero de Cursos por rango de Edad
                            </h3>
                        </div>
                        <div class="box-body">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gráfico de líneas</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gráfico de radar</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="radarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gráfico de área</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="areaChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gráfico de dispersión</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="scatterChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gráfico de burbujas</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="bubbleChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gráfico polar</h3>
                        </div>
                        <div class="box-body">
                            <canvas id="polarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        <br><br><br>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- SCRIPT CHART-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script>
    @php
        $CountCL = DB::table('clientes')->count(); // NUMERO CLIENTES
        $CountEv = DB::table('eventos')->count(); // NUMERO EVENTOS
        $CountServ = DB::table('servicios')->count(); // NUMERO SERVICIOS
        $CountEmp = DB::table('empleos')->count();
        $CountCurs = DB::table('cursoscaps')->count();

         // Obtener los datos de la tabla de cursos
        $cursosData = DB::table('cursoscaps')->select('id', 'edadmin_cursoscaps', 'edadmax_cursoscaps')->get();

        // Definir los rangos de edad
        $ranges = [
            ['label' => '0-10', 'min' => 0, 'max' => 10],
            ['label' => '11-20', 'min' => 11, 'max' => 20],
            ['label' => '21-30', 'min' => 21, 'max' => 30],
            ['label' => '31-40', 'min' => 31, 'max' => 40],
            ['label' => '41+', 'min' => 41, 'max' => PHP_INT_MAX]
        ];

        // Inicializar el contador de cursos para cada rango de edad
        $courseCounts = array_fill(0, count($ranges), 0);

        // Filtrar los cursos según cada rango de edad y contarlos
        foreach ($ranges as $index => $range) {
            $filteredCourses = $cursosData->filter(function ($curso) use ($range) {
                return $curso->edadmin_cursoscaps >= $range['min'] && $curso->edadmin_cursoscaps <= $range['max'];
            });

            $courseCounts[$index] = $filteredCourses->count();
        }

        // Obtener las etiquetas y datos para el gráfico
        $labels = array_column($ranges, 'label');
        $data = $courseCounts;

        // Definir un array de colores
        $colors = [
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 99, 132, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(153, 102, 255, 0.5)'
        ];

        // Obtener el número de categorías
        $numCategories = count($labels);

        // Generar un array de colores basado en el número de categorías
        $backgroundColor = array_slice($colors, 0, $numCategories);
        $borderColor = array_slice($colors, 0, $numCategories);



    @endphp





        // Gráfico de barras
        var barChart = new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: ['Clientes', 'Eventos', 'Empleos', 'Servicios', 'Cursos'],
                datasets: [{
                    label: ['Clientes', 'Eventos', 'Empleos', 'Servicios', 'Cursos'],
                    data: [
                        {{ $CountCL }},
                        {{ $CountEv }},
                        {{ $CountEmp }},
                        {{ $CountServ }},
                        {{ $CountCurs }}
                     ],
                     backgroundColor: [
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(153, 102, 255, 0.5)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // Gráfico de pastel
        var pieChart = new Chart(document.getElementById('pieChart'), {
            type: 'pie',
            data: {
                labels:@json($labels),
                datasets: [{
                    data: @json($data),
                    backgroundColor: @json($backgroundColor) ,
                    borderColor: @json($borderColor),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true

            }
        });

        // Gráfico de líneas
        var lineChart = new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Ingresos',
                    data: [generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber()],
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // Gráfico de radar
        var radarChart = new Chart(document.getElementById('radarChart'), {
            type: 'radar',
            data: {
                labels: ['Ventas', 'Marketing', 'Finanzas', 'Operaciones', 'Recursos Humanos'],
                datasets: [{
                    label: 'Valores',
                    data: [generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber()],
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico de área
        var areaChart = new Chart(document.getElementById('areaChart'), {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Usuarios',
                    data: [generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber()],
                    backgroundColor: 'rgba(153, 102, 255, 0.5)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // Gráfico de dispersión
        var scatterChart = new Chart(document.getElementById('scatterChart'), {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'Datos',
                    data: [
                        { x: generateRandomNumber(), y: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber() }
                    ],
                    backgroundColor: 'rgba(255, 159, 64, 0.5)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'linear',
                        position: 'bottom'
                    },
                    y: {
                        type: 'linear',
                        position: 'left'
                    }
                }
            }
        });

        // Gráfico de burbujas
        var bubbleChart = new Chart(document.getElementById('bubbleChart'), {
            type: 'bubble',
            data: {
                datasets: [{
                    label: 'Datos',
                    data: [
                        { x: generateRandomNumber(), y: generateRandomNumber(), r: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber(), r: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber(), r: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber(), r: generateRandomNumber() },
                        { x: generateRandomNumber(), y: generateRandomNumber(), r: generateRandomNumber() }
                    ],
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'linear',
                        position: 'bottom'
                    },
                    y: {
                        type: 'linear',
                        position: 'left'
                    }
                }
            }
        });

        // Gráfico polar
        var polarChart = new Chart(document.getElementById('polarChart'), {
            type: 'polarArea',
            data: {
                labels: ['Rojo', 'Azul', 'Amarillo', 'Verde', 'Naranja'],
                datasets: [{
                    data: [generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber()],
                    backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(255, 159, 64, 0.5)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Función para generar un número aleatorio entre 0 y 100
        function generateRandomNumber() {
            return Math.floor(Math.random() * 100);
        }
    </script>
</body>
</html>
<x-footer />
