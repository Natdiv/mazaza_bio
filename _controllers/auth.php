<?php

include_once '../_databases/Utilisateurs.class.php';

if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))
{
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $res = Utilisateurs::auth($username, $password);
    if($res[0])
    {
        session_start();
        $_SESSION['user_data'] = $res[1];
        header('Location: ../index.php');

    }
    else
    {
        header('Location: ../login.php?auth_error=auth_error');
    }

}
else
{
    header('Location: ../login.php?data_incomplete=data_incomplete');
}