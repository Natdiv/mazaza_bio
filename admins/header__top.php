
<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="header__top__left">
                    <ul>
                        <li><i class="fa fa-envelope"></i> mazaza@mazaza.com</li>
                        <li>Livraison gratuite dans un bref delais</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                    <div class="header__top__right__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
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
            </div>
        </div>
    </div>
</div>