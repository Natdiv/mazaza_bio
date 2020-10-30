<?php
session_start();
if(isset($_SESSION['user_data']) && $_SESSION['user_data']['type'] === 'admin')
{
    include_once '../_databases/Produits.class.php';
    $all_produit = Produits::get();
    $nombre_total= count($all_produit);
} else {
    header('Location: ../index.php');
}