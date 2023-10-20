@extends("app")
@section("formulariocontactenos")
<link rel="stylesheet" href="{{asset('css/contactenos.css')}}">

<h3>Contactame</h3>
        <form action="" class="formulario">
            <!-- Grupo Nombres -->
            <div class="formulario_grupo" id="grupo_nombres">
                <label for="nombres" class="formulario_label">Nombres</label>
                <div class="formulario_grupo_input">
                    <input type="text" class="formulario_input" id="nombres" name="nombres" placeholder="Pepito">
                    <i class="formulario_validacion_estado fa-regular fa-circle-xmark"></i>
                    <p class="formulario_input_error" id="error_nombres">Los nombre tienes un maximo de 60 caracteres</p>
                </div>
                 </div>

            <!-- Grupo Apellido -->
            <div class="formulario_grupo" id="grupo_apellidos">
                <label for="apellidos" class="formulario_label">Apellidos</label>
                <div class="formulario_grupo_input">
                    <input type="text" class="formulario_input" id="apellidos" name="apellidos" placeholder="Perez">
                    <i class="formulario_validacion_estado fa-regular fa-circle-xmark"></i>
                    <p class="formulario_input_error" id="error_apellidos">Los apellidos tiene un maximo de 60 caracteres</p>
                </div>
            </div>


            <!-- Grupo Identificacion -->
            <div class="formulario_grupo" id="grupo_identificacion">
                <label for="identificacion" class="formulario_label">Cedula</label>
                <div class="formulario_grupo_input">
                    <input type="text" class="formulario_input" id="identificacion" name="identificacion"
                        placeholder="123456789">
                    <i class="formulario_validacion_estado fa-regular fa-circle-xmark"></i>
                    <p class="formulario_input_error">usar solo numeros</p>
                </div>
            </div>


            <!-- Grupo Correo -->
            <div class="formulario_grupo" id="grupo_correo">
                <label for="correo" class="formulario_label">Correo</label>
                <div class="formulario_grupo_input">
                    <input type="text" class="formulario_input" id="correo" name="correo"
                        placeholder="pepitoperez@dominio.com">
                    <i class="formulario_validacion_estado fa-regular fa-circle-xmark"></i>
                    <p class="formulario_input_error" id="error_correo">El correo solo puede contener letras, numeros, puntos, guiones,
                        guiones bajo.</p>
                </div>
            </div>

            <!-- Grupo Usuario -->
            <div class="formulario_grupo" id="grupo_usuario">
                <label for="usuario" class="formulario_label">Usuario</label>
                <div class="formulario_grupo_input">
                    <input type="text" class="formulario_input" id="usuario" name="usuario" placeholder="Pepito90">
                    <i class="formulario_validacion_estado fa-regular fa-circle-xmark"></i>
                    <p class="formulario_input_error" id="error_usuario">Usuario de 4 a 25 digitos y solo puede contener
                        numeros, letras, guion bajo</p>
                </div>
            </div>

            <!-- Grupo Observaciones -->
            <div class="formulario_grupo" id="grupo_observaciones">
                <label for="observaciones" class="formulario_label">observaciones</label>
                <div class="formulario_grupo_input">
                    <textarea name="" id="observaciones" cols="75" rows="5"></textarea>
                    <i class="formulario_validacion_estado fa-regular fa-circle-xmark"></i>
                    <p class="formulario_input_error" id="error_observaciones">Cantidad maxima 200 caracteres</p>
                </div>
            </div>
            <!-- grupo boton -->
            <div class="formulario_grupo grupo_boton">
                <button type="submit" class="formulario_boton" id="btnvalidar" onclick="validar(event)">Enviar</button>
                <p class="formulario_input_error" id="mensaje_exito">Formulario enviado exitosamente</p>
            </div>
            <!-- grupo Mensaje -->
            <div class="formulario_mensaje">
                <p class="formulario_input_error"  id="error_vacios"><i class=" fa-solid fa-triangle-exclamation"></i><br>Error: </br>Por favor deligencias el formulario correctamente.</p>
                <!-- <i class=" fa-solid fa-triangle-exclamation"></i><br>Error: </br> -->
            </div>
        </form>
@endsection        