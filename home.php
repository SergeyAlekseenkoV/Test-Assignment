<?php 

// Initialize the session
session_start();
// logout
$exit = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'd-none': 'd-inline-block';
// access button
$accessBtn = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'd-inline-block': 'd-none';
//Disable menu links for an unregistered user
$access = !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ? 'disabled': '';

?>
<?php include_once "header.php"; ?>
    <title>Портал-Головна</title>
</head>
<body id="home">
<?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section id="main" class="mt-0 pt-3 bg-transparent">       
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-end justify-content-sm-between align-items-baseline mt-2 mt-sm-3 home_heading">
                <h2 class="d-none d-sm-block pt-sm-2 pt-lg-3 text-left text_color">Акціонерне Товариство <br>"Марганецький гірничо-збагачувальний
                комбінат"</h2>
                <a href="index.php" class="align-self-baseline btn btn-small btn-dark text-white mt-5 mb-3 mb-sm-0 shadow border" role="button">Вийти</a>
            </div>
            <div class="row pb-sm-1 ml-0 pl-0 mr-0 pr-0">
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
                                <div class="card-header p-0 bg-dark" id="news-item">
                                        <a class="btn btn-link bg-transparent btn-block text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="news.php" role="button">
                                            Новини
                                        </a>
                                </div>
                                <!-- <div id="news" class="collapse bg-transparent" aria-labelledby="news-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3">
                                        <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="news.php" class="text_color"></a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <!-- library card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="first-item">
                                        <a class="btn btn-link bg-transparent btn-block text-decoration-none text-lg-left text-white text-uppercase" type="button"
                                            href="library.php" role="button">
                                            Бібліотека
                                        </a>
                                </div>
                                <!-- <div id="library" class="collapse bg-transparent" aria-labelledby="first-item"
                                    data-parent="#accordionLib">
                                    <p class="text_color mb-0 py-2 pl-3">Нормативно-правова база</p>
                                    <ul class="card-body list-group px-3 pt-1 pb-3"> 
                                        <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">Організаційно-розпорядчі документи<br>(загальні питання)</a></li>
                                        <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">За напрямками</a></li> 
                                        <p class="text_color mb-0 py-2">Моніторинг законодавства</p>
                                        <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">Інформація щодо підприємства</a></li>
                                        <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">Інформація щодо громадян</a></li>
                                    </ul>
                                </div> -->
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
                                <!-- <div id="collapseGallary" class="collapse bg-transparent" aria-labelledby="gallary-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3">
                                       <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">Парк МГЗК</a></li>
                                       <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">Відео з YouTube</a></li>
                                    </ul>
                                </div> -->
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
                                <!-- <div id="collapseIdea" class="collapse bg-transparent" aria-labelledby="ideas-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3">
                                       <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">Подані пропозиції</a></li>
                                       <li class="list-group-item bg-transparent px-3 py-2 border-white">
                                           <a href="#" class="text_color">Пропозиції для тиражування</a></li>
                                    </ul>
                                </div> -->
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
                                <!-- <div id="collapseAsk" class="collapse bg-transparent" aria-labelledby="ask-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 ">
                                       <li class="list-group-item bg-transparent border-white px-3 py-2">
                                           <a href="#" class="text_color">Ваші пропозиції з розвитку інфраструктури</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <!-- study card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="study-item">
                                        <a class="btn btn-link btn-block bg-transparent text-decoration-none text-lg-left collapsed text-white text-uppercase" type="button"
                                            href="study.php">
                                            Навчання
                                        </a>
                                </div>
                                <!-- <div id="collapseStudy" class="collapse bg-transparent" aria-labelledby="study-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3">
                                       <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Перелік професій</a></li>
                                       <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Виробниче навчання</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Розклад занять груп</a></li>
                                       <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">База знань</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Порядок оформлення заявок</a></li>
                                    </ul>
                                </div> -->
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
                                <!-- <div id="collapseSystem" class="collapse bg-transparent" aria-labelledby="system-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3">
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Система безперервного вдосконалення</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Система принципів 5С</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Документи СБВ</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">5С-виробництво</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">5С-офіс</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Методичні та наочні</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-white">
                                           <a href="#" class="text_color">Результати СБВ</a></li>
                                    </ul>
                                </div> -->
                            </div>
                    </nav>
                </article>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-2 pl-xl-3 py-3 py-lg-0">
                    <!-- carousel slider -->
                    <div id="carouselExampleIndicators"
                        class="carousel slide carousel-fade bg-transparent border" data-ride="carousel"
                        keyboard="true">
                        <ol class="carousel-indicators d-none d-lg-flex">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active text_color"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/carosel1.jpg" alt="people">
                                <!-- first new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0">1 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold">1 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block">>></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><<</strong> Докладніше </a>
                                        <a href="#" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block">>></strong></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel2.jpg" alt="people">
                                <!-- second new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0">2 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold">2 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 text-white border text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block">>></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><<</strong> Докладніше </a>
                                        <a href="#" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block">>></strong></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel3.png" alt="track">
                                <!-- third new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0">3 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold">3 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block">>></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><<</strong> Докладніше </a>
                                        <a href="#" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block">>></strong></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/carosel4.jpg" alt="people">
                                <!-- fourth new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="d-sm-none lead font-weight-bold pb-0 mb-0">4 Короткий опис новини декілька слів</p>
                                    <!-- appears on the sm screens and further -->
                                    <p class="lead d-none d-sm-block font-weight-bold">4 Lorem ipsum dolor, 
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias distinctio
                                         a nemo veniam ab, magni tempora hic nihil!</p>
                                    <!-- small-screen buttons  -->
                                    <div class="d-flex d-md-none flex-row justify-content-center">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white text-decoration-none">Докладніше <strong class="d-none d-sm-inline-block">>></strong></a>
                                    </div>
                                    <!-- lg-screen buttons -->
                                    <div class="d-none d-md-flex flex-row justify-content-center pb-md-3">
                                        <a href="#" class="btn btn-dark mx-1 border border-white text-white"><strong class="d-sm-inline-block"><<</strong> Докладніше </a>
                                        <a href="#" class="btn btn-info mx-1 border border-primary text_color">Усі новини <strong class="d-sm-inline-block">>></strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- carousel indicators -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- birthday block -->
                    <div class="d-flex justify-content-center text-left mt-3 overflow-hidden position-relative bg-dark border particles">
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
                        <div class="bg_birthday text-justify pt-3 m-4 rounded border">
                            <h4 class="px-3 text-center text_color">Вітаємо з днем народження!</h4>
                            <ul class="list-unstyled px-3 text_color">
                                <li><b class="text-uppercase">11.03.1971р. Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973р. Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">17.03.1951р.Постоєнко</b>
                                        Ю.Д. Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">11.03.1971р. Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973р. Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">20.03.1960р. Новінська О.С.</b>
                                    Начальник планово-економічний відділ</li>     
                                <li><b class="text-uppercase">17.03.1951р. Постоєнко
                                        Ю.Д.</b> Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">11.03.1971р. Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973р. Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">17.03.1951р. Постоєнко
                                        Ю.Д.</b> Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">17.03.1973р. Зленко Р.І.</b>
                                    Головний інженер</li>
                                <li><b class="text-uppercase">17.03.1951р. Постоєнко
                                        Ю.Д.</b> Начальник цеху мереж та підстанцій</li>
                                <li><b class="text-uppercase">11.03.1971р. Вітько А.В.</b>
                                    Заступник Голови правління з охорони праці</li>
                                <li><b class="text-uppercase">17.03.1973р. Зленко Р.І.</b>
                                    Головний інженер</li>
                            </ul>
                        </div>
                    </div>
                    <!-- announcement block -->
                    <div class="d-flex justify-content-center text-left mt-3 overflow-hidden border border-primary bg_announcement">
                        <div class="text-justify pt-3 m-4 rounded border text-white bg-dark width_announcement">
                            <h4 class="px-3 text-center">Оголошення</h4>
                            <ul class="list-unstyled px-3">
                                <li>Оголошення перше Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum culpa consequatur, 
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora, porro cumque?</li>
                                <li>Оголошення друге Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum culpa consequatur, 
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora, porro cumque?</li>
                                <li>Оголошення третє Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum culpa consequatur, 
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora, porro cumque?</li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- library section -->
    <!-- <section id="info_library">
        <div class="container py-3 pb-lg-3 px-sm-0 px-md-3">
            <div class="row py-2 ml-0 pl-0 mr-0 pr-0">
                <div class="col-sm-12 col-lg-3 pl-0 px-0 py-0"> -->
                    <!-- <article class="rounded list_library" data-spy="scroll" data-offset="0">
                        <h5 class="px-3 py-2">Розділи</h5>
                        <nav class="accordion" id="accordionLib"> -->
                            <!-- first card -->
                            <!-- <div class="card bg-transparent">
                                <div class="card-header p-0" id="first-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link bg-transparent btn-block text-left text-white" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Нормативно-правова база
                                        </button>
                                   </h2>
                                </div>
                                <div id="collapseOne" class="collapse bg-transparent" aria-labelledby="first-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 text-white">
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">Організаційно-розпорядчі документи<br>(загальні питання)</a></li>
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">За напрямками</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- second card -->
                            <!-- <div class="card bg-transparent">
                                <div class="card-header p-0" id="second-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link bg-transparent btn-block text-left text-white collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Моніторинг законодавства
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse bg-transparent show" aria-labelledby="second-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 text-white">
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">Інформація щодо підприємства</a></li>
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">Інформація щодо громадян</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- third card -->
                            <!-- <div class="card bg-transparent">
                                <div class="card-header p-0" id="third-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block bg-transparent text-left text-white collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Галерея
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse bg-transparent" aria-labelledby="third-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 text-white">
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">Парк МГЗК</a></li>
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">Відео з YouTube</a></li>
                                    </ul>
                                </div>
                            </div>  -->
                            <!-- fourth card -->
                            <!-- <div class="card bg-transparent">
                                <div class="card-header p-0" id="fourth-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block bg-transparent text-left text-white collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            База ідей
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse bg-transparent" aria-labelledby="fourth-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 text-white">
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">Подані пропозиції</a></li>
                                       <li class="list-group-item bg-transparent px-3 py-2 border-warning">
                                           <a href="#" class="text-white">Пропозиції для тиражування</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- fifth card -->
                            <!-- <div class="card bg-transparent">
                                <div class="card-header p-0" id="fifth-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block bg-transparent text-left text-white collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Опитування
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse bg-transparent show" aria-labelledby="fifth-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 text-white">
                                       <li class="list-group-item bg-transparent border-warning px-3 py-2">
                                           <a href="#" class="text-white">Ваші пропозиції з розвитку інфраструктури</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- sixth card -->
                            <!-- <div class="card bg-transparent">
                                <div class="card-header p-0" id="sixth-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block bg-transparent text-left text-white collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            Навчання
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse bg-transparent" aria-labelledby="sixth-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 text-white">
                                       <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Перелік професій</a></li>
                                       <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Виробниче навчання</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Розклад занять груп</a></li>
                                       <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">База знань</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Порядок оформлення заявок</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- seventh card -->
                            <!-- <div class="card bg-transparent">
                                <div class="card-header p-0" id="seventh-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block bg-transparent text-left text-white collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            Система 5С
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse bg-transparent" aria-labelledby="seventh-item"
                                    data-parent="#accordionLib">
                                    <ul class="card-body list-group px-3 text-white">
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Система безперервного вдосконалення</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Система принципів 5С</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Документи СБВ</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">5С-виробництво</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">5С-офіс</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Методичні та наочні</a></li>
                                        <li class="list-group-item px-3 py-2 bg-transparent border-warning">
                                           <a href="#" class="text-white">Результати СБВ</a></li>
                                    </ul>
                                </div>
                            </div>
                         </nav>
                    </article>
                </div>
                <div class="col-sm-12 col-lg-9 px-0 px-sm-0 pl-md-0 pl-lg-2 pl-xl-3 py-1 py-lg-0"> -->
                    <!--YouTube is embeded-->
                    <!-- <iframe class="d-block d-flex mt-4 mt-lg-0" src="https://www.youtube.com/embed/GIM-n68OebE"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        width="100%" height="400" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section> -->
    <!--footer-->
    <?php include_once "footer.php"; ?>