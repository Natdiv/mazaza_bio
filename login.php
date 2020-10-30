<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg" style="height: 260px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Mazaza Bio</h2>
                    <div class="breadcrumb__option">
                        <span>Connexion</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<div class="contact-form spad">
    <div class="container">
        <form action="./_controllers/auth.php" method="POST">
            <div class="row">
                <div class="col-lg-4 col-md-6 centered">
                    <input type="text" name="username" placeholder="Votre username">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 centered">
                    <input type="password" name="password" placeholder="Votre mot de passe">
                </div>
            </div>
            <?php if(isset($_GET['data_incomplete'])) { ?>
            <div class="col-lg-12 text-center">
                <p class="text-danger">Veuillez completer tous les champs</p>
            </div>
            <?php } ?>
            <?php if(isset($_GET['auth_error'])) { ?>
                <div class="col-lg-12 text-center">
                    <p class="text-danger">Une erreur d'authentification est survenue</p>
                </div>
            <?php } ?>
            <div class="col-lg-12 text-center">
                <button type="submit" class="site-btn">SE CONNECTER</button>
            </div>
    </div>
    </form>
</div>
</div>
<!-- Contact Form End -->

<!-- Footer Section Begin -->
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>