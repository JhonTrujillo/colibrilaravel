@extends("app")
@section("header")
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section("contenido")



<section>
      <div class="formlogin">
        <form action="">
            <img src="{{asset('images/login.png')}}" alt="logo">
            <input type="" placeholder="Digite su usuario">
            <input type="password" placeholder="Digite su contraseña">
            <button type="submit">Iniciar Sesion</button>
            <div class="recordarcontraseña">
                <input type="checkbox" name="recordar">
                <label for="recordar">Recordar Contraseña</label>
            </div>
        </form>
      </div>
    </section>
@endsection