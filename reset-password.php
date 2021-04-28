<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: log-in.php");
    exit;
}
 
// Include db connection
require_once ("dbcontroller.php");
$db_handle = new DBController();
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate new password
    if(empty(trim($_POST["new_password"]))) {
        $new_password_err = "Пожалуйста введите новый пароль";
        // var_dump($_POST["password"]);     
    } elseif(strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "Пароль должен быть не менее 6 знаков";
        // var_dump($_POST["password"]);
    } else {
        $new_password = trim($_POST["new_password"]);
    } 
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Пожалуйста подтвердите пароль";
        // var_dump($_POST["confirm_password"]);
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Пароли не совпадают";
        }
    }
    $result = $db_handle->connectDB();
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)) {
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        $result = $db_handle->connectDB($sql);
        if($stmt = mysqli_prepare($result, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: log-in.php");
                exit();
            } else {
                echo "Что-то пошло не так...Попробуйте позже!";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($result);
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="16x16" rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/menu-up.js"></script>
    <title>Сброс пароля</title>
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
    <!-- subnavigation to->home -->
    <div class="container">
            <nav class="pt-5"> 
                <a href="index.php" class="btn btn-primary text-white mt-5"><span class="mr-2"><b><<</b></span>На главную</a>
           </nav>
    </div>
    <!-- log-in forms-->
    <header id="logIn" class="container mt-1 pb-3 mb-3" style="min-height: 80vh;">
        <div class="row">
            <div class="col col-md-8 col-lg-6 mt-5 mb-3">
                <h3 class="text-warning pt-3">Смена пароля <br><b class="text-primary"><?php echo htmlspecialchars($_SESSION["username"]);?></b> !</h3>
                <h4 class="text-warning">Пожалуйста заполните форму для смены пароля</h4>
            </div>
        </div>
        <div class="row pt-1">
            <form class="col col-md-8 col-lg-6" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
                <fieldset class="p-4 bg-linear rounded">
                    <legend class="text-warning">Смените пароль</legend>
                    <div class="form-group">
                        <label for="userNewPassword">Новый пароль</label>
                        <input type="password" class="form-control bg-dark text-white border-primary shadow p-lg-4 <?php echo(!empty($new_password_err)) ? 'is-invalid' : '';?>"
                               id="userNewPassword" autocomplete="new-password" aria-describedby="userNewPassword" name="new_password" placeholder="Новый пароль" value="<?php echo $new_password;?>">
                        <div class="invalid-feedback"><?php echo $new_password_err;?></div>
                    </div>
                    <div class="form-group mt-1 mt-sm-3 mt-md-4 mt-lg-5">
                        <label for="passRepeat">Подтвердите новый пароль</label>
                        <input type="password" name="confirm_password" class="form-control bg-dark text-white border-primary shadow p-lg-4 <?php echo(!empty($confirm_password_err)) ? 'is-invalid' : '';?>" placeholder="Подтверждение пароля" 
                               id="passRepeat" autocomplete="new-password" aria-describedby="passRepeat">
                        <div class="invalid-feedback"><?php echo $confirm_password_err;?></div>
                    </div>
                    <div class="d-flex justify-content-between flex-wrap">
                        <input type="submit" class="btn btn-lg btn-primary mt-1 mt-sm-2 mt-md-3 mt-lg-5 mr-1 shadow" value="Установить новый пароль">
                        <a class="btn btn-lg btn-warning text-dark mt-1 mt-sm-2 mt-md-3 mt-lg-5 ml-0 ml-sm-2 ml-md-2 ml-lg-3 ml-xl-4 border border-dark shadow" href="welcome.php" type="button" role="button"><b>Отмена</b></a>
                    </div>
                </fieldset>
            </form>
        </div>
    </header>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>
</html>