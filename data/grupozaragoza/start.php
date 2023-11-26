<?php
    // require "core/Model.php";

    require "core/App.php";

    $app = new Core\App(); //crea el enrutador
    // $app = new Core\Model(); //crea el enrutador
    // $app->db();

    // Otra forma de hacerlo
    // Core\Model::db();

    // require "app/controllers/UserController.php";
    // require "app/models/User.php";
    
    // use App\Models\User;
    // $user = new User();
    // $user->all();

    // use App\Controllers\UserController;

    // $user = new UserController();
    // $user->index();