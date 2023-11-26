<?php

namespace App\Models;

require "../core/Model.php";

use Core\Model;
use PDO;

class User extends Model

{

    // @return Todos los registros de la tabla user de la bdd
    public static function all()
    {
        $dbh = USER::db();
        // $dbh = self::db(); //Otra forma de hacerlo.
        $sql = "SELECT * FROM Cervezas";
        $statement = $dbh->query($sql);
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $users = $statement->fetchAll(PDO::FETCH_CLASS);
        return $users;
    }

    //return un usuario en particular del a bdd
    // para id
    public static function find($id)
    {
        $dbh = USER::db();
        $sql = "SELECT * FROM Cervezas WHERE id = :id";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    public function insert()
    {
        $db = User::db();
        $stmt = $db->prepare('INSERT INTO users(name, surname, birthdate, email) VALUES(:name, :surname, :birthdate, :email)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':birthdate', $this->birthdate);
        return $stmt->execute();
    }

    public function save()
    {
        echo "<br> Actualizando un registro..";
    }

    public function delete()
    {
        echo "<br> Borrando un registro..";
    }
}
