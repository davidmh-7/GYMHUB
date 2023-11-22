<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar PesoData</title>
</head>
<body>
 
        <form action="{{ route('dashboard.actualizar', ['PesoData' => $PesoData->id]) }}" method="post">
            @csrf
            @method('PUT')
            <label for="nombre">id:</label>
            <input type="text" id="id" name="id" value="{{ $PesoData->id }}"><br>

            <label for="nombre">Peso:</label>
            <input type="text" id="peso" name="Peso" value="{{ $PesoData->Peso }}"><br>

            <label for="Series">Series:</label>
            <input type="text" id="series" name="series" value="{{ $PesoData->series }}"><br>

            <label for="Repeticiones">Repeticiones:</label>
            <input type="text" id="repeticiones" name="repeticiones" value="{{ $PesoData->repeticiones }}"><br>

            <label for="apellido">pesoTotal:</label>
            <input type="text" id="pesoTotal" name="pesoTotal" value="{{ $PesoData->pesoTotal }}"><br>

            <button type="submit">Guardar</button>
        </form>

</body>
</html>
