<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: log-in.php");
    exit;
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="16x16" rel="icon" href="img/logo.png">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu-up.js"></script>
    <title>Добро пожаловать!</title>
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
                        <a class="nav-link dropdown-toggle font-weight-bold text-white" data-toggle="dropdown" href="#" role="button" 
                           aria-haspopup="true" aria-expanded="false">Производство</a>
                        <div class="dropdown-menu position-absolute dropdown-content p-0 border border-primary bg-primary row text-center text-md-left text-lg-left width-dropdown-smallscreen">
                            <a class="dropdown-item text-white" 
                               href="production_data_insert.php">Производстве<br class="d-none d-md-block d-lg-none d-xl-none">нные<br class="d-none d-md-block d-lg-none d-xl-none"> показатели</a>
                            <a class="dropdown-item text-white" 
                               href="enterprise-condition.html">Состояние<br class="d-none d-md-block d-lg-none d-xl-none"> производства</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#social" class="nav-link font-weight-bold text-white">Социальная сфера</a>
                    </li>
                    <li class="nav-item">
                        <a href="#other" class="nav-link font-weight-bold text-white">Прочее</a>
                    </li>
                    <li class="nav-item">
                        <a href="#directory" class="nav-link font-weight-bold text-white">Справочни<br class="d-none d-md-inline-block d-lg-none">ки</a>
                    </li>
                    <li class="nav-item">
                        <a href="divisions.html" class="nav-link font-weight-bold text-white pr-lg-0">Подразделе<br class="d-none d-md-inline-block d-lg-none">ния</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--exit-->
    <nav class="container pt-5 d-flex justify-content-between">
        <a href="index.php" class="btn btn-small btn-primary text-white mt-5"><span class="mr-2"><b><<</b></span>На главную</a>
        <a href="logout.php" class="btn btn-small btn-primary text-white mt-5 shadow log-out" role="button">Выйти</a>
    </nav>
    <!-- welcome content-->
    <header class="container mt-5 pb-3" style="min-height: 80vh;">
        <div class="row ml-0 mr-0">
            <div class="col col-md-8 col-lg-6 mt-5 mb-5 rounded shadow bg-linear">
                <h3 class="text-white pt-3 pb-3">Добро пожаловать <br><b class="text-primary"><?php echo htmlspecialchars($_SESSION["username"]); ?> </b><br>
                в приложение для работников ПАО МГОК!</h3>
            </div>
        </div>  
        <a href="reset-password.php" role="button" class="btn btn-lg btn-primary shadow">Смена пароля</a>
    </header>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>

</html>