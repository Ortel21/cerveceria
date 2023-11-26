<?php
namespace App\Controllers;

class LoginController{
    function __construct()
    {
        echo "<br>Contruyendo Login controller...";
    }

    function index(){
        require('../views/login/index.php');
    }

    function show(){
        echo "<br>En el SHOW de LOGIN";
    }
}// Fin clase