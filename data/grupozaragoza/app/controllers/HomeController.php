<?php
namespace App\Controllers;

class HomeController{
    function __construct()
    {
        echo "<br>Contruyendo HOME controller...";
    }

    function index(){
        require('../views/home/index.php');
    }

    function show(){
        echo "<br>En el HOME de USER";
    }
}// Fin clase