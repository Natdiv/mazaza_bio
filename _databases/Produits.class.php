<?php

include_once 'Connexion.class.php';

class Produits
{
    public static function get()
    {
        try
        {
            $stmt = Connexion::getConnexion()->prepare(
                "SELECT * FROM produits ORDER BY date_ajout DESC");
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

    public function post($produit)
    {
        try
        {
            $stmt = Connexion::getConnexion()->prepare(
                "INSERT INTO produits(designation, prix_unitaire, unite_mesure, categorie, description, image)"
                ."VALUES(?, ?, ?, ?, ?, ?)");
            $res = $stmt->execute(
                $produit
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