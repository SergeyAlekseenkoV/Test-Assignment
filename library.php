<?php include_once "header.php"; ?>
<title>Портал-Бібліотека</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Бібліотека</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <div id="library" class="row mx-0 border border-primary rounded">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2 class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 mt-1 mb-0 text-white bg_headers">
                                Бібліотека розділи</h2>
                        </div>
                        <div class="row w-100 mx-1 mb-1 mt-0">
                            <!-- tabs -->
                            <div class="col-12 mx-0 px-1 mt-1 border border-secondary bg_HR">
                                <!-- tabs navigation -->
                                <ul class="nav nav-pills nav-fill nav-justified mt-1" id="ideasTab" role="tablist">
                                    <li class="nav-item rounded" role="presentation">
                                        <!-- ===== basis tab ===== -->
                                        <a class="nav-link active my-0 p-1 py-md-0 px-md-2 text_color font-weight-bold" id="basis" data-toggle="pill" href="#basis-tab" role="tab" 
                                            aria-controls="basis-tab" aria-selected="true">
                                            Нормативно-<br class="d-sm-none">правова база &nbsp;&nbsp;<span class="text-white mb-1">&raquo;</span></a>
                                        <!-- ====== end ====== -->
                                    </li>
                                    <li class="nav-item rounded" role="presentation">
                                        <!-- ++++ ===== monitoring tab ===== ++++ -->
                                        <a class="nav-link my-0 p-1 py-md-0 px-md-2 text_color font-weight-bold" id="monitoring" data-toggle="pill" href="#monitoring-tab" role="tab" 
                                            aria-controls="monitoring-tab" aria-selected="false">
                                            Моніторинг <br class="d-sm-none">законо&shy;давства &nbsp;&nbsp;<span class="text-white mb-1">&raquo;</span></a>
                                        <!-- ++++++ end ++++++ -->
                                    </li>
                                </ul>
                                <!-- end tabs navigations -->
                                <!-- tabs content blocks -->
                                <div class="tab-content px-0" id="myTabContent">
                                    <!-- ===== basis tab ===== -->
                                    <div class="tab-pane fade show active" id="basis-tab" role="tabpanel" aria-labelledby="basis">
                                        <!-- collapsed blocks -->
                                        <div class="row mx-0 px-0">
                                            <div class="col-12 px-0">
                                                <button id="docs" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#common-block" role="button" aria-expanded="false" aria-controls="common-block">
                                                    Організаційно-розпорядчі документи (загальні питання)&nbsp;
                                                    <i class="fas fa-chevron-right ml-2"></i></button>
                                            </div>
                                            <div id="common-block" class="collapse show row w-100 mx-1 px-0">
                                                <!-- ========= collapse block ========= -->
                                                    <!-- documents-list -->
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="settingFile.php" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info">Документ&nbsp;<i class="fas fa-file-pdf"></i></a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="transfer.php" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info">Документ&nbsp;<i class="fas fa-file-pdf"></i></a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="firing.php" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info">Документ&nbsp;<i class="fas fa-file-pdf"></i></a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="replacement.php" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info">Документ&nbsp;<i class="fas fa-file-pdf"></i></a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="asked-firing.php" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info">Документ&nbsp;<i class="fas fa-file-pdf"></i></a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative invisible">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info">Документ&nbsp;<i class="fas fa-file-pdf"></i></a>
                                                    </div>
                                                    <!-- end list -->
                                                <!-- ========= end block ========= -->
                                            </div>
                                            <div class="col-12 px-0">
                                                <button id="docs-directions" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#directions-block" role="button" aria-expanded="false" aria-controls="directions-block">
                                                    За напрямками&nbsp;
                                                    <i class="fas fa-chevron-right ml-2"></i></button>
                                            </div>
                                            <!-- ========= collapse block ========= -->
                                            <div id="directions-block" class="collapse col-12 px-0">
                                                <div class="row mx-0">
                                                    <!-- documents-list -->
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info shadow-light"><strong>Охорона праці</strong></a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info shadow-light"><strong>Діловодство</strong></a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info shadow-light">Напрямок3</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info shadow-light">Напрямок4</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative invisible">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text-uppercase text_color little-filter-effect border border-info shadow-light">Напрямок</a>
                                                    </div>
                                                    <!-- end list -->
                                                </div>
                                                <!-- ========= end block ========= -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ====== end ======= -->
                                    <!-- ++++ ===== monitoring tab ===== ++++ -->
                                    <div class="tab-pane fade" id="monitoring-tab" role="tabpanel" aria-labelledby="monitoring">
                                        <!-- collapsed blocks -->
                                        <div class="row mx-0 px-1">
                                            <div class="col-12 px-0 d-flex flex-row justify-content-end">
                                                <button id="enterpriseInfo" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#enterprise-block" role="button" aria-expanded="false" aria-controls="enterprise-block">
                                                    Інфо що стосується підприємства&nbsp;
                                                    <i class="fas fa-chevron-right ml-2"></i></button>
                                            </div>
                                            <div id="enterprise-block" class="collapse show col-12 px-0">
                                                <!-- ========= collapse block ========= -->
                                                <div class="row w-100 mx-0">
                                                    <!-- documents-list -->
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info">Інформація 1</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info">
                                                            Як перереєструвати право власності на земельну ділянку при купівлі нерухомості, яка на ній розміщена: зміни від Верховної Ради</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info">Інформація 3</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info">Інформація 4</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info">
                                                            Як перереєструвати право власності на земельну ділянку при купівлі нерухомості, яка на ній розміщена: зміни від Верховної Ради</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative invisible">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info">Інформація</a>
                                                    </div>
                                                    <!-- end list -->
                                                </div>
                                                <!-- ========= end block ========= -->
                                            </div>
                                            <div class="col-12 px-0 d-flex flex-row justify-content-end">
                                                <button id="peopleInfo" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#people-block" role="button" aria-expanded="false" aria-controls="people-block">
                                                    Інфо що стосується громадян&nbsp;
                                                    <i class="fas fa-chevron-right ml-2"></i></button>
                                                <!-- ========= collapse block ========= -->
                                            </div>
                                            <div id="people-block" class="collapse col-12 px-0">
                                                <div class="row w-100 mx-0 mb-2">
                                                    <!-- documents-list -->
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info min-height">
                                                            Як перереєструвати право власності на земельну ділянку при купівлі нерухомості, яка на ній розміщена: зміни від Верховної Ради</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info min-height">Інформація 2</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info min-height">
                                                            Як перереєструвати право власності на земельну ділянку при купівлі нерухомості, яка на ній розміщена: зміни від Верховної Ради</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info min-height">
                                                            Інформація 4.</a>
                                                    </div>
                                                    <div class="col-12 col-md-6 p-1 my-1 mx-0 position-relative invisible">
                                                        <a href="#" class="btn bg_info_through shadow py-3 w-100 text_color little-filter-effect border border-info min-height">Інформація</a>
                                                    </div>
                                                    <!-- end list -->
                                                </div>
                                                <!-- ========= end block ========= -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ++++++ end ++++++ -->
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>