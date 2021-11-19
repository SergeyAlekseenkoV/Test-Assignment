<?php include_once "header.php"; ?>
<title>Пропозиції</title>
</head>

<body id="home">
    <?php include_once "user-menu.php"; ?>
    <section id="ideas-storage" class="pt-3 pb-5">
        <!--nav-block-->
        <div class="container py-3 py-lg-3 pb-lg-3 px-sm-0 px-md-3">
            <nav aria-label="breadcrumb" class="d-flex justify-content-between align-items-baseline mt-5 mb-2">
                <h3 class="d-md-none pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Пропозиції</h3>
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Пропозиції</li>
                </ol>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-1 mt-md-2 mt-xl-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </nav>
            <div class="row py-2 ml-0 pl-0 mr-0 pr-0">
                <div class="col-sm-12 col-lg-2 px-0 py-0">
                    <article class="sticky-top rounded bg-dark text-center text-lg-left text-white shadow pt-1">
                        <h6 class="px-3 pt-2 pb-1 text-uppercase">Подання пропозиції</h6>
                        <nav class="accordion" id="accordionProp">
                            <!-- first card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark border-top" id="first-item">
                                    <button class="btn bg-transparent btn-block text-left d-flex flex-row justify-content-between justify-content-sm-center justify-content-lg-between align-items-center  text-white text-uppercase" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Короткий опис сервісу&nbsp;&nbsp;&nbsp;<span><i class="fas fa-chevron-right"></i></span>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse bg-transparent" aria-labelledby="first-item" data-parent="#accordionProp">
                                    <ul class="card-body list-group p-0 text-white">
                                        <li class="list-group-item bg-transparent p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Для подання пропозиції (ідеї) Вам
                                                необхідно
                                                заповнити форму подання з обов'язковими полями,
                                                де необхідно вказати на проблему, а також спосіб її вирішення</p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Подана пропозиція буде відправлена до
                                                загальної бази
                                                та розглянута впродовж 3-х робочих днів</p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Розглянуті та погоджені пропозиції будуть
                                                внесені до
                                                списку пропозицій, як необхідних до
                                                введення у дію на підприємстві </p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Ваша думка вкрай важлива та має право
                                                бути почута
                                            </p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Дієві пропозиції (ідеї) будуть
                                                відзначені
                                                грошовими винагородами в залежності від розміру досягнутого економічного ефекту</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- my propositions -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark border-top" id="second-item">
                                    <button class="btn bg-transparent btn-block text-left d-flex flex-row justify-content-between justify-content-sm-center justify-content-lg-between align-items-center  text-white text-uppercase" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Мої пропозиції&nbsp;&nbsp;&nbsp;<span><i class="fas fa-chevron-right"></i></span>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse bg-transparent" aria-labelledby="second-item" data-parent="#accordionProp">
                                    <ul class="card-body list-group p-0 text-white">
                                        <li class="list-group-item bg-transparent p-2">
                                            <a href="proposition-description.php" class="text-white">Пропозиція <br>№ <strong>1222</strong></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </article>
                </div>
                <!-- main content -->
                <div class="col-sm-12 col-lg-10 px-0 pl-md-0 pl-lg-1 py-0 pr-lg-0">
                    <aside class="row w-100 mx-0 mt-2 mt-lg-0 bg-info border border-primary rounded shadow">
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2 class="text-uppercase px-0 py-3 mx-1 my-1 text-white bg_dark_through">Мої пропозиції </h2>
                        </div>
                        <div class="col-12 mx-0 px-1">
                            <div class="table table-responsive table-striped table-bordered table-hover mx-auto border-primary mb-1">
                                <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                    <thead>
                                        <tr class="bg-secondary text-center">
                                            <th scope="col" class="align-top small text-uppercase">№ ідеї</th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Авторство</th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Назва пропозиції</th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Автор пропозиції</th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Структурний підрозділ</th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Посада</th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Опис ідеї
                                            </th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Статус</th>
                                            <th scope="col" class="align-top small text-uppercase">
                                                Операції</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="proposition-description.php">1&nbsp;&raquo;</a></th>
                                            <td>СПП</td>
                                            <td>Дуже дієва пропозиція з використання нових технологій</td>
                                            <td>Деякий автор та співавтор</td>
                                            <td>шахта 14 - 15</td>
                                            <td>Начальник дільниці ВШТ та ПВС</td>
                                            <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                під час ремонту вагонів ВГ-1</td>
                                            <td>Розглядається</td>
                                            <td>Деяка дія</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="proposition-description.php">2&nbsp;&raquo;</a></th>
                                            <td>СПП</td>
                                            <td>Дуже дієва пропозиція з використання нових технологій</td>
                                            <td>Деякий автор</td>
                                            <td>шахта 14 - 15</td>
                                            <td>Начальник дільниці ВШТ та ПВС</td>
                                            <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                під час ремонту вагонів ВГ-1</td>
                                            <td>Відхилено</td>
                                            <td>Деяка дія</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="proposition-description.php">3&nbsp;&raquo;</a></th>
                                            <td>СПП</td>
                                            <td>Дуже дієва пропозиція з використання нових технологій</td>
                                            <td>Деякий автор</td>
                                            <td>шахта 14 - 15</td>
                                            <td>Начальник дільниці ВШТ та ПВС</td>
                                            <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                під час ремонту вагонів ВГ-1</td>
                                            <td>Розглядається</td>
                                            <td>Деяка дія</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="proposition-description.php">4&nbsp;&raquo;</a></th>
                                            <td>СПП</td>
                                            <td>Дуже дієва пропозиція з використання нових технологій</td>
                                            <td>Деякий автор</td>
                                            <td>шахта 14 - 15</td>
                                            <td>Начальник дільниці ВШТ та ПВС</td>
                                            <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                під час ремонту вагонів ВГ-1</td>
                                            <td>Тиражування</td>
                                            <td>Деяка дія</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>

</body>

</html>