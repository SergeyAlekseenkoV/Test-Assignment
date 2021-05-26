<?php include_once "header.php"; ?>
<title>Портал-Новини комбінату</title>
</head>

<body>
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section id="main" class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div
                class="d-flex justify-content-end justify-content-md-between align-items-baseline mt-3 mt-md-2 mt-lg-3 home_heading">
                <h2 class="d-none d-lg-block pt-sm-2 pt-lg-3 text-left text_color"><br>Новини комбінату</h2>
                <h2 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text_color">
                    Акціонерне Товариство <br>"Марганецький гірничо-збагачувальний
                    комбінат"</h2>
                <a href="index.php"
                    class="align-self-baseline btn btn-small btn-dark text-white mt-5 mb-3 shadow border"
                    role="button">Вийти</a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <article class="col-sm-12 col-lg-2 pl-0 px-0 text-center">
                    <nav class="sticky-top accordion shadow" id="accordionLib">
                        <!-- home card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark" id="homePage">
                                <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase"
                                    href="home.php" type="button" role="button">
                                    Головна
                                </a>
                            </div>
                        </div>
                        <!-- news card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark text-info" id="news-item">
                                <a class="btn btn-link bg-transparent btn-block text-decoration-none text-lg-left collapsed text-info text-uppercase"
                                    type="button" href="news.php" role="button">
                                    Новини
                                </a>
                            </div>
                        </div>
                        <!-- library card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark" id="first-item">
                                <a class="btn btn-link bg-transparent btn-block text-decoration-none text-lg-left text-white text-uppercase"
                                    type="button" href="library.php" role="button">
                                    Бібліотека
                                </a>
                            </div>
                        </div>
                        <!-- gallary card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark" id="gallary-item">
                                <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase"
                                    type="button" href="gallary.php" role="button">
                                    Галерея
                                </a>
                            </div>
                        </div>
                        <!-- ideas card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark" id="ideas-item">

                                <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase"
                                    type="button" href="ideas.php" role="button">
                                    База ідей
                                </a>
                            </div>
                        </div>
                        <!-- ask card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark" id="ask-item">
                                <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase"
                                    type="button" href="asking.php" role="button">
                                    Опитування
                                </a>
                            </div>
                        </div>
                        <!-- study card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark" id="study-item">
                                <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase"
                                    type="button" href="study.php" role="button">
                                    Навчання
                                </a>
                            </div>
                        </div>
                        <!-- system card -->
                        <div class="card bg-transparent">
                            <div class="card-header p-0 bg-dark" id="system-item">
                                <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase"
                                    type="button" href="system-five.php" role="button">
                                    Система 5С
                                </a>
                            </div>
                        </div>
                    </nav>
                </article>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-2 pl-xl-3 py-3 py-lg-0">
                    <!-- cards news -->
                    <div class="row mx-0 p-1 bg-light border border-dark">
                        <!-- news item-->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 pt-3 pb-0 py-lg-1">
                            <div class="card border border-white mx-1">
                               <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top" alt="equipment">
                                <div class="card-body bg-info">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark text-white">Читати >></a>
                                </div>
                                <div class="card-footer bg-info text-left text_color">
                                    <span class="date_out">26 травня 2021</span>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 pt-3 pb-0 py-lg-1">
                            <div class="card border border-white mx-1">
                               <img src="img/pexels-tom-fisk-2101137 (4).jpg" class="card-img-top" alt="equipment">
                                <div class="card-body bg-info">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark text-white">Читати >></a>
                                </div>
                                <div class="card-footer bg-info text-left text_color">
                                    <span class="date_out">25 квітня 2021</span>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 pt-3 pb-0 py-lg-1">
                            <div class="card border border-white mx-1">
                               <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top" alt="equipment">
                                <div class="card-body bg-info">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark text-white">Читати >></a>
                                </div>
                                <div class="card-footer bg-info text-left text_color">
                                    <span class="date_out">02 травня 2021</span>
                                </div>
                            </div>
                        </div>
                        <!-- news item-->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 pt-3 pb-0 py-lg-1">
                            <div class="card border border-white mx-1">
                               <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top" alt="equipment">
                                <div class="card-body bg-info">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark text-white">Читати >></a>
                                </div>
                                <div class="card-footer bg-info text-left text_color">
                                    <span class="date_out">26 травня 2021</span>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 pt-3 pb-0 py-lg-1">
                            <div class="card border border-white mx-1">
                               <img src="img/pexels-tom-fisk-2101137 (4).jpg" class="card-img-top" alt="equipment">
                                <div class="card-body bg-info">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark text-white">Читати >></a>
                                </div>
                                <div class="card-footer bg-info text-left text_color">
                                    <span class="date_out">25 квітня 2021</span>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 pt-3 pb-0 py-lg-1">
                            <div class="card border border-white mx-1">
                               <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top" alt="equipment">
                                <div class="card-body bg-info">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark text-white">Читати >></a>
                                </div>
                                <div class="card-footer bg-info text-left text_color">
                                    <span class="date_out">02 травня 2021</span>
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