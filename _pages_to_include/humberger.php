<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="img/logo.png" alt=""></a>
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
            <img src="img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Français</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <?php if(isset($_SESSION['user_data'])) { ?>

            <div class="header__top__right__auth">
                <a href="./index.php?logout=logout"><i class="fa fa-user"></i> Déconnexion</a>
            </div>

        <?php } else { ?>

            <div class="header__top__right__auth">
                <a href="./login.php"><i class="fa fa-user"></i> Login</a>
            </div>

        <?php } ?>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="shop-grid.php">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="shop-details.php">Shop Details</a></li>
                    <li><a href="shoping-cart.php">Shoping Cart</a></li>
                    <li><a href="checkout.php">Check Out</a></li>
                    <li><a href="blog-details.php">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
            if(isset($_SESSION['user_data']) && $_SESSION['user_data']['type'] === 'admin')
            { ?>
                <li><a href="_admin.php">Admin</a></li>
            <?php }
            ?>
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