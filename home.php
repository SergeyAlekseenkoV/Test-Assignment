<?php 

// Initialize the session
session_start();
// logout
// $exit = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'd-none': 'd-inline-block';
// access button
// $accessBtn = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'd-inline-block': 'd-none';
//Disable menu links for an unregistered user
// $access = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'disabled': '';

?>
<?php include_once "header.php"; ?>
    <title>Портал-Головна</title>
</head>
<body id="main">
<?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section id="home" class="mt-0 pt-3 pb-5">       
        <div class="container py-2 px-sm-0 pb-lg-3 px-md-3 px-lg-3">
        <div
            class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4 home_heading">
            <h3 class="d-md-none pt-1 text-left text-uppercase mb-0 text_color"><i class="fas fa-home"></i></h3>
            <h3 class="d-none d-md-block pt-md-0 pt-lg-3 text-left text-uppercase wow slideInLeft text_color" 
                data-animation="slideInLeft">Акціонерне Товариство "Марганецький гірничо-збагачувальний
                комбінат"</h3>
            <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase font-weight-bold border border-primary rounded shadow text_color">
                Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <article class="col-sm-12 col-lg-2 pl-0 px-0 text-center wow slideInLeft" data-animation="slideInLeft">
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
                                <div class="card-header p-0 bg-dark" id="news-item">
                                        <a class="btn btn-link bg-transparent btn-block text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="news.php" role="button">
                                            Новини 
                                        </a>
                                </div>
                            </div>
                            <!-- library card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="first-item">
                                        <a class="btn btn-link bg-transparent btn-block text-decoration-none text-lg-left text-white text-uppercase" type="button"
                                            href="library.php" role="button">
                                            Бібліотека
                                        </a>
                                </div>
                            </div>
                            <!-- gallary card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="gallary-item">
                                        <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="gallary.php"data-toggle="collapse" data-target="#collapseGallary" aria-expanded="false"
                                            aria-controls="collapseGallary">
                                            Галерея
                                        </a>
                                </div>
                            </div> 
                            <!-- ideas card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="ideas-item">
                                  
                                        <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="ideas.php" data-toggle="collapse" data-target="#collapseIdea" aria-expanded="false"
                                            aria-controls="collapseIdea">
                                            База ідей
                                        </a>
                                </div>
                            </div>
                            <!-- ask card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="ask-item">
                                        <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="asking.php"data-toggle="collapse" data-target="#collapseAsk" aria-expanded="false"
                                            aria-controls="collapseAsk">
                                            Опитування
                                        </a>
                                </div>
                            </div>
                            <!-- study card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="study-item">
                                        <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="study.php">
                                            Навчання
                                        </a>
                                </div>
                            </div>
                            <!-- system card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="system-item">
                                        <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="system-five.php" data-toggle="collapse" data-target="#collapseSystem" aria-expanded="false"
                                            aria-controls="collapseSystem">
                                            Система 5С
                                        </a>
                                </div>
                            </div>
                    </nav>
                </article>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <!-- carousel slider -->
                    <div id="carouselIndicators"
                        class="carousel slide carousel-fade bg-transparent border border-primary wow fadeInUp" data-ride="carousel"
                        keyboard="true" data-animation="fadeInUp">
                        <ol class="carousel-indicators d-none d-lg-flex">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active text_color"></li>
                            <li data-target="#carouselIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/carosel1.jpg" alt="people">
                                <!-- first new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0 rounded">1 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold rounded">1 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block"><span>&raquo;</span></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><span>&laquo;</span></strong> Докладніше </a>
                                        <a href="news.php" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block"><span>&raquo;</span></strong></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel2.jpg" alt="people">
                                <!-- second new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0 rounded">2 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold rounded">2 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 text-white border text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block"><span>&raquo;</span></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><span>&laquo;</span></strong> Докладніше </a>
                                        <a href="news.php" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block"><span aria-hidden="true">&raquo;</span></strong></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel3.png" alt="track">
                                <!-- third new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0 rounded">3 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold rounded">3 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block"><span>&raquo;</span></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><span>&laquo;</span></strong> Докладніше </a>
                                        <a href="news.php" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block"><span>&raquo;</span></strong></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel4.jpg" alt="people">
                                <!-- fourth new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0 rounded">4 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold rounded">4 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block"><span>&raquo;</span></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><span>&laquo;</span></strong> Докладніше </a>
                                        <a href="news.php" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block"><span>&raquo;</span></strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- carousel indicators -->
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- birthday block -->
                    <div class="d-flex justify-content-center text-left mt-3 overflow-hidden position-relative border border-primary bg_dark_through particles wow fadeInUp" data-animation="fadeInUp">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="bg_birthday text-justify pt-3 m-4 rounded border border-primary">
                            <h4 class="px-3 text-center text_color">Вітаємо з днем народження!</h4>
                            <ul class="list-unstyled px-3 text_color">
                                <li><b class="text-uppercase">11.03.1971 Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973 Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">17.03.1951 Постоєнко
                                        Ю.Д.</b> Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">11.03.1971 Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973 Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">20.03.1960 Новінська О.С.</b>
                                    Начальник планово-економічний відділ</li>     
                                <li><b class="text-uppercase">17.03.1951 Постоєнко
                                        Ю.Д.</b> Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">11.03.1971 Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973 Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">17.03.1951 Постоєнко
                                        Ю.Д.</b> Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">17.03.1973 Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">17.03.1951 Постоєнко
                                        Ю.Д.</b> Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">11.03.1971 Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973 Зленко Р.І.</b>
                                    Головний інженер</li>
                            </ul>
                        </div>
                    </div>
                    <!-- announcement block -->
                    <div class="d-flex justify-content-center text-left mt-3 overflow-hidden border border-primary bg_announcement wow fadeInUp" data-animation="fadeInUp">
                        <div class="text-justify pt-3 m-4 rounded border text-white bg_dark_through width_announcement">
                            <h4 class="px-3 text-center text-white">Оголошення</h4>
                            <ul class="list-unstyled px-3">
                                <li>&nbsp;Оголошення перше Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum culpa consequatur, 
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora, porro cumque?</li>
                                <li>&nbsp;Оголошення друге Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum culpa consequatur, 
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora, porro cumque?</li>
                                <li>&nbsp;Оголошення третє Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum culpa consequatur, 
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora, porro cumque?</li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>