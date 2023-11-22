<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar peso</title>
</head>
<body>

    <form method="POST" action="/dashboard">
        @csrf
        <label for="nombre">Peso:</label>
        <input type="text" id="peso" name="Peso"><br>

        <label for="Series">Series:</label>
        <input type="text" id="series" name="series"><br>

        <label for="Repeticiones">Repeticiones:</label>
        <input type="text" id="repeticiones" name="repeticiones"><br>

        <label for="apellido">pesoTotal:</label>
        <input type="text" id="pesoTotal" name="pesoTotal"><br>

        <button type="submit">Guardar</button>
    </form>
    
</body>
</html>