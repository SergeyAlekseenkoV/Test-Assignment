<?php include_once "header.php"; ?>
<title>Портал-Вакансії</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 news_description">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Вакансії
                </h3>
                <h3
                    class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <div id="open-positions" class="row mx-0 border border-primary rounded bg_muted">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2 class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 my-1 text-white bg_linear_dark">Досвід 
                                <span class="dot mx-1 mx-md-2 mx-md-3"><i class="far fa-dot-circle"></i></span> Надійність 
                                <span class="dot mx-1 mx-md-2 mx-md-3"><i class="far fa-dot-circle"></i></span> Перспектива</h2>
                        </div>
                        <!-- text-positions -->
                        <div class="col-12 mx-0 px-0">
                            <div class="d-flex flex-row justify-content-center justify-content-md-start align-items-center mx-5">
                                <img src="../img/employee-icon-png-29.png" width="50" height="60" alt="шукаємо" class="img-fluid" style="opacity: .5">
                                <h2 class="text-center text-md-left text_color">Вакансії</h2>
                            </div>
                            <p class="px-2 mb-2">АТ «МГЗК» <strong>запрошує до співпраці професіоналів</strong>, налаштованих на активний розвиток,
                                 що прагнуть підвищувати свій рівень знань, що мислять креативно, готових працювати і заробляти.</p>
                            <p class="px-2 mb-2">На підприємстві працівники мають можливість підвищувати свій професійний та матеріальний рівень, 
                                можливість кар'єрного росту, визнання особистих досягнень і пошани від трудового колективу.</p>
                            <p class="px-2 mb-2">Нижче представлений список відкритих на сьогодні вакансій.</p>
                            <p class="px-2 mb-2">Натисніть на вакансію, що цікавить Вас, щоб подивитися більш детальну інформацію про неї і зв'язатися з відділом кадрів.</p>
                            <p class="px-2 mb-2">З приводу <strong>працевлаштування</strong> звертатися у відділ кадрів за адресою: <strong>вул. Єдності,62</strong> або <strong>за телефоном <br>+38(056)790-16-35</strong></p>
                            <div class="row m-2 border border-secondary rounded">
                                <ul class="col-12 text-left mt-2">
                                    <li class="d-flex flex-row justify-content-start align-items-center my-0 rounded">
                                        <i class="fas fa-chevron-right"></i><a href="#">Інженер-наглядач 1 категорії будівництва</a></li>
                                    <li class="d-flex flex-row justify-content-start align-items-center my-0 rounded">
                                        <i class="fas fa-chevron-right"></i><a href="#">Заступник головного інженера(Грушівський кар'єр)</a></li>
                                    <li class="d-flex flex-row justify-content-start align-items-center my-0 rounded">
                                        <i class="fas fa-chevron-right"></i><a href="#">Заступник головного механіка(Грушівський кар'єр)</a></li>
                                    <li class="d-flex flex-row justify-content-start align-items-center my-0 rounded">
                                        <i class="fas fa-chevron-right"></i><a href="#">Заступник головного енергетика(Грушівський кар'єр)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>