<?php
// Initialize the session
session_start();
//Disable menu links for unregistered user
$access = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'disabled': '';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css" 
          integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" 
          crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="16x16" rel="icon" href="img/logo.png">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu-up.js"></script>
    <title>MGOK</title>
</head>

<body id="home">
    <!--navigation-->
    <nav id="navbarUp" class="navbar navbar-expand-md bg-dark navbar-dark fixed-top shadow">
        <div class="container">
            <!--LOGO-->
            <div class="logo mr-0 d-flex justify-content-center bg-linear">
                <a href="index.php">
                    <img src="img/logo.png" alt="MGOK" class="mt-1 ml-1 inner-logo">
                </a>
                <a href="index.php" class="navbar-brand text-logo font-weight-bold pl-1">МГОК</a>
            </div>
            <!--menu button-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--dropdowns-->
            <div class="collapse navbar-collapse text-center text-md-left text-lg-left" id="navbarCollapse">
                <ul class="navbar-nav nav-pills ml-auto mt-1">
                    <li class="nav-item border border-primary rounded position-relative">
                        <a class="nav-link dropdown-toggle font-weight-bold text-white <?php echo $access; ?>" data-toggle="dropdown" 
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">Производство</a>
                        <div class="dropdown-menu position-absolute dropdown-content p-0 border border-primary bg-primary row text-center text-md-left text-lg-left width-dropdown-smallscreen">
                            <a class="dropdown-item text-white" href="production_data_insert.php">Производстве<br class="d-none d-md-block d-lg-none d-xl-none">нные<br class="d-none d-md-block d-lg-none d-xl-none"> показатели</a>
                            <a class="dropdown-item text-white" href="enterprise-condition.html">Состояние<br class="d-none d-md-block d-lg-none d-xl-none"> производства</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#social" class="nav-link font-weight-bold text-white <?php echo $access; ?>">Социальная сфера</a>
                    </li>
                    <li class="nav-item">
                        <a href="#other" class="nav-link font-weight-bold text-white <?php echo $access; ?>">Прочее</a>
                    </li>
                    <li class="nav-item">
                        <a href="#directory" class="nav-link font-weight-bold text-white <?php echo $access; ?>">Справочни<br class="d-none d-md-inline-block d-lg-none">ки</a>
                    </li>
                    <li class="nav-item">
                        <a href="divisions.html" class="nav-link font-weight-bold text-white pr-lg-0 <?php echo $access; ?>">Подразделе<br class="d-none d-md-inline-block d-lg-none">ния</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--home section-->
    <header id="home-section" class="mt-0 pb-3">
        <!-- subheader-access -->
        <nav class="container pt-5 d-flex justify-content-end">
            <a href="log-in.php" class="btn btn-small btn-primary text-white mt-5 shadow log-in <?php echo (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) ? 'd-block' : 'd-none'; ?>" role="button">Войти</a>
            <a href="logout.php" class="btn btn-small btn-primary text-white mt-5 shadow log-out <?php echo (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) ? 'd-none' : 'd-block'; ?>" role="button">Выйти</a>
            <a href="registration.php" class="btn btn-small btn-secondary text-white border border-dark mt-5 ml-4 ml-md-2 ml-lg-2 shadow registration <?php echo (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) ? 'd-block' : 'd-none'; ?>" role="button">Регистрация</a>
        </nav>
        <!-- main container -->
        <div class="home-inner pt-5 mt-lg-0">
            <div class="container pt-md-3 pt-lg-2">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="display-4 pl-0 pt-4 pr-4 pb-4 text-left font-weight-bold">Из недр -
                            <br class="d-md-none ">к высотам!
                        </h1>
                        <div class="d-flex flex-row">
                            <div class="pl-0 pb-4 pr-4 pt-2 align-self-start">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="pl-4 align-self-end">
                                <p class="lead">Градообразующее предприятие которое принимает активное участие в жизни города</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="pl-0 pt-4 pb-4 pr-4 pt-2 align-self-start">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="pl-4 align-self-end">
                                <p class="lead">Предприятие по добыче и переработки марганцевой руды</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="pl-0 pt-4 pb-4 pr-4 pt-2 align-self-start">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="pl-4 align-self-end">
                                <p class="lead">Вопрос качества продукции и его улучшение всегда в центре внимания</p>
                            </div>
                        </div>
                        <!--redirect-to-site button-->
                        <button class="btn-lg btn-primary mt-5 mb-4 shadow">
                            <a href="http://mgok.dp.ua/" 
                               target="_blank" class="text-decoration-none p-3 text-white">Подробнее <span class="ml-2"><b>>></b></span></a>
                        </button>
                    </div>
                    <!--rotative logo-->
                    <div class="col-lg-4">
                        <div class="container d-none d-lg-flex justify-content-around mt-4">
                            <img class="position-absolute img-fluid mt-2 outter-animation" 
                                 src="img/logo-outter-animation.png" alt="logo">
                            <div class="align-self-center mt-5 pt-3">
                                <img class="position-relative img-fluid inner-logo" 
                                src="img/logo-inner-m.png" alt="Mn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--info section-->
    <section id="location-info">
        <div class="container pt-5 pb-5">
            <div class="row">
                <!--google-maps-->
                <div class="col-sm-12 col-md-12 col-lg-6 mt-2 text-center">
                    <h5 class="p-3 ml-0 mr-0 text-white rounded bg-linear">Расположение администрации</h5>
                    <iframe class="d-flex mb-sm-2 g-map" 
                       src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d86039.26570550469!2d34.62014246291214!3d47.63143673569592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0LzQs9C-0Log0LrQsNGA0YLQsA!5e0!3m2!1sru!2sua!4v1612377193567!5m2!1sru!2sua" 
                       width="100%" height="316" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!--YouTube is embeded-->
                <aside class="col-sm-12 col-md-12 col-lg-6 mt-2 text-center">
                    <h5 class="p-3 ml-0 mr-0 text-white rounded bg-linear">Смотрите наш канал</h5>
                    <iframe class="d-block d-flex mt-2 mt-lg-0 mb-2 mb-lg-0" 
                       src="https://www.youtube.com/embed/GIM-n68OebE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                       width="100%" height="316" allowfullscreen></iframe>
                </aside>
            </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
        
</body>

</html>