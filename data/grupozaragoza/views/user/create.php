<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crear Nuevo Usuario</h1>

    <form action="/user/store" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="surname">Apellido:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="birthdate">Fecha de Nacimiento:</label>
        <input type="date" id="birthdate" name="birthdate" required>

        <button type="submit" class="enviar">Enviar</button>

        <br>
        <br>
        <br>
        <a href="/user">Volver a la lista de usuarios</a>
    </form>
</body>

</html>
