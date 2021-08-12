<?php include_once "header.php"; ?>
<title>Портал-Навчання</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Навчання</h3>
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
                    <div id="study-part" class="row mx-0 border border-primary rounded bg_light_through">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2
                                class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 my-1 text-white bg_headers">
                                Розділи</h2>
                        </div>
                        <!-- study-list -->
                        <div class="col-12 col-md-6 p-1 mx-0">
                            <a href="#"
                                class="btn btn-light shadow py-5 w-100 text-uppercase text_color">
                                <span class="mr-3"><i class="far fa-list-alt"></i></span>Перелік професій</a>
                        </div>
                        <div class="col-12 col-md-6 p-1 mx-0">
                            <a href="#"
                                class="btn btn-light shadow py-5 w-100 text-uppercase text_color">
                                <span class="mr-3"><i class="fas fa-user-graduate"></i></span>Виробниче навчання</a>
                        </div>
                        <div class="col-12 p-1 mx-0">
                            <a href="#"
                                class="btn btn-light shadow py-5 w-100 text-uppercase text_color">
                                <span class="mr-3"><i class="fas fa-list-ol"></i></span>Порядок оформлення заявок</a>
                        </div>
                        <div class="col-12 col-md-6 p-1 mx-0">
                            <a href="#"
                                class="btn btn-light shadow py-5 w-100 text-uppercase text_color">
                                <span class="mr-3"><i class="far fa-calendar-alt"></i></span>Розклад занять груп</a>
                        </div>
                        <div class="col-12 col-md-6 p-1 mx-0">
                            <a href="#"
                                class="btn btn-light shadow py-5 w-100 text-uppercase text_color">
                                <span class="mr-3"><i class="fas fa-database"></i></span>База знань</a>
                        </div>
                        <!-- end list -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>