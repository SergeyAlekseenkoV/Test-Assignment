<?php
// Initialize the session
session_start();


// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: index.php");
//     exit;
// }

?>

<?php include_once "header.php";?>

<title>Мої дані</title>
</head>

<body id="home">
    <?php include_once "user-menu.php"; ?>
    <section id="personalRoom" class="pt-3 pb-5">
        <!--nav-block-->
        <div class="container py-3 py-lg-3 pb-lg-3 px-sm-0 px-md-3">
            <nav aria-label="breadcrumb" class="d-flex justify-content-between align-items-baseline mt-5 mb-2">
                <h3 class="d-md-none pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Мої дані</h3>
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Мої дані</li>
                </ol>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-1 mt-md-2 mt-xl-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </nav>
            <!-- user-data -->
            <div class="row py-0 pl-0 mt-0 mb-1">
                <div class="col-12">
                    <div class="row text_color mx-0 my-0 pt-2 pb-0">
                        <div class="col-8 px-0">
                            <h4 class="mb-2 font-weight-bold">Петров Іван Перебий-ніс</h4>
                        </div>
                        <div class="col-4 px-0 text-right">
                            <p class="lead mb-0">Таб.№: <span class="font-weight-bold">17847</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-2 ml-0 pl-0 mr-0 pr-0">
                <div class="col-sm-12 col-lg-2 px-0 py-0">
                    <article class="rounded border shadow bg-dark px-2 py-3 mb-3 text-center text-white">
                        <p class="overflow_wrap">Мій E-mail: <br><span class="font-weight-bold">pereby-nisewgfhgfrert@gmail.com</span></p>
                        <p class="mb-0 mt-0 mt-lg-2">Мій телефон: <br><span class="font-weight-bold">(050) 039 09 49</span></p>
                        <p class="mt-3 mt-xl-4"><a href="change-password.php" class="btn btn-primary">Зміна паролю</a></p>
                    </article>
                </div>
                <!-- main content -->
                <div class="col-sm-12 col-lg-10 px-0 pl-md-0 pl-lg-1 py-0 pr-lg-0">
                    <aside class="mt-2 mt-lg-0 shadow">
                        <form class="col p-5 shadow bg-light align-self-center text-center border border-primary rounded"
                            action="" method="post" novalidate>
                            <div class="row mt-md-3">
                                <div class="col-12 col-md-6">
                                    <div class="form-group input-group border border-primary rounded">
                                        <div class="input-group-prepend bg-secondary text_color">
                                            <span class="input-group-text text_color" id="telnumber">Моб.тел.:</span>
                                        </div>
                                        <input type="tel" class="form-control shadow p-lg-4 bg-light"
                                            placeholder="(000) 000 00 00" aria-describedby="telnumber" value=""
                                            name="telNumber" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group input-group border border-primary rounded">
                                        <div class="input-group-prepend bg-secondary text_color">
                                            <span class="input-group-text text_color" id="useremail">E-mail</span>
                                        </div>
                                        <input type="email" class="form-control shadow p-lg-4 bg-light"
                                            placeholder="E-mail" aria-describedby="useremail" value="" name="userEmail"
                                            required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary mt-4 mt-sm-3 mt-md-3 shadow text-white"
                                value="">Змінити дані</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>
</html>