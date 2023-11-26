<?php
namespace Core;

require "../config/db.php";

use AllowDynamicProperties;
use PDO;
use PDOException;
use const DSN;
use const USUARIO;
use const PASSWORD;


#[\AllowDynamicProperties]
class Model
{
    static function db(){
        
        try {
            $dbh = new PDO(DSN,USUARIO,PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo "Fallo en la conexion : " . $ex->getMessage();
            //throw $th;
        }

        return $dbh; // Devuelvo conexion a la BDD

    }// fin bd
}// fin de la clase