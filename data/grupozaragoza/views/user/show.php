<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetalleUsu</title>
</head>

<body>
    <h1>Detalle del usuario <?php echo $user->id ?> </h1>
    <ul>
        <li>Nombre <?php echo $user->name?></li>
        <li>Apellido <?php echo $user->surname?></li>
        <li>Email <?php echo $user->email?></li>
        <li>F.Nacimiento <?php echo $user->birthdate?></li>
    </ul>
    <br>
    <a href="/user">Volver a la lista de usuarios</a>
</body>

</html>