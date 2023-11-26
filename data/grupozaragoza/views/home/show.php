<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetalleUsu</title>
</head>
<body>
    <h1>Detalle de Usuario</h1>
    <table>
        <tr>
            <th>Identificador</th>
            <th>Nombre usuario</th>
        </tr>
        <tr>
            <td><?php echo $user[0]?></td>
            <td><?php echo $user[1]?></td>
        </tr>
    </table>
    <br>
    <a href="?method=index">Volver a la lista de usuarios</a>
</body>
</html>


    