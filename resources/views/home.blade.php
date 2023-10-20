@extends("app")
@section("contenido")
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
@endsection