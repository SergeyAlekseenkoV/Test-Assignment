<?php include_once "header.php"; ?>
<title>Портал-Головна</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section id="home" class="mt-0 pt-3 pb-5">
        <div class="container py-2 px-sm-0 pb-lg-3 px-md-3 px-lg-3">
            <div class="d-flex justify-content-between align-items-baseline pl-2 ml-1 pl-md-0 ml-md-0 mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none pt-1 text-left text-uppercase mb-0 text_color"><i class="fas fa-home"></i></h3>
                <h3 class="d-none d-md-block pt-md-0 pt-lg-3 text-left text-uppercase wow slideInLeft text_color"
                    data-animation="slideInLeft">Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php"
                    class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <!-- announcement block -->
                    <div class="d-block mt-0 mb-3 overflow-hidden border border-primary bg_announcement wow fadeInUp"
                        data-animation="fadeInUp">
                        <!-- <div class="text-justify pt-3 m-4 rounded border text-white bg_dark_through width_announcement"> -->
                        <h4 class="px-0 mx-auto mt-2 text-center text-white">
                            Оголошення</h4>
                        <ul class="list-unstyled px-3 my-2">
                            <li class="mb-3">&nbsp;
                                <a href="#" class="text-white">Оголо&shy;шення перше Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum
                                    culpa consequatur,
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora,
                                    porro cumque?<span class="pr-1">. . . &raquo;</span></a></li>
                            <!-- <li class="mb-3">&nbsp;
                                <a href="#" class="text-white">Оголошення друге Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Adipisci mollitia sint iste, eos voluptate harum
                                    culpa consequatur,
                                    modi autem sequi ullam dolores laboriosam, voluptates et dolore placeat. Tempora,
                                    porro cumque?<span class="pr-1">. . . &raquo;</span></a></li> -->
                        </ul>
                        <!-- </div> -->
                    </div>
                    <!-- carousel slider -->
                    <div id="carouselIndicators"
                        class="d-none d-md-block carousel slide carousel-fade bg-transparent border border-primary wow fadeInUp"
                        data-ride="carousel" keyboard="true" data-animation="fadeInUp">
                        <ol class="carousel-indicators d-none d-lg-flex">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active text_color"></li>
                            <li data-target="#carouselIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active height-em" data-touch="true">
                                <img class="d-block w-100 height-100p obj-fit" src="../build/img/pexels-08.png" alt="people">
                                <!-- first new -->
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="lead font-weight-bold rounded"><a href="#">1 Lorem ipsum dolor,
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias
                                        distinctio
                                        a nemo veniam ab, magni tempora hic nihil!&nbsp;.&nbsp;.&nbsp;.&raquo;</a></p>
                                </div>
                            </div>
                            <div class="carousel-item height-em" data-touch="true">
                                <img class="d-block w-100 height-100p obj-fit" src="../build/img/carosel2.jpg" alt="people">
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="lead font-weight-bold rounded"><a href="#">2 Lorem ipsum dolor,
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias
                                        distinctio
                                        a nemo veniam ab, magni tempora hic nihil!&nbsp;.&nbsp;.&nbsp;.&raquo;</a></p>
                                </div>
                            </div>
                            <div class="carousel-item height-em" data-touch="true">
                                <img class="d-block w-100 height-100p obj-fit" src="../build/img/carosel3.png" alt="track">
                                <div class="carousel-caption p-2 border rounded text_color">
                                    <p class="lead font-weight-bold rounded"><a href="#">3 Lorem ipsum dolor,
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias
                                        distinctio
                                        a nemo veniam ab, magni tempora hic nihil!&nbsp;.&nbsp;.&nbsp;.&raquo;</a></p>
                                </div>
                            </div>
                            <div class="carousel-item height-em" data-touch="true">
                                <img class="d-block w-100 height-100p obj-fit" src="../build/img/carosel4.jpg" alt="people">
                                <div class="carousel-caption bg_dark_overlay p-2 border rounded text_color">
                                    <p class="lead font-weight-bold rounded"><a href="#">4 Lorem ipsum dolor,
                                        sit amet consectetur adipisicing elit. Necessitatibus, similique? Molestias
                                        distinctio
                                        a nemo veniam ab, magni tempora hic nihil!&nbsp;.&nbsp;.&nbsp;.&raquo;</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- carousel indicators -->
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">❮</span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">❯</span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                    <!-- end slider -->
                    <!-- news-cards for the extra-small screens -->
                    <!-- card-item -->
                    <div class="d-sm-none card bg-transparent border border-primary mx-0 mb-3 shadow">
                        <img src="../build/img/carosel1.jpg" alt="people" class="card-img-top height-210 obj-fit w-100">
                        <div class="card-body p-2 bg_info_through">
                            <h4 class="card-title px-0 text-center text_color">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit.
                                Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h4>
                        </div>
                        <div class="card-footer bg_info_through text-center border-top border-secondary">
                            <a href="#" class="btn btn-dark border border-white">&laquo; Докладніше</a>
                            <a href="#" class="btn btn-info border border-primary text_color">Усі новини &raquo;</a>
                        </div>
                    </div>
                    <!-- card-item -->
                    <div class="d-md-none card bg-transparent border border-primary mx-0 mb-3 shadow">
                        <img src="../build/img/carosel2.jpg" alt="people" class="card-img-top height-210 obj-fit w-100">
                        <div class="card-body p-2 bg_info_through">
                            <h4 class="card-title px-0 text-center text_color">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit.
                                Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h4>
                        </div>
                        <div class="card-footer bg_info_through text-center border-top border-secondary">
                            <a href="#" class="btn btn-dark border border-white">&laquo; Докладніше</a>
                            <a href="#" class="btn btn-info border border-primary text_color">Усі новини &raquo;</a>
                        </div>
                    </div>
                    <!-- card-item -->
                    <div class="d-md-none card bg-transparent border border-primary mx-0 mb-3 shadow">
                        <img src="../build/img/carosel3.png" alt="track" class="card-img-top height-210 obj-fit w-100">
                        <div class="card-body p-2 bg_info_through">
                            <h4 class="card-title px-0 text-center text_color">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit.
                                Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h4>
                        </div>
                        <div class="card-footer bg_info_through text-center border-top border-secondary">
                            <a href="#" class="btn btn-dark border border-white">&laquo; Докладніше</a>
                            <a href="#" class="btn btn-info border border-primary text_color">Усі новини &raquo;</a>
                        </div>
                    </div>
                    <!-- card-item -->
                    <div class="d-md-none card bg-transparent border border-primary mx-0 mb-3 shadow">
                        <img src="../build/img/carosel4.jpg" alt="people" class="card-img-top height-210 obj-fit w-100">
                        <div class="card-body p-2 bg_info_through">
                            <h4 class="card-title px-0 text-center text_color">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit.
                                Nostrum doloribus sapiente ullam accusamus reiciendis sit!</h4>
                        </div>
                        <div class="card-footer bg_info_through text-center border-top border-secondary">
                            <a href="#" class="btn btn-dark border border-white">&laquo; Докладніше</a>
                            <a href="#" class="btn btn-info border border-primary text_color">Усі новини &raquo;</a>
                        </div>
                    </div>
                    <!-- birthday block -->
                    <div class="d-flex justify-content-center text-left mt-3 overflow-hidden position-relative border border-primary bg_dark_through particles wow fadeInUp"
                        data-animation="fadeInUp">
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
                            <h4 class="px-3 text-center text_color">Вітаємо з Днем народження!</h4>
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
                    <div class="d-flex justify-content-end justify-content-lg-end mt-3 overflow-hidden wow fadeInUp"
                        data-animation="fadeInUp">
                            <!-- you tube embeded -->
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/gvvHIsL5lSU" title="YouTube video player"
                                frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                    </div>  
                    <div class="d-flex justify-content-center justify-content-lg-end text-right mt-3 wow fadeInUp">
                        <!-- blockquote -->
                        <blockquote id="blockquote" class="pr-2 my-0 text-right">
                            <p class="mb-0 text_color">Per aspera ad astra</p>
                            <footer class="blockquote-footer text-right text_color">Lucius Annaeus Seneca</footer>
                        </blockquote>
                    </div> 
                    <div class="d-flex justify-content-center mt-3 overflow-hidden wow fadeInUp"
                        data-animation="fadeInUp">
                            <!-- you tube embeded -->
                            <iframe width="100%" height="480" src="https://www.youtube.com/embed/iGWQFQA-LgY" title="YouTube video player" 
                                frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen></iframe>
                    </div> 
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
    <script>
        $(document).on("pagecreate","#pageone",function(){
            $(".carousel-item").on("swipe",function(){
              $(this).hide();
            });                       
        });
    </script>