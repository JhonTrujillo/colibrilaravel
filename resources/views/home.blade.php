<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liceo Colibris</title>
  <link rel="icon" type="image/jpg" href="app\resources\css\images\logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="styles/main.css"> -->
  <link rel="stylesheet" href="app/resources/css/home.css">
  <script src="https://kit.fontawesome.com/e425e7a0eb.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- los styles de header, footer se encuentran en main.css -->
  <header id="arriba">
    <!-- Titulo logo login   -->
    <h3 class="titulo">Liceo Colibris</h3>
    <a href="index.html" id="imglogo"><img id="logo" src="images/logo.png" alt="logo"></a>
    <a href="login.html" id="imglogin"><img id="login" src="images/login2.jpg" alt="login"></a>
    <!-- Barra de navegacion menu desplegable     -->
    <nav id="barranav">
      <ul class="enlaces-menu">
        <li><a href="quienessomos.html">Quienes Somos</a></li>
        <li><a href="contacto.html">Contactenos</a></li>
        <li><a href="#">Horarios</a>
          <ul>
            <li><a href="horarios.html">Horario Primaria</a></li>
            <li><a href="horarios.html">Horario Primaria</a></li>
            <li><a href="horarios.html">Horario Primaria</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- division botones mostrar/ocultar -->
    <div>
      <button id="btmostrar" onclick="mostrar();">Mostrar</button>
      <button id="btocultar" onclick="ocultar();">Ocultar</button>
    </div>
    <div class="ctn-buscador">
      <!-- Espacio del buscador -->
      <input type="text" name="buscador" id="buscador" placeholder="¿Que desea buscar?" onkeypress="capturaTecla(event)">
      <!-- el metodo onclick ejecuta la funcion realizarBusqueda que se encuentra en buscador.js -->
      <button onclick="realizarBusqueda()"><i class="fa-solid fa-magnifying-glass"></i></button>
      <div id="listadoBusqueda"></div>
    </div>
  </header>
  <!-- division del carrusel insertado por bootstrap   -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Respeto</h5>
          <p>El respeto por la autonomía del individuo, que se sustenta esencialmente en el respeto de la capacidad que
            tienen las personas para su autodeterminación en relación con las determinadas opciones individuales de que
            disponen.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Responsabilidad</h5>
          <p>Es un valor que está en la conciencia de la persona, que le permite reflexionar, administrar, orientar y
            valorar las consecuencias de sus actos, establece la magnitud de dichas acciones y de cómo afrontarlas de la
            manera más positiva e integral.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banner3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Honestidad</h5>
          <p>Es un valor que consiste en actuar de acuerdo como se piensa y se siente. Se refiere a la cualidad con la
            cual se designa a aquella persona que se muestra, tanto en su obrar como en su manera de pensar, como justa,
            recta e íntegra.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- division de las card       -->
  <div class="card" id="contcard">
  </div>
  <!-- division noticias       -->
  <div class="noticia">
    <p>Ultimas Noticias</p>
    <p>
      <a class="btn btn-secondary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
        aria-expanded="false" aria-controls="multiCollapseExample1">Noticias</a>
      <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2"
        aria-expanded="false" aria-controls="multiCollapseExample2">Reuniones</button>
      <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse"
        aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Alternar</button>
    </p>
    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam iste cupiditate eligendi ullam a minus
            rerum incidunt ex dolore expedita labore maiores suscipit officiis, quaerat velit atque dolorum. Officiis,
            nulla!
          </div>
        </div>
      </div>
      <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card card-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore unde ullam consectetur, maxime tempora
            alias perferendis eligendi atque nulla culpa hic praesentium nam saepe libero? Corporis mollitia recusandae
            atque distinctio.
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="conteventos">
    <h3>Eventos que Cambian la vida </h3>
    <div class="evento">
      <p id="event1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit ipsa assumenda vero tempore,
        mollitia voluptatum excepturi inventore sunt iure, omnis illo unde quo ad tenetur perferendis voluptas
        laudantium, laboriosam fugiat?</p>
      <p id="event2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi cum ducimus odit dolorum
        quaerat, magnam amet rem quisquam. Deserunt ex et harum sapiente quidem atque distinctio error repudiandae ab
        asperiores!</p>
    </div>
  </div>
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
        <img id="instagram" src="images/instagram.png" alt="logo">
      </a>
      <a href="https://www.facebook.com/" target="_blank">
        <img id="facebook" src="images/facebook.png" alt="logo">
      </a>
      <a href="https://www.twitter.com/" target="_blank">
        <img id="twitter" src="images/twitter.png" alt="logo">
      </a>
      <a href="#arriba" target="" id="subir">
        <img src="images/arriba.svg" alt="arriba" height="50px" width="50px">
      </a>
      <address id="correo">Email: Liceocolibris@edu.com</address>
      <p>Copyrigth &copy; Liceo los Colibris por Luxur90</p>
    </div>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <script src="js/card.js"></script>
  <script src="js/buscador.js"></script>
  <script src="js/busqueda.js"></script>
</body>

</html>