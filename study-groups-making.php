<?php include_once "header.php"; ?>
<title>Портал-Розклад занять груп</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Розклад занять груп</h3>
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
                    <div class="row mx-0 border border-primary rounded bg_light_through study-part">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2
                                class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 my-1 text-white bg_headers">
                                Розклад</h2>
                        </div>
                        <!-- study-table -->
                        <div class="col-12 mt-1 mb-0 px-1 study_table">
                            <p class="text-center mb-1">занять по БНП ВК АТ "МГЗК" на місяць <b>лютий</b></p>
                            <div class="table table-responsive table-striped table-bordered table-hover border-primary mb-1">
                                <table class="table table-light table-sm table-striped mb-0 border border-primary text_color">
                                    <thead>
                                        <tr class="bg-secondary text_color">
                                            <th scope="col" class="align-top">№</th>
                                            <th scope="col" class="align-top text-center">Назва групи</th>
                                            <th scope="col" class="align-top text-center">Початок навчання</th>
                                            <th scope="col" class="align-top text-center">Планове завершення навчання</th>
                                            <th scope="col" colspan="4" class="align-top text-center">Дата/Викладач</th>
                                            <th scope="col" class="align-top text-center">Початок<br>год</th>
                                            <th scope="col" class="align-top text-center">Аудиторія<br> номер</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td class="text-left font-weight-bold">Помічник машиніста тепловоза</td>
                                            <td>05.10.20</td>
                                            <td>18.03.21</td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td> 15.30</td>
                                            <td>205</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td class="text-left font-weight-bold">Машиніст конвейера</td>
                                            <td>05.10.20</td>
                                            <td>18.03.21</td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td> 16.00</td>
                                            <td>205</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td class="text-left font-weight-bold">Електрослюсар(слюсар) черговий та з ремонту устаткування</td>
                                            <td>05.10.20</td>
                                            <td>18.03.21</td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td> 16.00</td>
                                            <td>205</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td class="text-left font-weight-bold">Машиніст крана (кранівник)</td>
                                            <td>05.10.20</td>
                                            <td>18.03.21</td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td> 16.00</td>
                                            <td>205</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td class="text-left font-weight-bold">Покрівельник рулонних покрівель та покрівель із штучних матеріалів</td>
                                            <td>05.10.20</td>
                                            <td>18.03.21</td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td>01.02.21 <br> <b>Крячун В.М</b></td>
                                            <td> 15.30</td>
                                            <td>205</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end table -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>