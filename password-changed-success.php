<?php include_once "header.php";?>

<title>Мої данні</title>
</head>

<body id="home">
    <?php include_once "user-menu.php"; ?>
    <section id="personalRoom" class="pt-3 pb-5">
        <!--nav-block-->
        <div class="container py-3 py-lg-3 pb-lg-3 px-sm-0 px-md-3">
            <nav aria-label="breadcrumb" class="d-flex justify-content-between align-items-baseline mt-5 mb-2">
                <h3 class="d-md-none pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Зміна паролю</h3>
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Зміна паролю</li>
                </ol>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-3 p-1 text-uppercase font-weight-bold border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </nav>
            <!-- success message -->
            <div class="row py-5 pl-0 mt-5 mb-1 text-center text_color">
                <div class="col-12 px-3 mx-0">
                      <h1 class="mb-3">Пароль був успішно змінений!</h1>
                      <a href="my-data.php" class="btn btn-dark mt-3 text-white"><span>&laquo;</span> Назад</a>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>

</html>