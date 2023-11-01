<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liceo Colibris</title>
  <!-- <link rel="icon" type="image/jpg" href="{{asset('images/artistica.png')}}" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <script src="https://kit.fontawesome.com/e425e7a0eb.js" crossorigin="anonymous"></script>
  @yield("header")
</head>
<body>
  <!-- los styles de header, footer se encuentran en main.css -->
  <header id="arriba">
    <!-- Titulo logo login   -->
    <h3 class="titulo">Liceo Colibris</h3>
    <a href="{{url('home2')}}" id="imglogo"><img id="logo" src="{{asset('images/logo.png')}}" alt="logo"></a>
     <!-- Authentication Links
     @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
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
                        @endguest -->
  <a href="{{url('login')}}" id="imglogin"><img id="login" src="{{asset('images/login.png')}}"></a>
    <!-- Barra de navegacion menu desplegable     -->
    <nav id="barranav">
      <ul class="enlaces-menu">
        <li><a href="{{url('quienessomos')}}">Quienes Somos</a></li>
        <li><a href="{{url('contactenos')}}">Contactenos</a></li>
        <li><a href="">Horarios</a>
          <ul>
            <li><a href="horarios.html">Horario Primaria</a></li>
            <li><a href="horarios.html">Horario Primaria</a></li>
            <li><a href="horarios.html">Horario Primaria</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- division botones mostrar/ocultar -->
    <!-- <div>
      <button id="btmostrar" onclick="mostrar();">Mostrar</button>
      <button id="btocultar" onclick="ocultar();">Ocultar</button>
    </div> -->
    <div class="ctn-buscador">
      <!-- Espacio del buscador -->
      <input type="text" name="buscador" id="buscador" placeholder="¿Que desea buscar?" onkeypress="capturaTecla(event)">
      <!-- el metodo onclick ejecuta la funcion realizarBusqueda que se encuentra en buscador.js -->
      <button onclick="realizarBusqueda()"><i class="fa-solid fa-magnifying-glass"></i></button>
      <div id="listadoBusqueda"></div>
    </div>
  </header>
  @yield("contenido")
  <footer>
    <div class="agenda">
      <h3>¿Listo para comenzar tu gira escolar?</h3>
      <p>Agenda tu cita con nuestro personal <a href="contacto.html">Click aqui</a></p>
    </div>
    <div class="caja">
      <h3>Acerca del liceo</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum id sed temporibus quidem eaque, voluptas
        at facere molestiae facilis rem quisquam excepturi ab voluptatem itaque iure, sint assumenda, quaerat
        perferendis.</p>
    </div>
    <div class="caja">
      <h3>Nuestros Programas</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum id sed temporibus quidem eaque, voluptas
        at facere molestiae facilis rem quisquam excepturi ab voluptatem itaque iure, sint assumenda, quaerat
        perferendis.</p>
    </div>
    <div class="caja">
      <h3>Documentos y ayuda</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum id sed temporibus quidem eaque, voluptas
        at facere molestiae facilis rem quisquam excepturi ab voluptatem itaque iure, sint assumenda, quaerat
        perferendis.</p>
    </div>
    <div class="caja">
      <h3>Mantente en contacto</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum id sed temporibus quidem eaque, voluptas
        at facere molestiae facilis rem quisquam excepturi ab voluptatem itaque iure, sint assumenda, quaerat
        perferendis.</p>
    </div>
    <div class="redes">
      <h3 id="siguenos">Siguenos</h3>
      <a href="https://www.instagram.com/" target="_blank">
        <img id="instagram" src="{{asset('images/instagram.png')}}" alt="logo">
      </a>
      <a href="https://www.facebook.com/" target="_blank">
        <img id="facebook" src="{{asset('images/facebook.png')}}" alt="logo">
      </a>
      <a href="https://www.twitter.com/" target="_blank">
        <img id="twitter" src="{{asset('images/twitter.png')}}" alt="logo">
      </a>
      <a href="#arriba" target="" id="subir">
        <img src="{{asset('images/arriba.png')}}" alt="arriba" height="50px" width="50px">
      </a>
      <address id="correo">Email: Liceocolibris@edu.com</address>
      <p>Copyrigth &copy; Liceo los Colibris por Luxur90</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="{{asset('js/index.js')}}"></script>
  <script src="{{asset('js/card.js')}}"></script>
  <script src="{{asset('js/buscador.js')}}"></script>
  <script src="{{asset('js/busqueda.js')}}"></script>
</body>

</html>