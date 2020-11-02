<?php
session_start();
if(isset($_SESSION['user_data']) && $_SESSION['user_data']['type'] === 'admin')
{

} else {
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mazaza Bio</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<?php include_once '../_pages_to_include/humberger.php';?>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <?php include_once 'header__top.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="../index.php"><img src="../img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="admins/products.php">Produits</a></li>
                        <li class="active"><a href="#">Blog</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Blog</span>
                    </div>
                    <ul>
                        <li><a href="../blog.php">Tous les articles</a></li>
                        <li class="active"><a href="admins/add_article.php">Nouvel Article‎</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Toutes catégories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="Que cherchez-vous?">
                            <button type="submit" class="site-btn">CHERCHER</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>099 40 14 425</h5>
                            <span>support 24/7 heure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="../img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Blog</h2>
                    <div class="breadcrumb__option">
                        <span>Ecrire sur mon blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Trouver un article...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Tout</a></li>
                            <li><a href="#">Légume-feuille‎ (20)</a></li>
                            <li><a href="#">Légume-fleur (5)</a></li>
                            <li><a href="#">Légume-fruit (9)</a></li>
                            <li><a href="#">Légume-racine (10)</a></li>
                            <li><a href="#">Légume-tige (5)</a></li>
                            <li><a href="#">Légume-bulbes (9)</a></li>
                            <li><a href="#">Légume-racine (10)</a></li>
                            <li><a href="#">Légume-sec (12)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <div class="contact-form spad">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact__form__title">
                                        <h2>Nouveau contenu</h2>
                                    </div>
                                </div>
                            </div>
                            <form action="../_controllers/add_article.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <input type="text" name="titre" placeholder="Titre de l'article">
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <input type="text" name="sous_titre" placeholder="Sous-titre de l'article">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea name="contenu" placeholder="Votre contenu"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label>Image de couverture</label>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <input type="text" name="auteur" placeholder="Nom complet de l'auteur">
                                        <div class="col-lg-12 text-center">
                                            <?php if(isset($_GET['error'])) { ?>

                                                <p class="text-danger">Une erreur est survenue lors de l'ajout!</p>

                                            <?php } ?>
                                            <?php if(isset($_GET['image_error'])) { ?>

                                                <p class="text-danger"><?=$_GET['image_error'] ?></p>

                                            <?php } ?>
                                            <?php if(isset($_GET['incomplete_data'])) { ?>

                                                <p class="text-danger">Veuillez remplir tous les champs obligatoires</p>

                                            <?php } ?>
                                        </div>
                                        <button type="submit" class="site-btn">PUBLIER</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Footer Section Begin -->
<?php include_once '../_pages_to_include/footer.php'?>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.nice-select.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/jquery.slicknav.js"></script>
<script src="../js/mixitup.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>


</body>

</html>