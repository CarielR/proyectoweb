      <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

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
</style>
@vite(['resources/js/app.js'])
@livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<nav class="navbar navbar-expand-md navbar-light bg-white ">
            <div class="container">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					<img src="{{ asset('img/AW.png') }}" alt="" class="log">					
					@auth()
                    <ul class="navbar-nav mr-auto">
						<!--Nav Bar Hooks - Do not delete!!-->
						<li class="nav-item">
                            <a href="{{ url('/cursoscaps') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Cursoscaps</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/servicios') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Servicios</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/empleos') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Empleos</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/eventos') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Eventos</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/clientes') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Clientes</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/generos') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Generos</a> 
                        </li>
                    </ul>
					@endauth()

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                
                            @endif

                            @if (Route::has('register'))
                               
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<div class="wrapper">

 
  <!-- Main Sidebar Container -->
  <aside  class="main-sidebar " style=" background-color: #DEBED3; ">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <br>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sexo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
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
</body>
</html> 
<x-footer /> 