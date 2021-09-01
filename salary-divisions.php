<?php include_once "header.php"; ?>
<title>Середня зарплата</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 pb-lg-5">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color wow slideInLeft"
                    data-animation="slideInLeft">Середня зарплата</h3>
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
                <aside id="avarage-salary"
                    class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0 wow fadeInUp"
                    data-animation="fadeInUp">
                    <div class="row m-0 p-0 border border-primary rounded shadow bg_info_through">
                        <!-- divisions  heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h3 class="text-uppercase font-weight-bold px-0 py-3 mx-1 mt-1 mb-0 border border-primary text-white bg_headers">
                                Розподіл розміру зарплати серед співробітників
                                <br class="d-block d-md-none"> червень 2021р.
                            </h3>
                        </div>
                        <!-- divisions table -->
                        <div class="col-12 mt-1 px-1">
                            <div class="table table-responsive table-striped table-bordered table-hover border-primary">
                                <table class="table table-light table-striped mb-0 border border-primary text_color">
                                    <thead>
                                        <tr class="text-white bg_linear_dark">
                                            <th scope="col" class="align-top">Діапазон, грн</th>
                                            <th scope="col" class="align-top text-center">Кількість осіб</th>
                                            <th scope="col" class="align-top text-center">Співвідношення, %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">до 6 000</th>
                                            <td class="text-center">244</td>
                                            <td class="text-center">7.5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"> 6 000,01 - 7 000,00</th>
                                            <td class="text-center">375</td>
                                            <td class="text-center">11.6</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7 000,01 - 8 000,00</th>
                                            <td class="text-center">248</td>
                                            <td class="text-center">7.6</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8 000,01 - 10 000,00</th>
                                            <td class="text-center">467</td>
                                            <td class="text-center">14.4</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10 000,01 - 12 000,00</th>
                                            <td class="text-center">410</td>
                                            <td class="text-center">12.6</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">12 000,01 - 15 000,00</th>
                                            <td class="text-center">517</td>
                                            <td class="text-center">15.9</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">15 000,01 - 20 000,00</th>
                                            <td class="text-center">434</td>
                                            <td class="text-center">13.4</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">20 000,01 - 25 000,00</th>
                                            <td class="text-center">197</td>
                                            <td class="text-center">6.1</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">25 000,01 - 30 000,00</th>
                                            <td class="text-center">157</td>
                                            <td class="text-center">4.8</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">понад 30 000,00</th>
                                            <td class="text-center">197</td>
                                            <td class="text-center">6.1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 mx-0 px-0 text-center">
                            <h6 class="bg-transparent px-1 pt-0 pb-3 m-1">
                               * Згідно з інформацією Начальника Відділу праці та заробітної плати Ю.О Писанко
                            </h6>
                            <a href="avarage-salary.php" class="btn btn-link btn-light border-primary mx-1 mt-0 mb-2 font-weight-bold text_color">
                                &laquo;&nbsp;Назад
                            </a>
                        </div>
                    </div>
            </div>
            </aside>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>