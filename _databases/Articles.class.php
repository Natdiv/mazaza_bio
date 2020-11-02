<?php

include_once 'Connexion.class.php';

class Articles
{
    public static function get()
    {
        try
        {
            $stmt = Connexion::getConnexion()->prepare(
                "SELECT * FROM publications ORDER BY date_publication DESC");
            $res = $stmt->execute();

            if($res)
            {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else
            {
                return false;
            }
        } catch (Exception $e)
        {
            return false;
        }
    }

    public function post($publication)
    {
        try
        {
            $stmt = Connexion::getConnexion()->prepare(
                "INSERT INTO publications(titre, sous_titre, contenu, auteur, image)"
                ."VALUES(?, ?, ?, ?, ?)");
            $res = $stmt->execute(
                $publication
            );

            if($res)
            {
                return true;
            } else
            {
                return false;
            }
        } catch (Exception $e)
        {
            return false;
        }
    }
}