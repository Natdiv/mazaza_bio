<?php


class Connexion
{
    public static function getConnexion()
    {
        try {
            $host = 'mysql:host=localhost;dbname=mazaza';
            $user = 'root';
            $pwd = 'LInuxDEbian09';
            $bdd = new PDO($host, $user, $pwd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;

        } catch (PDOException $e) {
            header('Location: ../404.php');
        }
    }
}