<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('ejemplo')}}" method="post">
        @csrf
        <input type="text" name="nombres" placeholder="Nombres">
        <input type="numeric" name="edad" placeholder="Edad">
        <input type="numeric" name="tipo_documento" placeholder="Tipo Documento">
        <input type="numeric" name="documento" placeholder="Documento">
        <input type="submit" value="agregar">

    </form>
</body>
</html>