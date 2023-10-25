@extends("app")
@section("header") 

@endsection 
@section("contenido")

<link rel="stylesheet" href="{{asset('css/quienessomos.css')}}">

<!-- los styles de las class mision, vision, valores se encuentran en quienessomos.html -->
<section>
        <div class="mision">
        <img src="{{asset('images/mision.png')}}" alt="mision">
        <p>El Liceo los colibris es una institución educativa privada, de carácter mixto que ofrece una formación integral a sus estudiantes, soportada en el acompañamiento personalizado y bajo una concepción humanista, fundamentada en la vivencia de valores, principios éticos y desarrollo de los procesos de pensamiento a través de las inteligencias múltiples, el trabajo cooperativo y el aprendizaje basado en proyectos.</p> 
        </div>
        <div class="vision">
            <img src="images/vision.png" alt="vision">
            <p>El Liceo los Colibris será una institución educativa reconocida por su liderazgo en el desarrollo de procesos educativos sustentados en las TIC y la innovación, que mediante la implementación de las metodologías activas, esto es, articulando el trabajo cooperativo con el aprendizaje basado en proyectos, forma ciudadanos con capacidad de adaptación a las exigencias del mundo globalizado de hoy.</p> 
        </div>
        <div class="valores">
            <img src="images/valores.png" alt="valores">
            <p>El Liceo Los Colibris tiene dentro de su filosofía la vivencia de los siguientes valores que le son propios a su misión y que identifican a cada integrante de la comunidad educativa:
                <br> <h3>RESPETO:</h3> El respeto por la autonomía del individuo, que se sustenta esencialmente en el respeto de la capacidad que tienen las personas para su autodeterminación en relación con las determinadas opciones individuales de que disponen.
                <br> <h3>RESPONSABILIDAD:</h3> Es un valor que está en la conciencia de la persona, que le permite reflexionar, administrar, orientar y valorar las consecuencias de sus actos, establece la magnitud de dichas acciones y de cómo afrontarlas de la manera más positiva e integral.
                <br> <h3>HONESTIDAD:</h3> Es un valor que consiste en actuar de acuerdo como se piensa y se siente. Se refiere a la cualidad con la cual se designa a aquella persona que se muestra, tanto en su obrar como en su manera de pensar, como justa, recta e íntegra.
                <br> <h3>SOLIDARIDAD</h3> La solidaridad se entiende como la capacidad de entregarse a otros individuos pensando en estos como semejantes para tomar conciencia de la necesidad de compartir la historia con el otro, entendiendo que tengo un aporte para hacer al desarrollo social.
                <br> <h3>ESPIRITUALIDAD:</h3> Este valor nos ayuda a desarrollar valores humanos y cristianos; a la búsqueda permanente entre fe, cultura y vida, dando testimonio de nuestras creencias y de nuestro amor por todos los hombres.
            </p> 
            </div>
    </section>
 @endsection  
  