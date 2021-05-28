<?php include_once "header.php";?>

<title>Зміна паролю</title>
</head>

<body id="home">
    <?php include_once "user-menu.php"; ?>
    <section id="personalRoom" class="bg-info pt-3 pb-5">
        <div class="container py-4 text-center">
            <div class="row d-flex flex-column justify-content-center my-5">
                <h4 class="text-uppercase mb-3 text_color">Зміна паролю</h4>
                <form class="col col-md-8 col-lg-6 align-self-center px-sm-0" action="" method="post" novalidate>
                    <fieldset class="p-4 rounded shadow bg-light border border-primary">
                        <p id="attention" class="d-none lead bg-info rounded text-center text_color">
                            Увага! Пароль має містити цифри та літери
                        </p>
                        <div class="form-group text-left">
                            <label for="userInput" class="text_color">Діючий пароль</label>
                            <input type="password" name="currentPass"
                                class="form-control border-primary shadow p-lg-4 bg-light" id="userInput"
                                placeholder="Діючий пароль" value="" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group text-left mt-1 mt-sm-2 mt-md-3 mt-lg-5 mb-4 mb-lg-4">
                            <label for="newPass" class="text_color">Ваш новий пароль</label>
                            <input type="password" name="newPass"
                                class="form-control border-primary shadow p-lg-4 bg-light" id="newPass"
                                placeholder="Не менше 8 знаків" value="" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group text-left mt-1 mt-sm-2 mt-md-3 mt-lg-5 mb-4 mb-lg-4">
                            <label for="repeatPass" class="text_color">Повторити пароль</label>
                            <input type="password" name="repeatPassword"
                                class="form-control border-primary shadow p-lg-4 bg-light" placeholder="Повторити пароль"
                                id="repeatPass" aria-describedby="emailInput" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <button type="submit"
                            class="btn btn-lg btn-primary mt-4 mt-sm-3 mt-md-4 mt-lg-5 shadow w-100 text-white"
                            value="login">Підтвердити</button>
                    </fieldset>
                </form>
            </div>
            <a href="my-data.php" class="btn btn-dark"><span>&laquo;</span> Назад</a href="my-data.php">
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>