<?php include_once "header.php"; ?>
<title>Результати СБВ</title>
</head>
<!-- content -->
<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 HR-documents-list">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Результати СБВ</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php"
                    class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i>
                </a>
            </div>
            <div class="row mx-0 px-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <div class="row mx-0 mb-5 border border-primary rounded bg_muted">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2
                                class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 m-1 text-white bg_headers">
                                Розподіл за балами аудиту приміщень структурних підрозділів комбінату у &#8545; кварталі 2021р 
                            </h2>
                        </div>
                        <!-- photo results -->
                        <div class="col-12 p-1 thumb mx-auto min-height">
                            <h3 class="text-center font-weight-bold">5C - Виробництво</h3>
                            <a data-fancybox="gallery" href="../build/img/media/results-5s-enterprise.png" class="position-relative little-filter-effect d-block height-100p text_color">
                                <p class="lead position-absolute mt-1 ml-1 mb-0 px-2 bg_info_through"></p>
                                <img src="../build/img/media/results-5s-enterprise.png" alt="photo"
                                    class="img-fluid obj-fit w-100 border border-primary">
                            </a>
                        </div>
                        <div class="col-12 p-1 thumb mx-auto min-height">
                            <h3 class="text-center font-weight-bold">5C - Офіс</h3>
                            <a data-fancybox="gallery" href="../build/img/media/results-5s-office.png" class="position-relative little-filter-effect d-block height-100p text_color">
                                <p class="lead position-absolute mt-1 ml-1 mb-0 px-2 bg_info_through"></p>
                                <img src="../build/img/media/results-5s-office.png" alt="photo"
                                    class="img-fluid obj-fit w-100 border border-primary">
                            </a>
                        </div>
                        <!-- end photos -->
                        <div class="row w-100 mx-0">
                            <p class="col-12 lead text-center mx-3 my-2">* Оберіть файл який ви бажаете завантажити</p>
                            <div class="col-12 col-md-6 p-1 mx-auto">
                                <a href="5s-2-2021-enterprise.php"
                                    class="btn btn-light shadow py-5 w-100 text-uppercase text_color border border-info little-filter-effect">
                                    <span class="mr-3"></span>Результати аудиту у другому кварталі 2021р. 5С-Виробництво&nbsp;<i class="fas fa-file-pdf fa-2x"></i></a>
                            </div>
                            <div class="col-12 col-md-6 p-1 mx-auto">
                                <a href="5s-2-2021-office.php"
                                    class="btn btn-light shadow py-5 w-100 text-uppercase text_color border border-info little-filter-effect">
                                    <span class="mr-3"></span>Результати аудиту у другому кварталі 2021р. 5С-Офіс&nbsp;<i class="fas fa-file-pdf fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>