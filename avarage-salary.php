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
                    <div class="row m-0 p-0 border border-primary rounded shadow">
                        <!-- competition heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h3 class="bg-info text-uppercase font-weight-bold px-0 py-3 mx-1 mt-1 mb-0 border border-secondary">
                                Інформація з праці за
                                <br class="d-block d-md-none"> червень 2021
                            </h3>
                        </div>
                        <!-- table for avarage salary -->
                        <div class="col-12 mt-1 mb-0 px-1">
                            <div class="table table-responsive table-striped table-bordered table-hover border-primary mb-1">
                                <table class="table table-light table-striped mb-0 border border-primary text_color">
                                    <thead>
                                        <tr class="bg-secondary text_color">
                                            <th scope="col" class="align-top">Назва показни&shy;ка</th>
                                            <th scope="col" colspan="2" class="align-top text-center">червень</th>
                                            <th scope="col" colspan="2" class="align-top text-center">З початку року
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Середньомісячна зарплата <br>на звітну чисельність, грн</th>
                                            <td class="text-center">13644,1</td>
                                            <td class="text-center">10710,4</td>
                                            <td class="text-center">13033,9</td>
                                            <td class="text-center">10802,7</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Середньомісячна зарплата <br>провідних професій, грн
                                                <br>ГРОЗ 6р
                                            </th>
                                            <td class="text-center">31009,3</td>
                                            <td class="text-center">26319,3</td>
                                            <td class="text-center">30037,3</td>
                                            <td class="text-center">24553,4</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ГРОЗ 5р</th>
                                            <td class="text-center">24817,3</td>
                                            <td class="text-center">20172,4</td>
                                            <td class="text-center">23684,4</td>
                                            <td class="text-center">19477,7</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Підземний кріпильник</th>
                                            <td class="text-center">15015,3</td>
                                            <td class="text-center">11506,2</td>
                                            <td class="text-center">14236,3</td>
                                            <td class="text-center">11144,4</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Підземний машиніст електровозу</th>
                                            <td class="text-center">15635,1</td>
                                            <td class="text-center">11450,1</td>
                                            <td class="text-center">17341,3</td>
                                            <td class="text-center">13071,2</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Машиніст екскаватору</th>
                                            <td class="text-center">12246,7</td>
                                            <td class="text-center">15905,9</td>
                                            <td class="text-center">16503,8</td>
                                            <td class="text-center">15149,0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Водій технологічного транспорту</th>
                                            <td class="text-center">9940,3</td>
                                            <td class="text-center">11140,0</td>
                                            <td class="text-center">11350,0</td>
                                            <td class="text-center">9978,0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Машиніст бульдозера</th>
                                            <td class="text-center">9909,0</td>
                                            <td class="text-center">12282,8 </td>
                                            <td class="text-center">12646,5</td>
                                            <td class="text-center">12668,0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Машиніст тепловоза</th>
                                            <td class="text-center">18164,4</td>
                                            <td class="text-center">13697,4</td>
                                            <td class="text-center">17679,0</td>
                                            <td class="text-center">13388,3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- divisions between salaries -->
                        <div class="col-12 p-0 m-0 text-center">
                            <h3 class="bg-info p-3 px-md-0 mx-1 my-0 border border-primary text-uppercase text_color">
                                Розподіл робітників за розмірами заробітної плати
                            </h3>
                        </div>
                        <!-- divisions table -->
                        <div class="col-12 mt-1 px-1">
                            <div class="table table-responsive table-striped table-bordered table-hover border-primary">
                                <table class="table table-light table-striped mb-0 border border-primary text_color">
                                    <thead>
                                        <tr class="bg-secondary">
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
                            <h6 class="bg-transparent px-1 py-3 m-1 text-white">
                               * Згідно з інформацією Начальника Відділу праці та заробітної плати Ю.О Писанко
                            </h6>
                        </div>
                    </div>
            </div>
            </aside>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>