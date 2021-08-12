<?php include_once "header.php"; ?>
<title>Портал-Телефонний довідник</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Телефонний довідник
                </h3>
                <h3
                    class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php"
                    class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <div id="phones-list" class="row mx-0 border border-primary rounded bg_muted">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0">
                            <h2 class="text-center text-uppercase px-1 py-3 mx-1 my-1 text-white bg_headers">
                                Список телефонних номерів</h2>
                        </div>
                        <div class="col-12 px-1 text-center">
                            <div
                                class="table table-responsive table-striped table-bordered table-hover mb-1 border-primary">
                                <table
                                    class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                    <thead>
                                        <tr class="bg-secondary text-center">
                                            <th scope="col" class="align-top">№</th>
                                            <th scope="col" class="align-top">
                                                Назва підрозділу</th>
                                            <th scope="col" class="align-top">
                                                Абонент</th>
                                            <th scope="col" class="align-top">
                                                Посада</th>
                                            <th scope="col" class="align-top">
                                                Вн.тел</th>
                                            <th scope="col" class="align-top">
                                                Вн.тел</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-left">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Автоцех</td>
                                            <td>Вишневська Олена Іванівна</td>
                                            <td>Економіст</td>
                                            <td class="text-center">56-32</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Автоцех</td>
                                            <td>Даниленко Євген Миколайович</td>
                                            <td>Начальник тех.бюро</td>
                                            <td class="text-center">56-38</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><b>Автоцех</b></td>
                                            <td><b>Диспетчер</b></td>
                                            <td></td>
                                            <td class="text-center"><b>55-58</b></td>
                                            <td class="text-center"><b>84-82</b></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Автоцех</td>
                                            <td>Мальцева Ірина Сергіївна</td>
                                            <td>Бухгалтер</td>
                                            <td></td>
                                            <td class="text-center">80-00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Автоцех</td>
                                            <td>Мужиченко Олександр Сергійович</td>
                                            <td>Головний інженер</td>
                                            <td class="text-center">55-86</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Автоцех</td>
                                            <td>Педус Юлія Олександрівна</td>
                                            <td>Заступник нач.цеху з охорони праці</td>
                                            <td class="text-center">56-32</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Автоцех</td>
                                            <td>Шаповалова Алевтина Анатольевна</td>
                                            <td>Начальник Автоцеху</td>
                                            <td class="text-center">55-46</td>
                                            <td class="text-center"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Бухгалтерія</td>
                                            <td>Онищенко Людмила Вікторівна</td>
                                            <td>Головний бухгалтер</td>
                                            <td class="text-center">52-50</td>
                                            <td class="text-center">80-00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>