<?php
namespace App\Controllers;

class ClientController{
    function __construct()
    {
        echo "<br>Contruyendo CLIENT controller...";
    }

    function index(){
        require('../views/client/index.php');
    }

    function show(){
        echo "<br>En el SHOW de CLIENT";
    }
}// Fin clase