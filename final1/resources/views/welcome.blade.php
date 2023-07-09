
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Analytika Women</title>
  <link rel="icon" type="image/png" href="img/AW.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description"> 

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            .logIn{
                
                padding: 2px;
                text-align: right;
            }
            .logIn a{
                color: white;
                font-size: 18px;
                padding: 20px;
                margin: 5px;
            }
            .logIn a:hover{
                color: #f70abb;
                padding: 20px;
                margin: 5px;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

   

    </head>
    <body class="antialiased">
       
 <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">

      <div class="logIn">
            @if (Route::has('login'))
                <div >
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>     


        <ul class="nav-menu">
          <li class="menu-active"><a href="#Home">Home</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#culture">Cultura Organizacional</a></li>         
          <!-- <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li> -->
          <img src="img/AW.png" alt="" title="" class="logoAW"/></img>
          
          <li><a href="#testimonials">Socias-Accionistas</a></li>
          <li><a href="#contact">Contactos</a></li>

          <!-- <div class="container">
            <div id="logo" >
              <a href="#hero"><img src="img/AW.png" alt="" title="" /></img></a>              
            </div> -->

           
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section class="centralimg" id="Home">   
    <img src="img/central.jpg" alt="">
    <div class="text-containerC">
      <p class="typing-effect" style="color: aliceblue;">Transformamos datos en información para la toma de 
        desiciones.</p>
        <br>
    </div>
  </section>


  <section id="about">     
    <br><br><br><br><br><br>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"><img src="img/quienessomos.png" alt="" width="50px" style="margin: 10px;"><span style="color: rgba(255, 9, 222, 0.863);">¿</span> Quiénes somos <span style="color: rgba(255, 9, 222, 0.863);">?</span></h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Somos una empresa conformada por un grupo multidisciplinario de mujeres profesionales de diferentes provincias del país, con una trayectoria importante de trabajo y experiencias en empresas públicas y privadas; tenemos un recorrido amplio de trabajo social 
            con grupo de atención prioritaria.</p>
            <p class="section-description">Somos multifacéticas y creemos que la mujer está preparada para hacer que las cosas sucedan.</p>
        </div>
      </div>
      <br><br><br><br><br><br>
    </div>

    <div class="section-title-divider"></div> <!--Linea de divicion-->


    <!--Mison y vision-->
    
    <div class="MV">
      <img src="img/vision.png" alt="Imagen" class="visionmision">
      <div class="text-containerMV">
        <h1 class="h1VM">Visión</h1>
        <p class="texMV">Ser una compañía ecuatoriana eferente en el ámbito de la investigación financiera, económica,
          social y política, aportando al bienestar y desarrollo humano, cumpliendo estándares de calidad,
          buenas prácticas y aplicando metodologías innovadoras en la investigación y análisis de información.</p>
      </div>

      <img src="img/enfocar.png" alt="Imagen" class="visionmision">
      <div class="text-containerMV">
        <h1 class="h1VM">Misión</h1>
        <p class="texMV">Transformar data en información mediante conceptos innovadores y ágiles,
        para que las organizaciones e instituciones públicas y privadas,cuenten con las mejores 
        soluciones en la toma de decisiones a nivel técnico, económico, político y social; considerando
        enfoques de tipo intergeneracional, intersectorial, intercultural, ambiental, de género y movilidad. </p>
      </div>
    </div>  

  </section>

  <!--==========================
  Lider Section
  ============================-->
  <section id="services">
    <br><br><br><br>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nuestra Lider</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Nombre</p>
        </div>
      </div>

      <div class="MV">
                 <img src="img/lider.png" alt="Imagen" class="vibrating-image">
           <div class="text-containerMV">         
                  <p class="texlider"><span style="color: rgba(255, 9, 222, 0.863);">"</span>Las mujeres debemos prepararnos constantemente en diferentes áreas del conocimiento, para aprovechar las oportunidades y enfrentar los desafíos<span style="color: rgba(255, 9, 222, 0.863);">"</span></p>
           </div> 
      </div>
       
  </section>

  <!--==========================
  Modelo de negocios
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Nuestro modelo de negocios</h3>
          <p class="subscribe-text">El modelo de negocio de Analytika Women está orientado a generar información para la toma de
            decisiones en:  Instituciones Públicas, Privadas y ONGs.
            </p>
        </div>        
      </div>
    </div>
  </section>

  <!--==========================
  cultura organizacional
  ============================-->
  <section id="culture">    
    <br><br><br>
    <div class="hero"> 
      
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Cultura Organizacional</h3>
            <div class="section-title-divider"></div>
            <div class="imcl">
            <img src="img/stud.jpg" alt="" class="resized-image"> 
          </div>
            <p style="font-size: 20px; color: rgb(0, 0, 0);">Nuestra empresa promueve la cultura de
              la integridad personal, para proponer
              las mejores alternativas frente a las
              necesidades o requerimientos
              solicitados; para lo cual nos apoyamos
              de un equipo multidisciplinario de
              profesionales con equidad de género.</p>
              <br>
          </div>
        </div>      
            
            </a>          
              
      </div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
    </div>   
    
  </section>

  <!--==========================
  Accionistas
  ============================-->
  <section id="testimonials">
    
    <br><br><br><br><br>
    
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Socias - Accionistas</h3>
          <div class="section-title-divider"></div>          
        </div>
      </div>
      <!-- SOCIA1 -->
      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/accionistas1.png" alt=""></div>
            <h4>Ing. Sara Yánez, Msc.</h4>
            <span>Gerente General</span>
          </div>
        </div>

        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Ingeniera en Sistemas ESPE y UDLA. Maestría en Evaluación de la Política Pública IAEN. Egresada de la Maestría Dirección de Proyectos UESS. Diplomado en:
            Gobernanza y Liderazgo Político, Políticas Públicas, Liderazgo local IDE Bussines Scholl. Diplomado en Liderazgo de los ODS SODECTEC Argentina. Fundadora y
            presidenta de la Red de Profesionales de Cotopaxi.  Fundadora y ex presidenta de la Red Nacional de Apoyo a la Mujer Ecuatoriana (RENAME). Cofundadora de
            la Red de Gobierno Abierto Ecuador. Designada como Facilitadora de la Red de Economía Violeta de Ecuador. <br><br>
            Experiencia en Desarrollo de software para la banca privada: PRODUBANCO y Banco Pichincha. Análisis de bases de datos de Instituciones Públicas. Desarrollo
            de proyectos sociales con organizaciones de mujeres y grupos vulnerables, Coordinación con la academia para el desarrollo de aplicaciones informáticas, que
            servirán para potencializar el emprendimiento y promover el turismo sostenible, la gastronomía y cultura comunitaria del Ecuador. Desarrollo de Capacitaciones
            y Formación Continua en temas de economía, gobernanza y política. Apoyo en la elaboración del plan de Gobierno Abierto de Ecuador 2019-2022. Miembro
            del Consejo Consultivo de las Negociaciones de la Unión Europea con Ecuador 2018 – 2021. Actualmente, apoyando en la Mesa de Justicia Abierta de Ecuador y
            del grupo de Ciencia Abierta de Ecuador.  <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>
      
      <br>
      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Arquitecta con maestría en Dirección de Proyectos.  Certificación en Prevención de riesgos laborales: construcción y obras públicas. Cursando Diplomado en
            Gestión de Empresas Constructoras, de Arquitectura e Inmobiliarias. Estudios en liderazgo y productividad.  <br><br>  
            Experiencia en fiscalización de obras civiles e infraestructura urbana. Desarrollo de estudios de consultoría de arquitectura e ingeniería. Coordinadora y
            parte del equipo de proyectos de consultoría de ingeniería en el ámbito de infraestructura sanitaria en entidades públicas. Manejo de equipos
            multidisciplinarios.Desarrollo y evaluación de proyectos. Coordinación y desarrollo de estudios socioeconómicos y de mercado para consultorías de
            infraestructura sanitaria, vías y regeneración urbana. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/accionistas2.png" alt=""></div>
            <h4>Arq. Carolina Ramos Pinto, Msc.</h4>
            <span>Presidenta</span>
          </div>
        </div>
      </div>


      <br>
      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/accionistas3.png" alt=""></div>
            <h4>Ec. Carmen López Saravia</h4>
            <span>Directora Financiera</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Economista UCE. Socia del Colegio de Economistas de Pichincha. Profesional orientada a objetivos y metas medibles. Certificación en Resiliencia Laboral,
            habilidades blandas y atención al cliente (Enfoque en la norma ISO 9001-2015). Certificación Internacional en Hubspot. Escuela de formadores y capacitadores
            banco del Pacífico. <br><br> 
            Experiencia: Elaboración de Presupuestos comerciales y determinación del mercado objetivo. Manejo operacional, Digital, Ventas Inbound. Comercio electrónico y
            de servicios. Elaboración de lineamentos comerciales con aplicación nacional. Diseño y manejo de indicadores comerciales y de productividad.Captación y
            mantenimiento de socios corporativos. Formular y evaluar planes para  la implementación de estrategias comerciales. Gestión área comercial (Instituciones
            Financieras y Aseguradoras).  Dirección de equipos comerciales de alto rendimientos. Capacitaciones y talleres en ventas, liderazgo, motivación, trabajo en equipo,
            servicio al cliente.  <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--==========================
  Team Section
  ============================-->
  <section id="contact">
    <br><br><br>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contactos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">"Individualmente somos una gota,
            juntos formamos un océano"
            <br>Ryunosuke Satoro </p>
        </div>
      </div>

      <div class="row">

        <div class="team">
          <div class="member">
            <div class="left-content">
              <h4>Teléfonos</h4>
              <span>0999785416</span>
              <span>0990902380</span>
              <br><br>
              <h4>Email</h4>
              <span>analytikawomen@gmail.com</span>
            </div>
            <div class="right-content">
              <img src="img/contact.png" alt="Imagen de ejemplo">
            </div>
          </div>
        </div>
        
       

      </div>
    </div>
  </section>

  

  <!--==========================
  Footer
============================-->
@section('Footer')
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Analytika Women</strong>. All Rights Reserved
          </div>
          <div class="credits">        
            <a href="#Home">Analytika Women</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->
  @endsection 
  <x-footer /> 

    </body>
</html>
