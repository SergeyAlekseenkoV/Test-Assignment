<?php include_once "header.php"; ?>
<title>Вхід у Портал</title>
</head>
<body id="login" class="bg-dark">
<?php include_once "login-menu.php"; ?>
<!-- log-in forms-->
<section class="log_in">
    <div class="container py-5">
        <div class="row d-flex flex-column justify-content-center my-5">
            <form class="col col-md-8 col-lg-6 align-self-center px-sm-0" action=""
                method="post" novalidate>
                <fieldset class="p-4 rounded shadow bg-light border border-primary">
                    <div class="form-group">
                        <label for="userInput" class="text_color">Ваш табельний номер</label>
                        <input type="number" name="tabNumber"
                            class="form-control border-primary shadow p-lg-4 bg-light"
                            id="userInput" placeholder="Табельний номер" value=""
                            required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mt-1 mt-sm-2 mt-md-3 mt-lg-5 mb-4 mb-lg-4">
                        <label for="emailInput" class="text_color">Ваш E-mail (вказаний у Персональному кабінеті)</label>
                        <input type="email" name="userEmail"
                            class="form-control border-primary shadow p-lg-4 bg-light"
                            placeholder="Ваш e-mail" id="emailInput" aria-describedby="emailInput"
                            required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary mt-4 mt-sm-3 mt-md-4 mt-lg-5 shadow w-100 text-white"
                            value="login">Надіслати пароль</button>
                </fieldset>
            </form>
            <p class="text-center mt-4">
                <a href="index.php" class="btn btn-dark text-white border"><span>&laquo;</span> Назад</a href="my-data.php">
            </p>
        </div>
    </div>
</section>
<!--footer-->
<?php include_once "footer.php"; ?>