<?php include_once "header.php"; ?>
<title>Реєстрація у Порталі</title>
</head>
<body id="login" class="bg-dark">
<?php include_once "menu.php"; ?>
<!-- log-in forms-->
<section class="log_in">
    <div class="container py-5">
        <div class="row d-flex flex-column justify-content-center mt-5">
            <form class="col col-md-8 col-lg-6 align-self-center px-sm-0" action=""
                method="post" novalidate>
                <fieldset class="p-4 rounded shadow bg-light border border-primary">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tabnumber" class="text_color">Табельний<br class="d-block d-sm-none"> номер</label>
                                <input type="number" name="tabNumber"
                                       class="form-control border-primary shadow p-lg-4 bg-light"
                                       id="tabnumber" placeholder="Таб.№" value=""
                                       required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="username" class="text_color">Ім'я<br class="d-block d-sm-none"> користувача</label>
                                <input type="text" name="userName"
                                       class="form-control border-primary shadow p-lg-4 bg-light"
                                       id="username" placeholder="Ім'я" value=""
                                       required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telnumber" class="text_color">Моб.тел.:</label>
                                <input type="tel" name="telNumber"
                                       class="form-control border-primary shadow p-lg-4 bg-light"
                                       id="telnumber" placeholder="(000) 000 00 00" value=""
                                       required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="useremail" class="text_color">E-mail</label>
                                <input type="email" name="userEmail"
                                       class="form-control border-primary shadow p-lg-4 bg-light"
                                       id="useremail" placeholder="Ім'я" value=""
                                       required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-1 mt-sm-2 mt-md-3">
                        <label for="passInput" class="text_color">Ваш пароль</label>
                        <input type="password" name="password"
                            class="form-control border-primary shadow p-lg-4 bg-light"
                            placeholder="Пароль мінімум 8 знаків" id="passInput" aria-describedby="passInput"
                            required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mt-1 mt-sm-2 mt-md-3">
                        <label for="newpassword" class="text_color">Підтвердити пароль</label>
                        <input type="password" name="newPassword"
                            class="form-control border-primary shadow p-lg-4 bg-light"
                            placeholder="Повторити пароль" id="newpassword" aria-describedby="passInput"
                            required>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary mt-4 mt-sm-3 mt-md-3 shadow w-100 text-white"
                            value="login">Реєстрація</button>
                </fieldset>
            </form>
        </div>
    </div>
</section>
<!--footer-->
<?php include_once "footer.php"; ?>