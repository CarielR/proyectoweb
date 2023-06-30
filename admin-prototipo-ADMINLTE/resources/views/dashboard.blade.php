@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Gráfico de barras</h3>
                </div>
                <div class="box-body">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Gráfico de pastel</h3>
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
@stop

@section('adminlte_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css">
@stop
<!-- asdasd -->
@section('adminlte_js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script>
        // Gráfico de barras
        var barChart = new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Ventas',
                    data: [generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber()],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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
                labels: ['Rojo', 'Azul', 'Amarillo', 'Verde', 'Naranja'],
                datasets: [{
                    data: [generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber(), generateRandomNumber()],
                    backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(255, 159, 64, 0.5)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)'],
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
@stop
