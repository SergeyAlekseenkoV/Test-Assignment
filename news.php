<?php include_once "header.php"; ?>
<title>Портал-Новини</title>
</head>

<body>
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section id="main" class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div
                class="d-flex justify-content-end justify-content-md-between align-items-baseline mt-3 mt-md-2 mt-lg-3 home_heading">
                <h3 class="d-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Перелік категорій новин</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
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
                <aside id="news-category" class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-2 pl-xl-3 py-3 py-lg-0">
                    <!-- cards news -->
                    <div class="row mx-0 p-1 border border-dark">
                        <!-- mgok news -->
                        <div class="col-12 col-lg-6 px-0 mx-0 pt-lg-0">
                            <div class="card border position-relative m-1">
                                <img src="img/pexels-08.jpg" alt="фото" class="card-img-top">
                                <div class="d-flex flex-column justify-content-center card-body p-2 position-absolute">
                                    <div class="text-center">
                                        <p class="lead font-weight-bold card-title text-white mb-1 mt-0 pt-0">
                                            <a href="MGOK-news.php"
                                                class="d-flex flex-column text-uppercase text-white py-5 news_link">
                                                <span class="align-self-center"><i class="fas fa-cogs fa-3x"></i></span>
                                                Новини комбінату</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- city news -->
                        <div class="col-12 col-lg-6 pt-3 pt-lg-0 px-0 mx-0">
                            <div class="card border position-relative m-1">
                                <img src="img/city2.jpg" alt="фото" class="card-img-top">
                                <div class="d-flex flex-column justify-content-center card-body p-2 position-absolute">
                                    <div class="text-center">
                                        <p class="lead font-weight-bold card-title text-white mb-1 mt-0 pt-0">
                                            <a href="MGOK-news.php"
                                                class="d-flex flex-column text-uppercase text-white py-5 news_link">
                                                <span class="align-self-center"><i class="fas fa-city fa-3x"></i></span>
                                                Новини міста</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sport news -->
                        <div class="col-12 col-lg-6 pt-3 pt-lg-0 px-0 mx-0">
                            <div class="card border position-relative m-1">
                                <img src="img/sport.jpg" alt="фото" class="card-img-top">
                                <div class="d-flex flex-column justify-content-center card-body p-2 position-absolute">
                                    <div class="text-center">
                                        <p class="lead font-weight-bold card-title text-white mb-1 mt-0 pt-0">
                                            <a href="sport-news.php"
                                                class="d-flex flex-column text-uppercase text-white py-5 news_link">
                                                <span class="align-self-center"><i
                                                        class="fas fa-dumbbell fa-3x"></i></span> Новини спорту</a>
                                        </p>
                                    </div>
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