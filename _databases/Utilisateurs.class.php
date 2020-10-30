<?php

include_once 'Connexion.class.php';

class Utilisateurs
{

    public function __construct()
    {

    }

    public static function auth($username, $password)
    {
        try
        {
            $connexion = Connexion::getConnexion();
            $stmt = $connexion->prepare("SELECT * FROM utilisateurs WHERE username='$username' AND password='$password' LIMIT 1");

            $res = $stmt->execute();

            if($res) {
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $is_auth = (sizeof($data) > 0) ? true : false;
                if($is_auth) {
                    $data = $data[0];
                    // $data["password"] = NULL;
                    return array(true, $data);
                }
                return array(false, "server_error" => false);
            }else{
                return array(false, "server_error" => true);
            }
        }catch (Exception $e)
        {
            return array(false, "message" => $e->getMessage());
        }
    }
}