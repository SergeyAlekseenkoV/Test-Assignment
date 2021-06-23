<?php include_once "header.php"; ?>
<title>Портал-Новина перша</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 news_description">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-2 mt-lg-3 home_heading">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Новини комбінату
                </h3>
                <h3
                    class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
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
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <div id="news-description" class="row mx-0 bg-transparent border border-primary rounded">
                        <!-- news item-description -->
                        <div class="col-12 px-0 mx-0 py-1">
                            <div class="card bg-transparent border mx-1 shadow">
                                <img src="img/pexels-jayson-delos-santos-1139553.png" class="card-img-top"
                                    alt="equipment">
                                <div class="card-body p-2 bg_info_through">
                                    <h4 class="card-title px-0 text_color">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit.
                                        Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h4>
                                        <hr class="bg-dark my-0">
                                    <div
                                        class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                                        <!-- button-show -->
                                        <button class="btn bg-transparent position-relative py-0 pl-0 pr-1 text_color" id="showPhotos" 
                                                data-toggle="tooltip" data-placement="bottom" data-original-title="Усі фото"><i class="fas fa-camera fa-2x"></i></button>
                                        <!-- author name and date -->
                                        <address class="mb-0 py-0 text_color"><i class="fas fa-portrait"></i><a
                                                rel="author" href="#" class="ml-2">Деякий Автор</a></address>
                                        <time class="ml-0 py-0 ml-md-3 text_color" pubdate datetime="2021-05-28"
                                            title="8 травня 2021">28 травня 2021</time>
                                    </div>
                                    <hr class="bg-dark my-0">
                                    <div class="row mx-0 gallery" id="gallery">
                                        <!-- item -->
                                        <article
                                            class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 overflow-hidden position-relative bg-dark px-0 mx-0 border-left border-right work-item">
                                            <img src="img/pexels-07.png" alt="work"
                                                class="img-fluid work-item-img">
                                            <a href="#" role="button"
                                                class="position-absolute d-none d-sm-block work-item-icon"
                                                data-toggle="modal" data-target="#item_1">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </article>
                                        <!-- item -->
                                        <article
                                            class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 overflow-hidden position-relative bg-dark px-0 mx-0 border-left border-right work-item">
                                            <img src="img/pexels-weir-esco-3906736.png" alt="work"
                                                class="img-fluid work-item-img">
                                            <a href="#" role="button"
                                                class="position-absolute d-none d-sm-block work-item-icon"
                                                data-toggle="modal" data-target="#item_2">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </article>
                                        <!-- item -->
                                        <article
                                            class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 overflow-hidden position-relative bg-dark px-0 mx-0 border-left border-right work-item">
                                            <img src="img/pexels-tom-fisk-2101137 (4).jpg" alt="work"
                                                class="img-fluid work-item-img">
                                            <a href="#" role="button"
                                                class="position-absolute d-none d-sm-block work-item-icon"
                                                data-toggle="modal" data-target="#item_3">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </article>
                                        <!-- item -->
                                        <article
                                            class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 overflow-hidden position-relative bg-dark px-0 mx-0 border-left border-right work-item">
                                            <img src="img/pexels-weir-esco-3906748.png" alt="work"
                                                class="img-fluid work-item-img">
                                            <a href="#" role="button"
                                                class="position-absolute d-none d-sm-block work-item-icon"
                                                data-toggle="modal" data-target="#item_4">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </article>
                                        <!-- item -->
                                        <article
                                            class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 overflow-hidden position-relative bg-dark px-0 mx-0 border-left border-right work-item">
                                            <img src="img/carosel2.jpg" alt="work"
                                                class="img-fluid work-item-img">
                                            <a href="#" role="button"
                                                class="position-absolute d-none d-sm-block work-item-icon"
                                                data-toggle="modal" data-target="#item_5">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </article>
                                        <!-- item -->
                                        <article
                                            class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 overflow-hidden position-relative bg-dark px-0 mx-0 border-left border-right work-item">
                                            <img src="img/pexels-jayson-delos-santos-1139553.png" alt="work"
                                                class="img-fluid work-item-img">
                                            <a href="#" role="button"
                                                class="position-absolute d-none d-sm-block work-item-icon"
                                                data-toggle="modal" data-target="#item_6">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </article>
                                        <!-- Modal-1 -->
                                        <div class="modal fade-in pr-0" id="item_1" data-backdrop="static"
                                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-body position-relative">
                                                        <img src="img/pexels-07.png" alt="work"
                                                            class="img-fluid work-item-img">
                                                        <button type="button"
                                                            class="close position-absolute work-modal-close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"
                                                                class="btn btn-transparent mb-4 p-0 text-white"><i class="far fa-times-circle fa-4x"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal-2-->
                                        <div class="modal fade-in pr-0" id="item_2" data-backdrop="static"
                                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-body position-relative">
                                                        <img src="img/pexels-weir-esco-3906736.png" alt="work"
                                                            class="img-fluid work-item-img">
                                                        <button type="button"
                                                            class="close position-absolute work-modal-close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"
                                                                class="btn btn-transparent mb-4 p-0 text-white"><i class="far fa-times-circle fa-4x"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal-3-->
                                        <div class="modal fade-in pr-0" id="item_3" data-backdrop="static"
                                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-body position-relative">
                                                        <img src="img/pexels-tom-fisk-2101137 (4).jpg" alt="work"
                                                            class="img-fluid work-item-img">
                                                        <button type="button"
                                                            class="close position-absolute work-modal-close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"
                                                                class="btn btn-transparent mb-4 p-0 text-white"><i class="far fa-times-circle fa-4x"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal-4-->
                                        <div class="modal fade-in pr-0" id="item_4" data-backdrop="static"
                                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-body position-relative">
                                                        <img src="img/pexels-weir-esco-3906748.png" alt="work"
                                                            class="img-fluid work-item-img">
                                                        <button type="button"
                                                            class="close position-absolute work-modal-close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"
                                                                class="btn btn-transparent mb-4 p-0 text-white"><i class="far fa-times-circle fa-4x"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal-5-->
                                        <div class="modal fade-in pr-0" id="item_5" data-backdrop="static"
                                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-body position-relative">
                                                        <img src="img/carosel2.jpg" alt="work"
                                                            class="img-fluid work-item-img">
                                                        <button type="button"
                                                            class="close position-absolute work-modal-close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"
                                                                class="btn btn-transparent mb-4 p-0 text-white"><i class="far fa-times-circle fa-4x"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal-6 -->
                                        <div class="modal fade-in pr-0" id="item_6" data-backdrop="static"
                                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-body position-relative">
                                                        <img src="img/pexels-jayson-delos-santos-1139553.png" alt="work"
                                                            class="img-fluid work-item-img">
                                                        <button type="button"
                                                            class="close position-absolute work-modal-close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"
                                                                class="btn btn-transparent mb-4 p-0 text-white"><i class="far fa-times-circle fa-4x"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                        <!-- button-close -->
                                            <button class="btn btn-transparent my-3 p-0" id="hidePhotos"><i class="far fa-times-circle fa-2x"></i></button>
                                        </div>
                                    </div>
                                    <p class="lead card-text text_color">Some quick example text to build on the card
                                        title and make up the bulk of the card's content.
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ab nulla
                                        officiis inventore totam autem recusandae repellat reprehenderit et
                                        commodi.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis sint tempore
                                        fuga nesciunt rem commodi vel consequatur
                                        quia, quo quod culpa rerum cupiditate veniam, obcaecati recusandae iste eum
                                        possimus alias omnis consectetur? Voluptas veritatis
                                        mollitia incidunt sit distinctio minus, quia, repellat debitis facere ab
                                        excepturi deserunt pariatur suscipit assumenda eum non quibusdam minima.
                                        Eveniet quibusdam illum obcaecati, provident animi hic! Nulla totam similique
                                        sed omnis praesentium pariatur aliquam cupiditate, sunt, laborum repellat
                                        aspernatur vitae modi enim non, libero tempore eos fugiat quod hic id harum?
                                        Porro, voluptatibus beatae ullam cupiditate inventore in aspernatur corporis
                                        met animi pariatur quod repudiandae fugit incidunt ea, accusamus dolore,
                                        reprehenderit ab! Saepe quos iusto neque voluptatem voluptas quam eaque
                                        veritatis
                                        sit earum illo ipsum molestiae asperiores, nobis non, numquam consequatur
                                        quisquam corporis libero facilis sunt pariatur, magnam consectetur.
                                        Error laudantium expedita eum cupiditate cumque nihil repudiandae id at ullam,
                                        nam molestiae voluptatem praesentium illo quidem repellendus labore
                                        veritatis velit est facilis aliquid modi! Quibusdam nobis minus distinctio
                                        voluptas a ipsam odio maiores, fugiat modi eius, unde amet ullam, officiis
                                        natus obcaecati consequatur vero laborum rem eveniet iste laboriosam
                                        quaerat adipisci reprehenderit! Sequi doloremque quasi dolores modi
                                        deleniti, magni aspernatur, voluptatem doloribus nostrum blanditiis aperiam
                                        distinctio?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati nihil esse
                                        eius expedita? Tempora ab
                                        quidem mollitia totam eius aut magnam provident ad, aliquam facilis nemo tenetur
                                        similique officia modi quam,
                                        maiores nam dolores quia, in explicabo eos! Aliquam, eaque incidunt.
                                        Necessitatibus, aut amet. Magnam, laboriosam deleniti
                                        harum quae labore nostrum fugiat est ipsa dicta similique nihil neque ipsum
                                        itaque modi, aliquam ex repellendus. Placeat, unde quo ratione
                                        voluptates voluptatem vero nemo repellendus est accusamus porro obcaecati
                                        consectetur repudiandae ab animi dignissimos minus rerum, eaque consequatur
                                        fuga itaque vitae laudantium nihil eum quae. Sapiente deserunt velit rem et
                                        nulla necessitatibus!
                                    </p>
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