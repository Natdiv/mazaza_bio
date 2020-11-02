<?php

session_start();
if(isset($_SESSION['user_data']) && $_SESSION['user_data']['type'] === 'admin')
{
    include_once '../_databases/Articles.class.php';
    include_once '../_helpers/upload-image-file.php';

    if(isset($_POST['titre'], $_POST['sous_titre'], $_POST['contenu'], $_POST['auteur'])){
        if($_FILES['image'])
        {
            $is_uploaded = upload_image($_FILES);
            if(!$is_uploaded['error'])
            {
                $image_url = $is_uploaded['url'];
                $article = new Articles();
                $res = $article->post([$_POST['titre'], $_POST['sous_titre'], $_POST['contenu'], $_POST['auteur'], $image_url]);
                if($res) {
                    header('Location: ../blog.php');
                } else {
                    header('Location: ../admins/add_article.php?error=error');
                }
            } else {
                header('Location: ../admins/add_article.php?image_error='.$is_uploaded['message']);
            }
        } else
        {
            header('Location: ../admins/add_article.php?image_error=Vous devez selectionner une image');
        }
    } else
    {
        header('Location: ../admins/add_article.php?error_incomplete_data=error');
    }
} else {
    header('Location: ../index.php');
}