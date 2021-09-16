<?php include_once "header.php"; ?>
<title>Портал-Новини</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 mgok_news">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div
                class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Новини</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 px-0 mx-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 py-2 py-lg-0 bg-transparent">
                    <!-- cards news -->
                    <div id="news-category" class="row m-0 px-0 ml-lg-1 mb-1">
                        <!-- mgok news -->
                        <div class="col-6 col-md-3 pt-lg-0 px-0 m-0">
                            <div class="card position-relative mx-0">
                                <img src="../build/img/pexels-08.jpg" alt="фото" class="card-img-top obj-fit height-100p">
                                <div class="d-flex flex-column justify-content-center card-body p-2 position-absolute">
                                    <div class="text-center">
                                        <p class="lead font-weight-bold card-title text-white mb-1 mt-0 pt-0">
                                            <a href="MGOK-news.php"
                                                class="d-flex flex-column text-uppercase text-white py-2 news_link">
                                                <span class="align-self-center"><i class="fas fa-cogs fa-2x"></i></span>
                                                Новини комбінату</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- city news -->
                        <div class="col-6 col-md-3 pt-lg-0 px-0 m-0">
                            <div class="card position-relative mx-0">
                                <img src="../build/img/city2.jpg" alt="фото" class="card-img-top obj-fit height-100p">
                                <div class="d-flex flex-column justify-content-center card-body p-2 position-absolute">
                                    <div class="text-center">
                                        <p class="lead font-weight-bold card-title text-white mb-1 mt-0 pt-0">
                                            <a href="MGOK-news.php"
                                                class="d-flex flex-column text-uppercase text-white py-2 news_link">
                                                <span class="align-self-center"><i class="fas fa-city fa-2x"></i></span>
                                                Новини міста</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- social news -->
                        <div class="col-6 col-md-3 pt-lg-0 px-0 m-0">
                            <div class="card position-relative mx-0">
                                <img src="../build/img/social.jpg" alt="фото" class="card-img-top obj-fit height-100p">
                                <div class="d-flex flex-column justify-content-center card-body p-2 position-absolute">
                                    <div class="text-center">
                                        <p class="lead font-weight-bold card-title text-white mb-1 mt-0 pt-0">
                                            <a href="sport-news.php"
                                                class="d-flex flex-column text-uppercase text-white py-2 news_link">
                                                <span class="align-self-center">
                                                    <i class="fas fa-people-arrows fa-2x"></i></span> Соціальні новини</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- other news -->
                        <div class="col-6 col-md-3 pt-lg-0 px-0 m-0">
                            <div class="card position-relative mx-0">
                                <img src="../build/img/another.jpg" alt="фото" class="card-img-top obj-fit height-100p">
                                <div class="d-flex flex-column justify-content-center card-body p-2 position-absolute">
                                    <div class="text-center">
                                        <p class="lead font-weight-bold card-title mb-1 mt-0 pt-0 text_color">
                                            <a href="sport-news.php"
                                                class="d-flex flex-column text-uppercase py-2 text_color news_link">
                                                <span class="align-self-center"><i 
                                                    class="fab fa-sketch fa-2x"></i></span> Інше</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end category news -->
                    <div id="mgok-news" class="row mx-0 ml-lg-1 border border-primary rounded">
                        <!-- news item-->
                        <div class="col-12 col-md-6 col-lg-4 p-1">
                        <a href="#" class="d-block text_color">
                            <div class="card position-relative shadow card_link">
                                
                               <img src="../build/img/pexels-jayson-delos-santos-1139553.png" class="card-img-top height-210 obj-fit position-relative" alt="equipment">
                               <span class="position-absolute bg-primary rounded text-center text-uppercase small p-1 border text_color span_accent">Актуально</span>
                                <div class="card-body border-bottom bg-info pb-3 pt-2 px-2 overflow-hidden height-150">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ab nulla officiis inventore totam autem recusandae repellat reprehenderit et
                                         commodi.
                                    </p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description.php" class="btn btn-dark text-white read_more">Читати <span>&raquo;</span></a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 p-1">
                        <a href="#" class="d-block text_color">
                            <div class="card position-relative shadow card_link">
                               <img src="../build/img/pexels-tom-fisk-2101137 (4).jpg" class="card-img-top height-210 obj-fit position-relative" alt="equipment">
                                <div class="card-body border-bottom bg-info pb-3 pt-2 px-2 overflow-hidden height-150">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description.php" class="btn btn-dark text-white read_more">Читати <span>&raquo;</span></a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- news item-->
                        <div class="col-12 col-md-6 col-lg-4 p-1">
                        <a href="#" class="d-block text_color">
                            <div class="card position-relative shadow card_link">
                               <img src="../build/img/pexels-jayson-delos-santos-1139553.png" class="card-img-top height-210 obj-fit position-relative" alt="equipment">
                               <span class="position-absolute bg-primary rounded text-center text-uppercase small p-1 border text_color span_accent">Актуально</span>
                                <div class="card-body border-bottom bg-info pb-3 pt-2 px-2 overflow-hidden height-150">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ab nulla officiis inventore totam autem recusandae repellat reprehenderit et
                                         commodi.
                                    </p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description.php" class="btn btn-dark text-white read_more">Читати <span>&raquo;</span></a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 p-1">
                        <a href="#" class="d-block text_color">
                            <div class="card position-relative shadow card_link">
                               <img src="../build/img/pexels-tom-fisk-2101137 (4).jpg" class="card-img-top height-210 obj-fit position-relative" alt="equipment">
                                <div class="card-body border-bottom bg-info pb-3 pt-2 px-2 overflow-hidden height-150">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description.php" class="btn btn-dark text-white read_more">Читати <span>&raquo;</span></a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 p-1">
                        <a href="#" class="d-block text_color">
                            <div class="card position-relative shadow card_link">
                               <img src="../build/img/pexels-08.png" class="card-img-top height-210 obj-fit position-relative" alt="equipment">
                                <div class="card-body border-bottom bg-info pb-3 pt-2 px-2 overflow-hidden height-150">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description.php" class="btn btn-dark text-white read_more">Читати <span>&raquo;</span></a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- news item -->
                        <div class="col-12 col-md-6 col-lg-4 p-1">
                        <a href="#" class="d-block text_color">
                            <div class="card position-relative shadow card_link">
                               <img src="../build/img/pexels-tom-fisk-2101137 (4).jpg" class="card-img-top height-210 obj-fit position-relative" alt="equipment">
                                <div class="card-body border-bottom bg-info pb-3 pt-2 px-2 overflow-hidden height-150">
                                    <h5 class="card-title text_color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h5>
                                    <p class="card-text text_color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap bg-info text-left text_color">
                                    <span class="my-2 date_out">26 травня 2021</span>
                                    <a href="news-description.php" class="btn btn-dark text-white read_more">Читати <span>&raquo;</span></a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <nav aria-label="Page navigation example" class="col-12 pt-3">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                   <a class="page-link font-weight-bold text_color" href="#" aria-label="Previous">
                                       <span aria-hidden="true">&laquo;</span>
                                   </a>
                                </li>
                                <li class="page-item"><a class="page-link text_color" href="#">1</a></li>
                                <li class="page-item"><a class="page-link text_color" href="#">2</a></li>
                                <li class="page-item"><a class="page-link text_color" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link font-weight-bold text_color" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> 
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>