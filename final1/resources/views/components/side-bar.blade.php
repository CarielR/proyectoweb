<html>
<link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css%22%3E">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white ">
            <div class="container">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  <a href="{{ url('/home#') }}">
					          <img src="{{ asset('img/AW.png') }}" alt="" class="log" >		
                 </a>			
					@auth()
                    <ul class="navbar-nav mr-auto">
					<a>ANALYTIKA WOMEN</a>
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
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/cursoscaps') }}" class="nav-link active"><i class="fab fa-laravel text-info"></i> Cursos</a> 
                <a href="{{ url('/servicios') }}" class="nav-link active"><i class="fab fa-laravel text-info"></i> Servicios</a>  
                <a href="{{ url('/empleos') }}" class="nav-link active"><i class="fab fa-laravel text-info"></i> Empleos</a>       
                <a href="{{ url('/eventos') }}" class="nav-link active"><i class="fab fa-laravel text-info"></i> Eventos</a>     
                <a href="{{ url('/clientes') }}" class="nav-link active"><i class="fab fa-laravel text-info"></i> Clientes</a>   
                <a href="{{ url('/generos') }}" class="nav-link active"><i class="fab fa-laravel text-info"></i> Generos</a> 
              </li> 
            </ul>
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> 
  @livewireScripts
    <script type="module">
        const addModal = new bootstrap.Modal('#createDataModal');
        const editModal = new bootstrap.Modal('#updateDataModal');
        window.addEventListener('closeModal', () => {
           addModal.hide();
           editModal.hide();
        })
    </script> 
  </body>
  </html>
  