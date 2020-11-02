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
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="../img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="../img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Français</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <?php if(isset($_SESSION['user_data'])) { ?>

            <div class="header__top__right__auth">
                <a href="../index.php?logout=logout"><i class="fa fa-user"></i> Déconnexion</a>
            </div>

        <?php } else { ?>

            <div class="header__top__right__auth">
                <a href="../login.php"><i class="fa fa-user"></i> Login</a>
            </div>

        <?php } ?>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li class="active"><a href="../shop-grid.php">Produits</a></li>
            <li><a href="../blog.php">Blog</a></li>
            <li><a href="../contact.php">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> mazaza@mazaza.com</li>
            <li>Livraison gratuite dans un bref delais</li>
        </ul>
    </div>
</div>
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
                        <li class="active"><a href="../shop-grid.php">Produits</a></li>
                        <li><a href="../blog.php">Blog</a></li>
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
                        <span>Produits</span>
                    </div>
                    <ul>
                        <li class="active"><a href="#">Tous les produits‎</a></li>
                        <li><a href="add_product.php">Nouveau produit‎</a></li>
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
                    <h2>Mazaza Bio</h2>
                    <div class="breadcrumb__option">
                        <span>Ajouter un produit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="contact-form">
    <div class="container">
        <div class="checkout__form">
            <h4 class="text-center">Nouveau produit</h4>
            <form action="../_controllers/add_product.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8 col-md-6 centered">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Désignation<span>*</span></p>
                                    <input type="text" name="designation" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Prix Unitaire<span>*</span></p>
                                    <input type="number" name="prix_unitaire">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Unité de mésure</p>
                                    <input type="text" name="unite_mesure">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Catégorie<span>*</span></p>
                                    <select name="categorie">
                                        <option value="" disabled selected>‎Catégorie du produit</option>
                                        <option value="feuille">Légume-feuille‎</option>
                                        <option value="fleur">Légume-fleur‎</option>
                                        <option value="fruit">Légume-fruit‎</option>
                                        <option value="racine">Légume-racine</option>
                                        <option value="tige">Légume-tige‎</option>
                                        <option value="bulbe">Légume-bulbes</option>
                                        <option value="sec">Légume-sec</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Image<span>*</span></p>
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Description<span>*</span></p>
                                    <textarea style="width: 100%" name="description" placeholder=""></textarea>
                                </div>
                            </div>
                           <div class="col-lg-12 text-center">
                               <?php if(isset($_GET['error'])) { ?>

                                   <p class="text-danger">Une erreur est survenue lors de l'ajout!</p>

                               <?php } ?>
                               <?php if(isset($_GET['image_error'])) { ?>

                                   <p class="text-danger"><?=$_GET['image_error'] ?></p>

                               <?php } ?>
                           </div>
                            <button type="submit" class="site-btn centered">AJOUTER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<!-- Footer Section Begin -->
<?php include_once '../_pages_to_include/footer.php' ?>
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
<script src="../js/mazaza.script.js"></script>



</body>

</html>