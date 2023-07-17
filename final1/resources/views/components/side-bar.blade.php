<html>
<link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css%22%3E">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href="css/desplegable.css" rel="stylesheet">

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
                    <a href="{{ route('home') }}">
					<img href="" src="{{ asset('img/AW.png') }}" alt="" class="log">
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
      <ul class="menu-horizontal">


      <ul class="list">


<li class="list__item list__item--click">
    <div class="list__button list__button--click">
        <img src="assets/dashboard.svg" class="list__img">
        <a href="#" class="nav__link">CATEGORIAS</a>
        <img src="assets/arrow.svg" class="list__arrow">

    </div>

    <ul class="list__show">
    <li><a href="{{ url('/servicios') }}" ><i class=""></i> Servicios</a></li>
    <li><a href="{{ url('/eventos') }}" ><i class=""></i> Eventos</a></li>
    <li><a href="{{ url('/empleos') }}" ><i class=""></i> Empleos</a></li>
    <li><a href="{{ url('/generos') }}" ><i class=""></i> Generos</a> </li>
    <li><a href="{{ url('/clientes') }}" ><i class=""></i> Clientes</a></li>
    </ul>

</li>


<li class="list__item list__item--click">
    <div class="list__button list__button--click">
        <img src="assets/bell.svg" class="list__img">
        <a href="#" class="nav__link">REPORTES</a>
        <img src="assets/arrow.svg" class="list__arrow">
    </div>

    <ul class="list__show">
        <li class="list__inside">
            <a href="{{ route('generar-pdf') }}" class="nav__link nav__link--inside">Clientes</a>
        </li>

        <li class="list__inside">
            <a href="{{ route('generar-pdfempleo') }}" class="nav__link nav__link--inside">Empleos</a>
        </li>

        <li class="list__inside">
            <a href="{{ route('generar-pdfcursos') }}" class="nav__link nav__link--inside">Cursos</a>
        </li>

        <li class="list__inside">
            <a href="{{ route('generar-pdfevento') }}" class="nav__link nav__link--inside">Eventos</a>
        </li>

        <li class="list__inside">
            <a href="{{ route('generar-pdfcursos') }}" class="nav__link nav__link--inside">Servicios</a>
        </li>
    </ul>
</li>

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
        <script src="main.js"></script>

  </body>
  </html>
