<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CuerpoEjercito</title>
</head>
<body>
    
    <h1>Formulario</h1>

    <form action="{{route('barracks.ss')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
        Ingrese el nombre del cuartel:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Ingrese la ubicacion del cuartel:
        <br>
        <input type="text" name="location">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario:</button>
    </form>

</body>
</html>