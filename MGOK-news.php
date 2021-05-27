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
                <h3 class="d-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Новини комбінату</h3>
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
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-2 pl-xl-3 py-3 py-lg-0">
                    <!-- cards news -->
                    <div id="mgok-news" class="row mx-0 p-1 bg-light border border-dark">
                        <!-- news item-->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 py-1">
                            <div class="card border mx-1 position-relative card_link">
                               <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top position-relative" alt="equipment">
                               <span class="position-absolute bg-primary rounded text-center text-uppercase small p-1 border text_color span_accent">Актуально</span>
                                <div class="card-body border-bottom bg-info pb-3 pt-2 overflow-hidden">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ab nulla officiis inventore totam autem recusandae repellat reprehenderit et
                                         commodi.
                                    </p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description0.php" class="btn btn-dark text-white read_more">Читати >></a>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 py-1">
                            <div class="card border mx-1 position-relative card_link">
                               <img src="img/pexels-tom-fisk-2101137 (4).jpg" class="card-img-top position-relative" alt="equipment">
                                <div class="card-body border-bottom bg-info pb-3 pt-2 overflow-hidden">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description.php" class="btn btn-dark text-white read_more">Читати >></a>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 py-1">
                            <div class="card border mx-1 position-relative card_link">
                                <img src="img/carosel2.jpg" class="card-img-top position-relative" alt="equipment">
                                <span class="position-absolute bg-primary rounded text-center text-uppercase small p-1 border text_color span_accent">Наші люди</span>
                                <div class="card-body border-bottom bg-info pb-3 pt-2 overflow-hidden">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description1.php" class="btn btn-dark text-white read_more">Читати >></a>
                                </div>
                            </div>
                        </div>
                        <!-- news item-->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 py-1">
                            <div class="card border mx-1 position-relative card_link">
                                <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top position-relative" alt="equipment">
                                <span class="position-absolute bg-primary rounded text-center text-uppercase small p-1 border text_color span_accent">Важливо</span>
                                <div class="card-body border-bottom bg-info pb-3 pt-2 overflow-hidden">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description2.php" class="btn btn-dark text-white read_more">Читати >></a>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 py-1">
                            <div class="card border mx-1 position-relative card_link">
                                <img src="img/pexels-tom-fisk-2101137 (4).jpg" class="card-img-top position-relative" alt="equipment">
                                <span class="position-absolute bg-primary rounded text-center text-uppercase small p-1 border text_color span_accent">Гарна справа</span>
                                <div class="card-body border-bottom bg-info pb-3 pt-2 overflow-hidden">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description3.php" class="btn btn-dark text-white read_more">Читати >></a>
                                </div>
                            </div>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 px-0 mx-0 pt-3 pb-0 py-lg-1">
                            <div class="card border mx-1 position-relative card_link">
                                <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top position-relative" alt="equipment">
                                <div class="card-body border-bottom bg-info pb-3 pt-2 overflow-hidden">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description4.php" class="btn btn-dark text-white read_more">Читати >></a>
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