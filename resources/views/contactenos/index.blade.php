@extends("app")
@section("header")
<link rel="stylesheet" href="{{asset('css/contactenos.css')}}">
@endsection
@section("contenido")
<hr>
        <h3>Listado contactos</h3>
        <table >
            <tr>
                <td>ID</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Cedula</td>
                <td>Correo</td>
                <td>Usuario</td>
                <td>Observaciones</td>
                <td>Fecha Creacion</td>
                <td>Fecha Actualizacion</td>
                <td>Opciones</td>
            </tr>
            @foreach ($datos as $dato)
             <tr>
                <td>{{$dato->id}}</td>
                <td>{{$dato->nombres}}</td>
                <td>{{$dato->apellidos}}</td>
                <td>{{$dato->cedula}}</td>
                <td>{{$dato->correo}}</td>
                <td>{{$dato->usuario}}</td>
                <td>{{$dato->observaciones}}</td>
                <td>{{$dato->created_at}}</td>
                <td>{{$dato->updated_at}}</td>
                <td><a href="{{route("contactenos.show", ["contacteno"=>$dato->id])}}" target="blank">Ver registro</a></td>                
                <td><form action="{{route("contactenos.destroy", ["contacteno"=>$dato->id])}}" method="post">
                    @method("delete")
                    @csrf
                    <input type="submit" value="Eliminar" id="btneliminar">
                </form></td>
            </tr>
            @endforeach
        </table>
@endsection