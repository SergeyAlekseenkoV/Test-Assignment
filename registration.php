<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

// Initialize the session
session_start();
//Disable menu links for unregistered user
$access = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'disabled': '';

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Prepare a select statement
    $sql = "SELECT id FROM users WHERE username = ?";
    $result = $db_handle->connectDB($sql);
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Пожалуйста введите имя пользователя!";
    } else {

        // prepare parametrs 

        if($stmt = mysqli_prepare($result, $sql)) {
            $param_username = trim($_POST["username"]);
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Attempt to execute the prepared statement
        
           if(mysqli_stmt_execute($stmt)){
            // if(executeInsert($stmt)) {
        //         /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1) {

                    $username_err = "Это имя уже занято!";
                } else {

                    $username = trim($_POST["username"]);
                }
            } else {

                echo "Что-то пошло не так...Попробуйте позже!";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))) {
        $password_err = "Пожалуйста введите пароль!";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Пароль должен иметь минимум 6 знаков";
    } else {
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Пожалуйста подтвердите пароль!";     
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Пароли не совпадают!";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($result, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: log-in.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="16x16" rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
                        <a class="nav-link dropdown-toggle font-weight-bold text-white <?php echo $access; ?>" data-toggle="dropdown" href="#" role="button" 
                           aria-haspopup="true" aria-expanded="false">Производство</a>
                        <div class="dropdown-menu position-absolute dropdown-content p-0 border border-primary bg-primary row text-center text-md-left text-lg-left width-dropdown-smallscreen">
                            <a class="dropdown-item text-white" 
                               href="production_data_insert.php">Производстве<br class="d-none d-md-block d-lg-none d-xl-none">нные<br class="d-none d-md-block d-lg-none d-xl-none"> показатели</a>
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
            <div class="col col-md-8 col-lg-6 mt-5 mb-3">
                <h3 class="text-warning">Для пользования приложением необходима регистрация!</h1>
            </div>
        </div>
        <div class="row pt-1">
            <form class="col col-md-8 col-lg-6" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
                <fieldset class="p-4 rounded shadow bg-linear">
                    <legend class="text-warning">Зарегистрируйтесь</legend>
                    <div class="form-group">
                        <label for="userInput">Введите имя пользователя</label>
                        <input type="text" name="username" class="form-control text-white border-primary shadow p-lg-4 bg-dark <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" 
                               id="userInput" placeholder="Имя пользователя" value="<?php echo $username; ?>" aria-describedby="userHelp">
                        <small id="userHelp" class="form-text text-muted">Это будет ваше имя пользователя</small>
                        <div class="invalid-feedback"><?php echo $username_err; ?></div>
                    </div>
                    <div class="form-group mt-1 mt-sm-2 mt-md-3 mt-lg-5 pb-3">
                        <label for="passInput">Введите ваш пароль</label>
                        <input type="password" name="password" class="form-control text-white border-primary shadow p-lg-4 bg-dark <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" 
                               placeholder="Безопасный пароль минимум 6 знаков" 
                               id="passInput" value="<?php echo $password; ?>" aria-describedby="passInput">
                        <div class="invalid-feedback"><?php echo $password_err; ?></div>
                    </div>
                    <div class="form-group mt-1 mt-sm-2 mt-md-3 mt-lg-5">
                        <label for="passInputRepeat">Подтвердите ваш пароль</label>
                        <input type="password" name="confirm_password" class="form-control text-white border-primary shadow p-lg-4 bg-dark <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" 
                               id="passInputRepeat" placeholder="Повторите ввод пароля" value="<?php echo $confirm_password; ?>" aria-describedby="passInputRepeat">
                        <div class="invalid-feedback"><?php echo $confirm_password_err; ?></div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-primary btn-lg mt-1 mt-sm-2 mt-md-3 mt-lg-4 mb-1 shadow" value="Регистрация">
                    </div>
                </fieldset>
                    <p class="lead text-white mt-3">Уже зарегистрированы?<br><a href="log-in.php" class="text-info"><b>Войти</b></a></p>
            </form>
        </div>
    </header>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>

</html>