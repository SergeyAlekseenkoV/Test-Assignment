<?php
// Initialize the session
session_start();
//Disable menu links for unregistered user
$access = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'disabled': '';

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
//db connection
require_once("dbcontroller.php");
$db_handle = new DBController();

 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Prepare a select statement
    $sql = "SELECT id FROM users WHERE username = ?";
    $result = $db_handle->connectDB($sql);

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Пожалуйста введите имяпользователя!";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Пожалуйста введите пароль!";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($result, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Не верный пароль!";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Данный пользователь не найден";
                }
            } else{
                echo "Что-то пошло не так! Попробуйте позже!";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="16x16" rel="icon" href="img/logo.png">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu-up.js"></script>
    <title>Вход в приложение МГОК</title>
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
                        <a class="nav-link dropdown-toggle font-weight-bold text-white <?php echo $access; ?>" data-toggle="dropdown" href="#" role="button" 
                           aria-haspopup="true" aria-expanded="false">Производство</a>
                        <div class="dropdown-menu position-absolute dropdown-content p-0 border border-primary bg-primary row text-center text-md-left text-lg-left width-dropdown-smallscreen">
                            <a class="dropdown-item text-white" 
                               href="prodaction-indicators.html">Производстве<br class="d-none d-md-block d-lg-none d-xl-none">нные<br class="d-none d-md-block d-lg-none d-xl-none"> показатели</a>
                            <a class="dropdown-item text-white" 
                               href="enterprise-condition.html">Состояние<br class="d-none d-md-block d-lg-none d-xl-none"> производства</a>
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
    <!-- log-in forms-->
    <header id="logIn" class="container mt-5 pb-3">
        <div class="row">
            <div class="col col-md-8 col-lg-6 mt-5 mb-5">
                <h3 class="text-warning">Вход для уже зарегистрированых <br>пользователей</h3>
            </div>
        </div>
        <div class="row pt-1">
            <form class="col col-md-8 col-lg-6" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <fieldset class="p-4 rounded shadow bg-linear">
                <legend class="text-warning">Войдите в систему</legend>
                    <div class="form-group">
                        <label for="userInput">Введите имя пользователя</label>
                        <input type="text" name="username" class="form-control text-white border-primary shadow p-lg-4 bg-dark <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" 
                               id="userInput" placeholder="ваше имя пользователя" value="<?php echo $username; ?>" required>
                        <div class="invalid-feedback"><?php echo $username_err; ?></div>
                    </div>
                    <div class="form-group mt-1 mt-sm-2 mt-md-3 mt-lg-5">
                        <label for="passInput">Введите ваш пароль</label>
                        <input type="password" name="password" class="form-control text-white border-primary shadow p-lg-4 bg-dark <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Безопасный пароль минимум 6 знаков" 
                               id="passInput" aria-describedby="passInput" required>
                        <div class="invalid-feedback"><?php echo $password_err; ?></div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-lg btn-primary mt-1 mt-sm-2 mt-md-3 mt-lg-5 shadow" value="login">Войти</button>
                    </div>
                </fieldset>
            </form>
            <div class="container pt-5">
                <div class="row mb-5">
                    <div class="col col-md-8 col-lg-6 text-left">
                        <p class="lead"><a class="text-info" href="registration.php">Вы здесь впервые? Зарегистрируйтесь!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>

</html>