<?php

session_start();
if(isset($_SESSION['user_data']) && $_SESSION['user_data']['type'] === 'admin')
{
    include_once '../_databases/Produits.class.php';
    include_once '../_helpers/upload-image-file.php';

    if(isset($_POST['designation'], $_POST['prix_unitaire'], $_POST['unite_mesure'], $_POST['categorie'], $_POST['description'])){
        if($_FILES['image'])
        {
            $is_uploaded = upload_image($_FILES);
            if(!$is_uploaded['error'])
            {
                $image_url = $is_uploaded['url'];
                $produit = new Produits();
                $res = $produit->post([$_POST['designation'], $_POST['prix_unitaire'], $_POST['unite_mesure'], $_POST['categorie'], $_POST['description'], $image_url]);
                if($res) {
                    header('Location: ../admins/products.php');
                } else {
                    header('Location: ../admins/add_product.php?error=error');
                }
            } else {
                header('Location: ../admins/add_product.php?image_error='.$is_uploaded['message']);
            }
        } else
        {
            header('Location: ../admins/add_product.php?image_error=Vous devez selectionner une image');
        }
    } else
    {
        header('Location: ../admins/add_product.php?error=error');
    }
} else {
    header('Location: ../index.php');
}