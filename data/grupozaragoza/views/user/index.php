<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Sticky Footer Navbar Template for Bootstrap</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
  <?php require "../views/common/header.php" ?>
  <main role="main" class="container">
    <h1>Lista de usuarios</h1>
    <!-- Enlace para ir a la página de creación de usuario -->
    <a href="/user/create" class="btn btn-primary">Crear nuevo usuario</a>

    <table class="table table-striped table-hover">
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Fecha nacimiento</th>
        <th></th>
      </tr>

      <?php foreach ($users as $key => $user) { ?>
        <tr>
          <td><?php echo ($user->name) ?></td>
          <td><?php echo ($user->surname) ?></td>
          <td><?php echo ($user->email) ?></td>
          <td><?php echo ($user->birthdate) ?></td>
          <td>
            <a href="/user/show/<?php echo $user->id ?>" class="btn btn-primary">Ver</a>
          </td>
        </tr>
      <?php } ?>
    </table>
  </main>
  <?php require "../views/common/footer.php" ?>
  <?php require "../views/common/scripts.php" ?>
</body>

</html>