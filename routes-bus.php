<?php include_once "header.php"; ?>
<title>Маршрут руху автобусів</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 pb-lg-5 best_team">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color wow slideInLeft" data-animation="slideInLeft">Маршрут руху автобусів</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 mx-0 px-0">
                <?php include_once "left-nav.php"; ?>
                <!-- aside -->
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0 wow fadeInUp" data-animation="fadeInUp">
                    <div class="row mx-0 p-1 border border-primary rounded">
                        <div class="col-12 mx-0 px-0 text-center mb-1 mb-md-0">
                            <h2 class="text-uppercase px-0 py-3 mx-0 my-0 mb-md-1 text-white bg_headers">Маршрут руху
                                автотранспорту</h2>
                        </div>
                        <!-- collapsed sections -->
                        <div class="col-12 px-0 text-center border border-info">
                            <div class="route_bus accordion bg_bus" id="routeBus">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <!-- ================ route-4 ================ -->
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-4" role="button" aria-expanded="true">
                                                Схема руху автобуса за маршрутом №<strong> 4</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-4" aria-labelledby="headingOne" data-parent="#routeBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <iframe src="https://www.google.com/maps/d/embed?mid=1UnWZgW5S1Ew0WJIoZSsaGhabaLUvSmZN&&z=12" width="100%" height="480"></iframe>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <!-- ================ route-5 ================ -->
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-5" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 5</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-5" aria-labelledby="headingTwo" data-parent="#routeBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-11 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-11" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 11</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-11" aria-labelledby="headingThree" data-parent="#routeBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-14 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-14" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 14</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-14" aria-labelledby="headingFour" data-parent="#routeBus" class="card-body p-0 collapse">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-15 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-15" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 15</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-15" aria-labelledby="headingFive" data-parent="#routeBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-16 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-16" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 16</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-16" aria-labelledby="headingSix" data-parent="#routeBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-17 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-17" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 17</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-17" aria-labelledby="headingSeven" data-parent="#routeBus" 
                                         class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-19 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-19" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 19</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-19" aria-labelledby="headingEight" data-parent="#routeBus" 
                                         class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                       
                                    </div>
                                </div>
                                <!-- ================ route-29 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-29" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 29</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-29" aria-labelledby="headingNine" data-parent="#routeBus" 
                                         class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-32 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-collapse d-flex justify-content-center align-items-center shadow-light btn bg_light_through border border-primary mx-1 my-2 text-uppercase text_color little-filter-effect" 
                                                data-toggle="collapse" data-target="#route-32" role="button" aria-expanded="false">
                                                Схема руху автобуса за маршрутом №<strong> 32</strong>&nbsp;
                                                <i class="fas fa-chevron-right ml-2"></i></button>
                                        </h2>
                                    </div>
                                    <div id="route-32" aria-labelledby="headingTen" data-parent="#routeBus" 
                                         class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        
                                    </div>
                                </div>
                                <!-- ================ route-end ================ -->
                            </div>
                        </div>
                        <!-- collapsed sections end-->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>