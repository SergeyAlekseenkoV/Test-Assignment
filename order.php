<!DOCTYPE html>
<html lang="ua">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="color-scheme" content="light dark" />
    <script src="build/js/jquery.js"></script>
    <script src="build/js/popper.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>
    <script src="build/js/bootstrap-show-password.js"></script>
    <script src="build/js/all.min.js"></script>
    <script src="build/js/jquery.fancybox.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" 
           integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
           crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
           integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
           crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" 
           integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" 
           crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" 
            integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script> -->
    <script defer src="build/js/main.min.js"></script>
    <script src="build/js/wow.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
         integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
     </script>  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"> -->
    <link rel="stylesheet" href="build/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="build/css/animate.min.css">
    <link rel="stylesheet" href="build/css/bootstrap.min.css">
    <link rel="stylesheet" href="build/css/style.min.css">
    <link rel="stylesheet" href="build/css/fontawesome.min.css">
    <link type="image/png" sizes="16x16" rel="icon" href="../build/img/logo-dark-favicon.png" media="(prefers-color-scheme: no-preference)">
    <link type="image/png" sizes="16x16" rel="icon" href="../build/img/logo-white.png" media="(prefers-color-scheme: dark)">
    <link type="image/png" sizes="16x16" rel="icon" href="../build/img/logo-dark-favicon.png" media="(prefers-color-scheme: light)">
    <title>Оформление заказа</title>
</head>

<body>
    <!--navigation-->
    <header>
        <nav id="navbarUp" class="navbar navbar-dark navbar-expand-md fixed-top shadow px-2 px-md-0">
            <div class="container-fluid container-lg">
                <!--LOGO-->
                <div class="logo ml-2 ml-md-0 mr-0 mt-md-0 d-flex justify-content-center align-items-center">
                    <a href="home.php" class="align-self-center rounded-circle border light">
                        <img src="../build/img/logo-dark.png" width="40" height="40" alt="MGOK" class="inner-logo rounded-circle">
                    </a>
                    <a href="home.php" class="align-self-center bg-dark rounded-circle border border-primary dark">
                        <img src="../build/img/logo-white.png" alt="MGOK" class="inner-logo rounded-circle">
                    </a>
                </div>
                <span class="font-weight-bold ml-0 ml-md-2 ml-lg-2 ml-xl-2 d-md-none d-lg-inline-block text-logo shadow-dark"><abbr class="d-none d-sm-inline-block">АТ</abbr> "МГЗК"</span>
                <!--menu button-->
                <button class="navbar-toggler bg-primary border border-transparent" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--dropdowns-->
                <div class="collapse navbar-collapse text-center text-md-left text-lg-left" id="navbarCollapse">
                    <ul class="navbar-nav nav-pills ml-0 ml-md-auto my-0">
                        <li class="d-flex justify-content-center nav-item mt-1 position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2 shadow-dark" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Персонал</a>
                            <ul class="dropdown-menu dropdown-content dropdown-right position-absolute p-0 border border-white bg-primary row text-center text-md-left text-lg-left width_dropdown_smallscreen">
                                <li>
                                    <a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" href="respect-board.php">Дошка
                                        пошани</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" href="best-team.php">Кращий
                                        колектив</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" href="competition.php">Трудове
                                        змагання</a>
                                </li>
                                <li class="dropdown-submenu position-relative">
                                    <a class="dropdown-item dropdown-toggle text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" type="button" data-toggle="dropdown" role="link" aria-haspopup="true">Організація
                                        та оплата праці</a>
                                    <ul class="dropdown-menu bg-primary border py-0 text-center text-md-left list-unstyled" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" href="avarage-salary.php">Середня зар.плата по <br>провідним професіям</a></li>
                                        <li><a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2 rounded" href="vacations.php">Тривалість чергових <br>відпусток</a></li>
                                        <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                <li>
                                <li class="dropdown-submenu position-relative">
                                    <a class="dropdown-item dropdown-toggle text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" type="button" data-toggle="dropdown" role="link" aria-haspopup="true">Кадрові документи</a>
                                    <ul class="dropdown-menu bg-primary border py-0 text-center text-md-left">
                                        <li><a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" href="HR_documents_index.php">Зразки документів</a></li>
                                    </ul>
                                <li>
                                <li class="dropdown-submenu position-relative">
                                    <a class="dropdown-item dropdown-toggle text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" type="button" data-toggle="dropdown" role="link" aria-haspopup="true">Інформація профспілки</a>
                                    <ul class="dropdown-menu bg-primary border py-0 text-center text-md-left">
                                        <li><a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" href="#">Оголошення профспілки</a></li>
                                        <li><a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2 rounded" href="union-doc.php">Колективний договір</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="open-positions.php">Вакансії</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2 rounded" href="HR_movement.php">Кадрові призначення</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mt-1 d-flex justify-content-center position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2 text-white shadow-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Виробництво</a>
                            <ul class="dropdown-menu position-absolute dropdown-content p-0 border border-white bg-primary row text-center text-md-left text-lg-left width_dropdown_smallscreen">
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="#">Плани виробництва та Виробничі показники</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="#">Підсумки роботи
                                        бригад</a></li>
                            </ul>
                        </li>
                        <li class="d-flex justify-content-center nav-item mt-1 position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2" id="navbarDropdownSocial" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Соціальна сфера</a>
                            <ul class="dropdown-menu dropdown-content dropdown-right position-absolute p-0 border border-white bg-primary row text-center text-md-left text-lg-left rounded width_dropdown_smallscreen">
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="rest-vacations.php">Оздоровлення</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2 rounded" href="sanatorium.php">Санаторій-профілакторій</a></li>
                            </ul>
                        </li>
                        <li class="d-flex justify-content-center nav-item mt-1 position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2 shadow-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Інфо</a>
                            <ul class="dropdown-menu position-absolute dropdown-menu-md-right dropdown-content p-0 border border-white bg-primary row text-center text-md-right text-lg-right width_dropdown_smallscreen">
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="scheduel-bus.php">Розклад руху
                                        автобусів</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="routes-bus.php">Маршрут руху
                                        автобусів</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="schedule.php">Графік роботи
                                        каси</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="newsletter-subscription.php">Підписка
                                        "Гірницький вісник"</a></li>
                            </ul>
                        </li>
                        <li class="d-flex justify-content-center nav-item mt-1 position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 pl-md-1 pr-md-1 pl-lg-1 pr-lg-1 pl-xl-2 pr-xl-2 shadow-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Гаряча лінія</a>
                            <ul class="dropdown-menu dropdown-menu-md-right dropdown-content position-absolute p-0 border border-white bg-primary row text-center text-md-right text-lg-right width_dropdown_smallscreen">
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="#">Повідомити про
                                        порушення</a></li>
                            </ul>
                        </li>
                        <!-- for collapsed-menu -->
                        <li class="nav-item d-md-none pt-3 px-md-0 pr-lg-0 pl-lg-1">
                            <a href="salary-list.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Персональний кабінет" class="nav-link bg-transparent text-white pr-md-0 pr-lg-0 pb-md-0 py-md-0"><i class="fas fa-user-circle fa-2x" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item d-flex flex-row justify-content-around d-md-none pt-3 px-md-0 pr-lg-0 pl-lg-1">
                            <a href="#" class="nav-link bg-transparent text-white pr-md-0 pr-lg-0 pr-xl-2 pb-md-0 py-2 py-md-0"><i class="far fa-calendar-alt fa-2x" aria-hidden="true"></i></a>
                            <a href="phones-list.php" class="nav-link bg-transparent text-white pr-lg-0 pr-md-0 pr-xl-2 pb-md-0 py-md-0"><i class="fas fa-phone-square fa-2x" aria-hidden="true"></i></a>
                        </li>
                        <!-- for large menu -->
                        <li class="nav-item d-none d-md-inline-block align-self-end">
                            <ul class="d-flex flex-row justify-content-center align-items-center pl-1 pr-0 mx-0">
                                <li class="list-unstyled">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Календар подій" class="bg-transparent text-white px-1 pr-lg-2 pr-xl-3 py-md-0"><i class="far fa-calendar-alt fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-unstyled nav_link">
                                    <a href="phones-list.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Телефонний довідник" class="bg-transparent text-white px-1 pr-lg-2 pr-xl-3 py-md-0"><i class="fas fa-phone-square fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-unstyled nav_link">
                                    <a href="salary-list.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Персональний кабінет" class="bg-transparent text-white pl-1 pr-0 pb-md-0"><i class="fas fa-user-circle fa-2x" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- main-section-->
    <main class="mt-0 pt-3 py-5 min-height">
        <div class="container-fluid container-lg py-5 mx-auto">
            <div class="row mx-0">
                <div class="col-12 col-md-7 col-xl-8 px-0 pr-md-2 pr-lg-4 py-2 order">
                    <div class="row w-100 mx-0">
                        <h3 class="mb-3 ml-0 d-none d-md-block"><strong>Оформление заказа</strong></h3>
                        <!-- ========= order item ========== -->
                        <div class="col-12 px-0 order__item">
                            <div class="card mb-2 p-3 block__shadow">
                                <!-- ========= seller data ========== -->
                                <div class="card-header d-flex flex-row justify-content-start align-items-center p-0 pb-2 bg-transparent small order__seller">
                                    <img src="./build/img/bg_5s.png" width="24" height="24" alt="аватарка" class="img-fluid obj-fit rounded-circle m-1 order__seller__photo">
                                    <span class="order__seller__name"><a href="#">Vasiliy Pupking</a></span>
                                    <span class="mx-1 text-muted">&nbsp;&bull;&nbsp;</span>
                                    <div class="d-flex flex-row justify-content-center align-items-center order__seller__rate">
                                        <span class="text-uppercase"><strong>5.0</strong></span>
                                        <span class="text-warning mx-1"><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-row no-gutters mt-2 height-content order__item__description">
                                    <div class="px-0 flex-shrink-1">
                                        <div class="overflow-hidden">
                                            <img class="img-fluid w-100 m-0 rounded order__item__img" src="./build/img/bg_5s.png" alt="фото товара">
                                        </div>
                                    </div>
                                    <div class="px-0 order__body__wrapper">
                                        <div class="card-body pt-2 pl-3 pr-0 pb-0 d-flex flex-column min-height">
                                            <h6 class="card-title mb-auto overflow-hidden order__item__title">Игрушка антистресс Pop it Антистресс тыкалка Игрушка пупырка Круг</h6>
                                            <div class="bg-transparent d-flex flex-wrap order__item__ammount">
                                                <!-- ============= counter =========== -->
                                                <div class="mr-auto order__item__counter_wrapper">
                                                    <div class="d-flex flex-row justify-content-start align-items-center border border-muted rounded order__item__counter">
                                                        <button class="btn bg-light d-flex flex-column justify-content-center align-items-center"><strong>&minus;</strong></button>
                                                        <input type="number" placeholder="1" class="min-height text-center">
                                                        <button class="btn bg-light d-flex flex-column justify-content-center align-items-center"><strong>&plus;</strong></button>
                                                    </div>
                                                </div>
                                                <!-- =========== price ========== -->
                                                <div class="ml-auto d-flex flex-column justify-content-center align-items-center order__item__price"><strong>&nbsp;18000.2 ₴</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- =========== buyer contacts ==========-->
                        <div class="col-12 px-0 buyer__contacts">
                            <div class="row mx-0 bg-white border border-muted rounded block__shadow">
                                <h3 class="mx-3 mt-3 mb-0"><strong>Ваши контакты</strong></h3>
                                <div class="col-12 px-0 pl-md-0 pl-lg-1 py-0 pr-lg-0">
                                    <div class="row mx-0 pb-3 w-100" action="" method="post">
                                        <div class="col-12 px-3 form-group mb-0">
                                            <label for="buyerName" class="mb-0">Имя<span class="text-danger">&nbsp;*</span></label>
                                            <input type="text" class="form-control bg-light" placeholder="" value="" name="buyerName" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-12 px-3 form-group mb-0">
                                            <label for="buyerSurname" class="mb-0">Фамилия<span class="text-danger">&nbsp;*</span></label>
                                            <input type="text" class="form-control bg-light" placeholder="" value="" name="buyerSurname" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-12 col-md-6 px-3 form-group mb-0">
                                            <label for="buyerEmail" class="mb-0">E-mail<span class="text-danger">&nbsp;*</span></label>
                                            <input type="email" class="form-control bg-light" placeholder="E-mail" value="" name="buyerEmail" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-12 col-md-6 px-3 form-group mb-0">
                                            <label for="buyerphone" class="mb-0">Телефон<span class="text-danger">&nbsp;*</span></label>
                                            <input type="tel" class="form-control bg-light" aria-describedby="telHelp" placeholder="+380(__)___-__-__ " value="" name="buyerphone" required>
                                            <small id="telHelp" class="form-text text-muted">В целях безопасности, <strong>продавец не видит номер вашего телефона</strong>.
                                                Обсуждение заказа происходит в чате JIG.</small>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- =========== buyer-choice payment ==========-->
                        <div class="col-12 mt-2 px-0 buyers__choice__payment">
                            <div class="row px-3 mx-0 bg-white border border-muted rounded block__shadow">
                                <h3 class="mt-3 mb-0"><strong>Способ оплаты</strong></h3>
                                <!-- =========== buyer payment safe ==========-->
                                <div class="col-12 px-0 d-flex my-3 pb-3 flex-row justify-content-start align-items-center border-bottom">
                                    <span class="text-success"><i class="fas fa-shield-alt fa-2x" aria-hidden="true"></i></span>
                                    <div class="ml-4 small">&nbsp;Покупайте безопасно. Возврат денег, если посылка не получена. <a class="text-primary" href="#"><strong>Подробнее</strong></a></div>
                                </div>
                                <div class="col-12 px-0 d-flex mt-0 mb-3 pb-3 flex-row justify-content-between align-items-center border-bottom choice__payment">
                                    <div class="form-check pl-0">
                                        <input class="form-check-input m-0" type="radio" name="buyerCheck" id="afterDeliver" value="option1">
                                        <label class="form-check-label d-flex flex-column small ml-5" for="afterDeliver">
                                            <strong>&nbsp;Наложенный платеж</strong>
                                            <span class="text-muted">&nbsp;100% оплаты при получении. Комиссия почты 15 ₴ + 2% стоимости товара</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 px-0 d-flex mt-0 mb-3 pb-3 flex-row justify-content-between align-items-center border-bottom choice__payment">
                                    <div class="form-check pl-0">
                                        <input class="form-check-input m-0" type="radio" name="buyerCheck" id="safetyChoice" value="option2">
                                        <label class="form-check-label d-flex flex-column small ml-5" for="safetyChoice">
                                            <strong>&nbsp;Надежная оплата картой</strong>
                                            <span class="text-success">&nbsp;Онлай оплата через JIG. Безопасно и без комиссии почты</span>
                                        </label>
                                    </div>
                                    <div class="choice__description" data-toggle="modal" data-target="#descriptionSafeModal"><i class="far fa-question-circle fa-2x"></i></div>
                                </div>
                                <!-- =========== buyer payment risk ==========-->
                                <div class="col-12 px-0 d-flex mt-0 mb-0 pb-3 flex-row justify-content-between align-items-center choice__payment">
                                    <div class="form-check pl-0">
                                        <input class="form-check-input m-0" type="radio" name="buyerCheck" id="riskyChoice" value="option3">
                                        <label class="form-check-label d-flex flex-column small ml-5" for="riskyChoice">
                                            <strong>&nbsp;Продавцу на карту</strong>
                                            <span class="text-danger">&nbsp;Оплата переводом с карты на карту. JIG не гаранти&shy;рует сохранность ваших денег</span>
                                        </label>
                                    </div>
                                    <div class="choice__description" data-toggle="modal" data-target="#descriptionRiskModal"><i class="far fa-question-circle fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- =========== delivery ==========-->
                        <div id="accordion-delivery" class="accordion col-12 my-2 px-0 delivery__variant">
                            <div class="row px-3 mx-0 bg-white border border-muted rounded block__shadow">
                                <h3 class="mt-3 mb-0"><strong>Способ доставки</strong></h3>
                                <!-- =========== Meest delivery ==========-->
                                <div class="col-12 px-0 mt-3 mb-3 pb-3 border-bottom">
                                    <div class="form-check pl-0 d-flex flex-row justify-content-between align-items-center">
                                        <input class="form-check-input m-0" type="radio" name="delivery" id="Meest" 
                                            value="option1" data-toggle="collapse" data-target="#collapseMeest" aria-expanded="true" aria-controls="collapseMeest">
                                        <label id="choice-1" class="w-100 form-check-label d-flex flex-row justify-content-between align-items-center ml-5" for="Meest" 
                                            data-toggle="collapse" data-target="#collapseMeest" aria-expanded="true" aria-controls="collapseMeest">
                                            <div class="d-flex flex-column small">
                                                <strong>&nbsp;Meest</strong>
                                                <span class="text-success">&nbsp;Бесплатно</span>
                                            </div>
                                            <i class="ml-auto">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M4.215 15.01H9.125L10.835 11.97L9.155 8.99H4.215V15.01Z" fill="#0061AF"></path>
                                                    <path d="M13.585 1L19.785 11.97L13.585 23H7.39499L13.595 11.97L7.39499 1H13.585Z" fill="#ED1944"></path>
                                                </svg>
                                            </i>
                                        </label>
                                    </div>
                                    <!-- =========== Meest delivery collapse ==========-->
                                    <div id="collapseMeest" class="collapse w-100" aria-labelledby="choice-1" data-parent="#accordion-delivery">
                                        <div class="small my-2 destiny__choice__name">
                                            <strong>Выберите город<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Город не выбран" aria-label="Город не выбран"
                                                aria-describedby="button-Meest-city">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Meest-city"></button>
                                                <div class="dropdown-menu w-100 text-center destiny__choice__hint">
                                                    <small class="text-monospace">Для поиска начните вводить название города</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small mt-4 mb-2 destiny__choice__name">
                                            <strong>Выберите отделение<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Не выбрано" aria-label="Не выбрано" aria-describedby="button-Meest-point">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Meest-point"></button>
                                                <div class="dropdown-menu small w-100 destiny__choice__hint__select">
                                                    <ul class="list-unstyled p-2">
                                                        <li class="py-2">Отделение 1</li>
                                                        <li class="py-2">Отделение 2</li>
                                                        <li class="py-2">Отделение 3</li>
                                                        <li class="py-2">Отделение 4</li>
                                                        <li class="py-2">Отделение 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- =========== Justing delivery ==========-->
                                <div class="col-12 px-0 mt-0 mb-3 pb-3 flex-row border-bottom">
                                    <div class="form-check pl-0 w-100 d-flex flex-row justify-content-between align-items-center">
                                        <input class="form-check-input m-0" type="radio" name="delivery" id="Justin" 
                                            value="option2" data-toggle="collapse" data-target="#collapseJustin" aria-expanded="true" aria-controls="collapseJustin">
                                        <label id="choice-2" class="w-100 form-check-label d-flex flex-row justify-content-between align-items-center ml-5" 
                                            for="Justin" data-toggle="collapse" data-target="#collapseJustin" aria-expanded="true" aria-controls="collapseJustin">
                                            <div class="d-flex flex-column small">
                                                <strong>&nbsp;Justing</strong>
                                                <span class="text-success">&nbsp;Бесплатно</span>
                                            </div>
                                            <i class="ml-auto"><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="#164CE2" fill-rule="evenodd" d="M12 1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12 5.925 1 12 1zm1.45 8.972h-2.358v6.485l-.008.098c-.083.49-.76 1.008-1.244 1.008h-.59v1.768h.81l.239.003c2.256-.017 3.151-1.295 3.151-2.434V9.972zm.295-3.242l-2.8 1.032v1.474l1.474-.59.158-.079c.719-.388 1.168-1.08 1.168-1.837zm.664-2.063l-3.464 1.252v1.474l2.063-.737.15-.06c.732-.336 1.25-1.1 1.25-1.93z"></path>
                                                </svg></i>
                                        </label>
                                    </div>
                                    <!-- =========== Justing delivery collapse ==========-->
                                    <div id="collapseJustin" class="collapse show w-100" aria-labelledby="choice-2" data-parent="#accordion-delivery">
                                        <div class="small my-2 destiny__choice__name">
                                            <strong>Выберите город<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Город не выбран" aria-label="Город не выбран" 
                                                aria-describedby="button-Justin-city">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Justin-city"></button>
                                                <div class="dropdown-menu w-100 text-center destiny__choice__hint">
                                                    <small class="text-monospace">Для поиска начните вводить название города</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small mt-4 mb-2 destiny__choice__name">
                                            <strong>Выберите отделение<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Не выбрано" aria-label="Не выбрано" 
                                                aria-describedby="button-Justin-point">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Justin-point"></button>
                                                <div class="dropdown-menu small w-100 destiny__choice__hint__select">
                                                    <ul class="list-unstyled p-2">
                                                        <li class="py-2">Отделение 1</li>
                                                        <li class="py-2">Отделение 2</li>
                                                        <li class="py-2">Отделение 3</li>
                                                        <li class="py-2">Отделение 4</li>
                                                        <li class="py-2">Отделение 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- =========== Ukrposhta-express delivery ==========-->
                                <div class="col-12 px-0 mt-0 mb-3 pb-3 border-bottom">
                                    <div class="form-check pl-0 w-100 d-flex flex-row justify-content-between align-items-center">
                                        <input class="form-check-input m-0" type="radio" name="delivery" id="Ukrposhta-express" value="option3" 
                                            data-toggle="collapse" data-target="#collapsePoshtaExpress" aria-expanded="true" aria-controls="collapsePoshtaExpress">
                                        <label id="choice-3" class="w-100 form-check-label d-flex flex-row justify-content-between align-items-center ml-5" 
                                            for="Ukrposhta-express" data-toggle="collapse" data-target="#collapsePoshtaExpress" aria-expanded="true" aria-controls="collapsePoshtaExpress">
                                            <div class="d-flex flex-column small">
                                                <strong>&nbsp;Укрпочта Експресс</strong>
                                                <span class="text-success">&nbsp;От 24 ₴</span>
                                            </div>
                                            <i class="ml-auto"><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="#FFC627" fill-rule="nonzero" d="M19.424 13.636L12.167 12c-1.837-.455-3.215-2.09-3.124-4 0-1.91 1.378-3.545 3.308-3.91a3.887 3.887 0 0 1 4.41 2.546c.642 1.819 0 3.819-1.654 4.819 0 0-.092.09 0 .09 0 0 0 .091.092.091l3.215.728c.092 0 .184 0 .184-.091a6.99 6.99 0 0 0 .735-7.182A7.132 7.132 0 0 0 13.36 1h-.275c-2.94 0-5.788 1.727-7.166 4.364-1.378 2.636-1.194 5.909.46 8.363l6.43 9.182.092.091s.092 0 .092-.09l6.339-9v-.183c.183-.09.091-.09.091-.09z"></path>
                                                </svg></i>
                                        </label>
                                    </div>
                                    <!-- =========== poshta-express delivery collapse ==========-->
                                    <div id="collapsePoshtaExpress" class="collapse w-100" aria-labelledby="choice-3" data-parent="#accordion-delivery">
                                        <div class="small my-2 destiny__choice__name">
                                            <strong>Выберите город<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Город не выбран" aria-label="Город не выбран" 
                                                aria-describedby="button-Express-city">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Express-city"></button>
                                                <div class="dropdown-menu w-100 text-center destiny__choice__hint">
                                                    <small class="text-monospace">Для поиска начните вводить название города</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small mt-4 mb-2 destiny__choice__name">
                                            <strong>Выберите отделение<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Не выбрано" aria-label="Не выбрано" 
                                                aria-describedby="button-Express-point">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Express-point"></button>
                                                <div class="dropdown-menu small w-100 destiny__choice__hint__select">
                                                    <ul class="list-unstyled p-2">
                                                        <li class="py-2">Отделение 1</li>
                                                        <li class="py-2">Отделение 2</li>
                                                        <li class="py-2">Отделение 3</li>
                                                        <li class="py-2">Отделение 4</li>
                                                        <li class="py-2">Отделение 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- =========== Ukrposhta-standard delivery ==========-->
                                <div class="col-12 px-0 mt-0 mb-3 pb-3 border-bottom">
                                    <div class="form-check pl-0 w-100 d-flex flex-row justify-content-between align-items-center">
                                        <input class="form-check-input m-0" type="radio" name="delivery" id="Ukrposhta-standard" value="option4" 
                                            data-toggle="collapse" data-target="#collapsePoshtaStandard" aria-expanded="true" aria-controls="collapsePoshtaStandard">
                                        <label id="choice-4" class="w-100 form-check-label d-flex flex-row justify-content-between align-items-center ml-5" 
                                            for="Ukrposhta-standard" data-toggle="collapse" data-target="#collapsePoshtaStandard" aria-expanded="true" aria-controls="collapsePoshtaStandard">
                                            <div class="d-flex flex-column small">
                                                <strong>&nbsp;Укрпочта Стандарт</strong>
                                                <span class="text-success">&nbsp;От 15 ₴</span>
                                            </div>
                                            <i class="ml-auto"><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="#FFC627" fill-rule="nonzero" d="M19.424 13.636L12.167 12c-1.837-.455-3.215-2.09-3.124-4 0-1.91 1.378-3.545 3.308-3.91a3.887 3.887 0 0 1 4.41 2.546c.642 1.819 0 3.819-1.654 4.819 0 0-.092.09 0 .09 0 0 0 .091.092.091l3.215.728c.092 0 .184 0 .184-.091a6.99 6.99 0 0 0 .735-7.182A7.132 7.132 0 0 0 13.36 1h-.275c-2.94 0-5.788 1.727-7.166 4.364-1.378 2.636-1.194 5.909.46 8.363l6.43 9.182.092.091s.092 0 .092-.09l6.339-9v-.183c.183-.09.091-.09.091-.09z"></path>
                                                </svg></i>
                                        </label>
                                    </div>
                                    <!-- =========== poshta-Standard delivery collapse ==========-->
                                    <div id="collapsePoshtaStandard" class="collapse w-100" aria-labelledby="choice-4" data-parent="#accordion-delivery">
                                        <div class="small my-2 destiny__choice__name">
                                            <strong>Выберите город<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Город не выбран" aria-label="Город не выбран" 
                                                aria-describedby="button-Standard-city">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Standard-city"></button>
                                                <div class="dropdown-menu w-100 text-center destiny__choice__hint">
                                                    <small class="text-monospace">Для поиска начните вводить название города</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small mt-4 mb-2 destiny__choice__name">
                                            <strong>Выберите отделение<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Не выбрано" aria-label="Не выбрано" aria-describedby="button-Standard-point">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Standard-point"></button>
                                                <div class="dropdown-menu small w-100 destiny__choice__hint__select">
                                                    <ul class="list-unstyled p-2">
                                                        <li class="py-2">Отделение 1</li>
                                                        <li class="py-2">Отделение 2</li>
                                                        <li class="py-2">Отделение 3</li>
                                                        <li class="py-2">Отделение 4</li>
                                                        <li class="py-2">Отделение 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- =========== Novaposhta delivery ==========-->
                                <div class="col-12 px-0 mt-0 mb-3 mb-md-0 pb-0 pb-md-3">
                                    <div class="form-check pl-0 w-100 d-flex flex-row justify-content-between align-items-center">
                                        <input class="form-check-input m-0" type="radio" name="delivery" id="Novaposhta" value="option4" 
                                            data-toggle="collapse" data-target="#collapseNovaposhta" aria-expanded="true" aria-controls="collapseNovaposhta">
                                        <label id="choice-5" class="w-100 form-check-label d-flex flex-row justify-content-between align-items-center ml-5" 
                                            for="Novaposhta" data-toggle="collapse" data-target="#collapseNovaposhta" aria-expanded="true" aria-controls="collapseNovaposhta">
                                            <div class="d-flex flex-column small">
                                                <strong>&nbsp;Новая Почта</strong>
                                                <span>&nbsp;От 35 ₴</span>
                                            </div>
                                            <i class="ml-auto"><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="#ED1C24" fill-rule="evenodd" d="M22.827 11.56c.23.233.23.587 0 .76l-3.957 3.968c-.088.117-.175.145-.242.11-.066-.035-.108-.138-.108-.286V7.768c0-.145.042-.233.108-.255.067-.02.154.022.242.138l3.957 3.909zM12.41 1.113L16.482 5.2c.175.233.115.41-.175.41h-1.688a.52.52 0 0 0-.522.526v3.032c0 .294-.234.527-.584.527h-2.966a.524.524 0 0 1-.525-.527V6.135a.522.522 0 0 0-.526-.526H7.693c-.29 0-.35-.177-.175-.41l4.076-4.086L11.86 1h.28l.27.113zM5.48 7.425c.074.035.12.138.12.286v8.518c0 .148-.046.236-.12.265-.07.028-.172 0-.29-.089L1.173 12.32c-.23-.173-.23-.527 0-.76L5.19 7.535c.118-.117.22-.145.29-.11zm10.711 11.023c.29 0 .406.173.175.35l-3.956 4.025A.584.584 0 0 1 12 23a.576.576 0 0 1-.406-.177l-3.957-4.025c-.234-.177-.119-.35.172-.35h1.687c.295 0 .526-.233.526-.583v-3.21c0-.292.234-.526.525-.526h2.966c.35 0 .584.234.584.527v3.209c0 .35.231.583.522.583h1.572z"></path>
                                                </svg></i>
                                        </label>
                                    </div>
                                    <!-- =========== Novaposhta delivery collapse ==========-->
                                    <div id="collapseNovaposhta" class="collapse w-100" aria-labelledby="choice-4" data-parent="#accordion-delivery">
                                        <div class="small my-2 destiny__choice__name">
                                            <strong>Город<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Город не выбран" aria-label="Город не выбран" aria-describedby="button-Nova-city">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Nova-city"></button>
                                                <div class="dropdown-menu w-100 text-center destiny__choice__hint">
                                                    <small class="text-monospace">Для поиска начните вводить название города</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small mt-4 mb-2 destiny__choice__name">
                                            <strong>Отделение Новой Почты<span class="text-danger">*</span></strong>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Не выбрано" aria-label="Не выбрано" aria-describedby="button-Nova-point">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false" id="button-Nova-point"></button>
                                                <div class="dropdown-menu small w-100 destiny__choice__hint__select">
                                                    <ul class="list-unstyled p-2">
                                                        <li class="py-2">Отделение 1</li>
                                                        <li class="py-2">Отделение 2</li>
                                                        <li class="py-2">Отделение 3</li>
                                                        <li class="py-2">Отделение 4</li>
                                                        <li class="py-2">Отделение 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- =========== comments to the order for small screens ==========-->
                                <div class="col-12 px-0 d-flex d-md-none my-0 py-3 flex-row justify-content-between align-items-center border-top">
                                    <div class="pl-0 w-100">
                                        <div data-toggle="modal" data-target="#commentModal" class="d-flex flex-row justify-content-between align-items-center ml-0">
                                            <div class="d-flex flex-column small">
                                                <strong>&nbsp;Комментарий к заказу</strong>
                                            </div>
                                            <i><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M21,11h-8V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v8H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h8v8c0,0.6,0.4,1,1,1s1-0.4,1-1v-8h8c0.6,0,1-0.4,1-1S21.6,11,21,11z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- =========== total block for small screens ==========-->
                        <div class="col-12 mt-0 px-0 d-block d-md-none total__block">
                            <div class="row p-3 mx-0 bg-white border border-muted rounded small block__shadow">
                                <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-baseline">
                                    <span class="text-muted">Стоимость доставки*</span>
                                    <span class="text-success">25 ₴</span>
                                </div>
                                <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-baseline">
                                    <span class="text-muted">Комиссия почты</span>
                                    <span class="text-success">без комиссии</span>
                                </div>
                                <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-baseline pb-2 border-bottom">
                                    <span class="text-muted">Стоимость товара</span>
                                    <span class="text-muted font-weight-bold">18000 ₴</span>
                                </div>
                                <div class="col-12 mt-2 px-0 d-flex flex-row justify-content-between align-items-baseline text-dark font-weight-bold">
                                    <span>Оплата сейчас</span>
                                    <span>18000 ₴</span>
                                </div>
                                <div class="col-12 mt-2 px-0 text-muted text-center">
                                    <span>*&nbsp;Итоговая стоимость доставки может отличаться после точного рассчета </span>
                                </div>
                            </div>
                        </div>
                        <!-- =========== card payment block for small screens ==========-->
                        <div class="row w-100 mx-0 d-flex d-md-none">
                            <div class="col-12 col-sm-7 mx-auto mt-3 px-0">
                                <div class="row p-3 mx-auto bg-white border border-muted small card__payment__block block__shadow">
                                    <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-center">
                                        <span class="text-uppercase rounded-circle border border-primary"><strong>JIG</strong></span>
                                        <div class="d-inline-block">
                                            <img src="https://cdn.evopay.com.ua/static/widget/tokenizer/svg/mastercard.svg" 
                                                class="mastercard" width="32" alt="Mastercard">
                                            <img src="https://cdn.evopay.com.ua/static/widget/tokenizer/svg/visa.svg" 
                                                class="visa" width="32" alt="Visa">
                                            <img src="https://cdn.evopay.com.ua/static/widget/tokenizer/svg/unionPay.svg" 
                                                class="union-pay" width="32" alt="UnionPay">
                                        </div>
                                    </div>
                                    <div class="col-12 px-0 form-group my-3">
                                        <label for="cardNumber" class="mb-0 small">Номер карты</label>
                                        <input type="text" class="form-control bg-light text-center" placeholder="XXXX XXXX XXXX XXXX" value="" name="cardNumber" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-7 pr-2 pl-0 my-2 d-flex flex-row justify-content-center align-items-center">
                                        <div class="form-group mr-1 mb-0">
                                            <label for="month" class="mb-0 small">месяц</label>
                                            <input type="text" class="form-control bg-light text-center" placeholder="ММ" value="" name="month" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <span class="d-block text-muted mt-3 fa-2x">&sol;</span>
                                        <div class="form-group ml-1 mb-0">
                                            <label for="year" class="mb-0 small">год</label>
                                            <input type="text" class="form-control bg-light text-center" placeholder="ГГ" value="" name="year" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-5 pl-2 pr-0 my-2 d-flex flex-row justify-content-center align-items-center">
                                        <div class="form-group mr-1 w-75 mb-0">
                                            <label for="CVV" class="mb-0 small">CVV код</label>
                                            <input type="text" class="form-control bg-light text-center" placeholder="XXX" value="" name="CVV" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="ml-1 pt-3 w-25 mb-0">
                                            <span class="text-muted" data-placement="top" data-toggle="tooltip" 
                                                data-original-title="Код расположен на обратной стороне карты">
                                                <i class="far fa-question-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-block btn-primary w-75 mx-auto mt-4">
                                Оплатить <span>18000&nbsp;₴</span></button>
                            <div class="col-12 d-inline-block text-center my-3">
                                <img src="https://izi.ua/cloud-cgi/static/izi-static/build/images/mastercard-colored-3xC8z.png" 
                                    srcset="https://izi.ua/cloud-cgi/static/izi-static/build/images/mastercard-colored@2x-1MOw_.png 2x, https://izi.ua/cloud-cgi/static/izi-static/build/images/mastercard-colored@3x-1aMSN.png 3x" 
                                    width="62" alt="mastercard" class="m-2">
                                <img src="https://izi.ua/cloud-cgi/static/izi-static/build/images/visa-colored--SGR_.png" 
                                    srcset="https://izi.ua/cloud-cgi/static/izi-static/build/images/visa-colored@2x-3-Id-.png 2x, https://izi.ua/cloud-cgi/static/izi-static/build/images/visa-colored@3x-2RJ1L.png 3x" 
                                    width="53" alt="visa" class="m-2">
                                <img src="https://izi.ua/cloud-cgi/static/izi-static/build/images/pci-colored-24uCa.png" 
                                    srcset="https://izi.ua/cloud-cgi/static/izi-static/build/images/pci-colored@2x-d39mS.png 2x, https://izi.ua/cloud-cgi/static/izi-static/build/images/pci-colored@3x-38zAf.png 3x" 
                                    width="62" alt="pci" class="m-2">
                            </div>
                            <div class="col-12 px-0 text-center">
                                <p class="small mb-0 text-muted">Внося оплату, вы соглашаетесь на возмещение продавцу стоимости услуг доставки посылки в вашу сторону, в случае, если посылка не будет получена. Средства удерживаются из суммы оплаты</p>
                            </div>
                        </div>
                        <!-- end payment block -->
                    </div>
                </div>
                <!-- =========== aside display-none d-md-block ==========-->
                <aside class="d-none d-md-block col-md-5 col-xl-4 pl-2 pt-2 pr-0">
                    <div class="row sticky-top w-100 mx-0">
                        <h3 class="mb-3 ml-0"><strong>Итого</strong></h3>
                        <!-- =========== comments to the order ==========-->
                        <div class="col-12 mt-0 mb-2 px-0">
                            <div class="row p-3 mx-0 bg-white border border-muted rounded block__shadow">
                                <div class="col-12 px-0 d-flex my-0 pb-0 flex-row justify-content-between align-items-center">
                                    <div class="pl-0 w-100">
                                        <div data-toggle="modal" data-target="#commentModal" class="d-flex flex-row justify-content-between align-items-center ml-0">
                                            <div class="d-flex flex-column small">
                                                <strong>&nbsp;Комментарий к заказу</strong>
                                            </div>
                                            <i><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M21,11h-8V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v8H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h8v8c0,0.6,0.4,1,1,1s1-0.4,1-1v-8h8c0.6,0,1-0.4,1-1S21.6,11,21,11z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- =========== total block ==========-->
                        <div class="col-12 mt-0 px-0 total__block">
                            <div class="row p-3 mx-0 bg-white border border-muted rounded small block__shadow">
                                <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-baseline">
                                    <span class="text-muted">Стоимость доставки*</span>
                                    <span class="text-success">25 ₴</span>
                                </div>
                                <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-baseline">
                                    <span class="text-muted">Комиссия почты</span>
                                    <span class="text-success">без комиссии</span>
                                </div>
                                <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-baseline pb-2 border-bottom">
                                    <span class="text-muted">Стоимость товара</span>
                                    <span class="text-muted font-weight-bold">18000 ₴</span>
                                </div>
                                <div class="col-12 mt-2 px-0 d-flex flex-row justify-content-between align-items-baseline text-dark font-weight-bold">
                                    <span>Оплата сейчас</span>
                                    <span>18000 ₴</span>
                                </div>
                                <div class="col-12 mt-2 px-0">
                                    <div class="small p-2 w-100 text-center bg-warning rounded font-weight-bold">
                                        После оформления заказа, напишите продавцу в чате, чтобы получить реквизиты для оплаты.
                                    </div>
                                </div>
                                <div class="col-12 mt-2 px-0 text-muted text-center">
                                    <span>*&nbsp;Итоговая стоимость доставки может отличаться после точного рассчета </span>
                                </div>
                            </div>
                        </div>
                        <!-- =========== card payment block ==========-->
                        <div class="row w-100 mx-0">
                            <div class="col-12 mt-3 px-0">
                                <div class="row p-3 mx-0 bg-white border border-muted small card__payment__block block__shadow">
                                    <div class="col-12 px-0 d-flex flex-row justify-content-between align-items-center">
                                        <span class="text-uppercase rounded-circle border border-primary"><strong>JIG</strong></span>
                                        <div class="d-inline-block">
                                            <img src="https://cdn.evopay.com.ua/static/widget/tokenizer/svg/mastercard.svg" 
                                                class="mastercard" width="32" alt="Mastercard">
                                            <img src="https://cdn.evopay.com.ua/static/widget/tokenizer/svg/visa.svg" 
                                                class="visa" width="32" alt="Visa">
                                            <img src="https://cdn.evopay.com.ua/static/widget/tokenizer/svg/unionPay.svg" 
                                                class="union-pay" width="32" alt="UnionPay">
                                        </div>
                                    </div>
                                    <div class="col-12 px-0 form-group my-3">
                                        <label for="cardNumber" class="mb-0 small">Номер карты</label>
                                        <input type="text" class="form-control bg-light text-center" 
                                           placeholder="XXXX XXXX XXXX XXXX" value="" name="cardNumber" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-7 pr-2 pl-0 my-2 d-flex flex-row justify-content-center align-items-center">
                                        <div class="form-group mr-1 mb-0">
                                            <label for="month" class="mb-0 small">месяц</label>
                                            <input type="text" class="form-control bg-light text-center" 
                                               placeholder="ММ" value="" name="month" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <span class="d-block text-muted mt-3 fa-2x">&sol;</span>
                                        <div class="form-group ml-1 mb-0">
                                            <label for="year" class="mb-0 small">год</label>
                                            <input type="text" class="form-control bg-light text-center" 
                                               placeholder="ГГ" value="" name="year" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-5 pl-2 pr-0 my-2 d-flex flex-row justify-content-center align-items-center">
                                        <div class="form-group mr-1 w-75 mb-0">
                                            <label for="CVV" class="mb-0 small">CVV код</label>
                                            <input type="text" class="form-control bg-light text-center" 
                                               placeholder="XXX" value="" name="CVV" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="ml-1 pt-3 w-25 mb-0">
                                            <span class="text-muted" data-placement="top" data-toggle="tooltip" 
                                               data-original-title="Код расположен на обратной стороне карты">
                                                <i class="far fa-question-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-block btn-primary w-100 mt-4">
                                Оплатить <span>18000&nbsp;₴</span></button>
                            <div class="col-12 d-inline-block text-center my-3">
                                <img src="https://izi.ua/cloud-cgi/static/izi-static/build/images/mastercard-colored-3xC8z.png" 
                                    srcset="https://izi.ua/cloud-cgi/static/izi-static/build/images/mastercard-colored@2x-1MOw_.png 2x, https://izi.ua/cloud-cgi/static/izi-static/build/images/mastercard-colored@3x-1aMSN.png 3x" 
                                    width="62" alt="mastercard" class="m-2">
                                <img src="https://izi.ua/cloud-cgi/static/izi-static/build/images/visa-colored--SGR_.png" 
                                    srcset="https://izi.ua/cloud-cgi/static/izi-static/build/images/visa-colored@2x-3-Id-.png 2x, https://izi.ua/cloud-cgi/static/izi-static/build/images/visa-colored@3x-2RJ1L.png 3x" 
                                    width="53" alt="visa" class="m-2">
                                <img src="https://izi.ua/cloud-cgi/static/izi-static/build/images/pci-colored-24uCa.png" 
                                    srcset="https://izi.ua/cloud-cgi/static/izi-static/build/images/pci-colored@2x-d39mS.png 2x, https://izi.ua/cloud-cgi/static/izi-static/build/images/pci-colored@3x-38zAf.png 3x" 
                                    width="62" alt="pci" class="m-2">
                            </div>
                            <div class="col-12 px-0 text-center">
                                <p class="small mb-0 text-muted">
                                    Внося оплату, вы соглашаетесь на возмещение продавцу стои&shy;мости услуг доставки посылки в вашу сторону, в случае, если посылка не будет получена. Средства удерживаются из суммы оплаты</p>
                            </div>
                        </div>
                        <!-- end payment block -->
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <!--============ Modal for payment-description - 1 =============-->
    <div class="modal fade" id="descriptionSafeModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bolder" id="staticBackdropLabel">Надежная оплата картой</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol class="bg-white">
                        <li><strong class="ml-2 mb-2 border-bottom">Оплачиваете заказ при оформлении</strong><br>
                            Деньги резервируется на транзитном счете банка-партнера
                        </li>
                        <li><strong class="ml-2 mb-2 border-bottom">Продавец подтверждает заказ и отправялет посылку</strong><br>
                            Пока продавец не отправил посылку, вы можете отменить заказ и 100% оплаты вернется на вашу платежную карту
                        </li>
                        <li><strong class="ml-2 mb-2 border-bottom">Получаете или отказываетесь от посылки</strong><br>
                            Если посылка не будет получена, оплата вернется на вашу платежную карту, за вычетом стоимости доставки посылки в вашу сторону
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-block btn-primary mt-3" data-dismiss="modal" aria-label="Close">Понятно</button>
                </div>
            </div>
        </div>
    </div>
    <!--============ end modal ============= -->
    <!--============ Modal for payment-description - 2 =============-->
    <div class="modal fade" id="descriptionRiskModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bolder" id="staticBackdropLabel">Оплата продавцу на карту</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol class="bg-white">
                        <li><strong class="ml-2 mb-2 border-bottom">Оформите заказ</strong><br>
                            Укажите свои контакты и адрес получения заказа
                        </li>
                        <li><strong class="ml-2 mb-2 border-bottom">Свяжитесь с продавцом в чате JIG</strong><br>
                            Вам необходимо обсудить условия оплаты заказа с продавцом в чате JIG. И помните: <br><i>при оплате на карту продавцу мы не сможем гарантировать сохранность ваших денег</i>.
                        </li>
                        <li><strong class="ml-2 mb-2 border-bottom">Заберите посылку</strong><br>
                            После оплаты продавец подтвердит заказ и отправит вашу посылку на указанный вами адрес</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-block btn-primary mt-3" data-dismiss="modal" aria-label="Close">Понятно</button>
                </div>
            </div>
        </div>
    </div>
    <!--============ end modal ============= -->
    <!--============ Modal for comment =============-->
    <div class="modal fade" id="commentModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content p-3">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <h5 class="modal-title">Комментарий к заказу</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <textarea class="w-100 mt-3 rounded" name="comment" id="buyerComment" placeholder=" Ваш комментарий" cols="30" rows="10"></textarea>
                <div class="w-100 d-flex justify-content-end text-muted mt-2 text__limit__counter">1/300</div>
                <button type="submit" class="btn btn-block btn-primary mt-3">Готово</button>
            </form>
        </div>
    </div>
    <!--============ end modal ============= -->
    <button class="btn btn-primary d-flex flex-row justify-content-center align-items-center position-fixed chat__button block__shadow"><i class="far fa-comments"></i>&nbsp;Чат JIG</button>
    <!-- side-chat block -->
    <div class="chat__block position-fixed bg-white">
        <div class="chat__block__header d-flex flex-row justify-content-between">
            <div class="d-flex flex-row justify-content-between align-items-center w-100 p-3">
                <a class="nav-link text-dark font-weight-bold dropdown-toggle pl-0 d-flex justify-content-around align-items-center" 
                    data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-comments fa-2x"></i><span class="mx-3">Активные чаты</span><i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                <button type="button" class="close" data-dismiss="chatPanel" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <ul class="nav nav-pills py-3 border-top border-bottom" id="chatTab" role="tablist">
            <li class="nav-item text-center" role="presentation">
                <a class="nav-link small" id="buyerTabPane-tab" data-toggle="tab" href="#buyerTabPane" role="tab" 
                   aria-controls="buyerTabPane" aria-selected="true">С покупателями</a>
            </li>
            <li class="nav-item small text-center" role="presentation">
                <a class="nav-link" id="sellerTabPane-tab" data-toggle="tab" href="#sellerTabPane" role="tab" 
                   aria-controls="sellerTabPane" aria-selected="false">С продавцами</a>
            </li>
        </ul>
        <div class="tab-content" id="chatTabContent">
            <div class="tab-pane fade" id="buyerTabPane" role="tabpanel" aria-labelledby="buyerTabPane-tab">
                <div class="w-100 d-flex flex-column justify-content-start align-items-center empty__tab">
                    <span class="my-5"><i class="fas fa-envelope-open-text fa-5x"></i></span>
                    <span class="font-weight-bold">Пока у вас нет сообщений... </span>
                    <span class="text-muted">У вас нет активных диалогов</span>
                </div>
            </div>
            <div class="tab-pane fade show active" id="sellerTabPane" role="tabpanel" aria-labelledby="sellerTabPane-tab">
                <div class="has__message__tab border-bottom d-flex flex-row justify-content-between small px-2 py-3">
                    <!-- ========= seller data ========== -->
                    <div class="d-flex flex-row justify-content-start align-items-center p-0 bg-transparent order__seller">
                        <img src="./build/img/bg_5s.png" width="24" height="24" alt="аватарка" 
                           class="img-fluid obj-fit rounded-circle m-1 order__seller__photo">
                        <span class="order__seller__name"><a href="#">Vasiliy Pupking</a></span>
                        <div class="chat__item__title pl-2">
                            <h6 class="small mb-0 overflow-hidden order__item__title">Игрушка антистресс Pop it Антистресс тыкалка Игрушка пупырка Круг</h6>
                        </div>
                    </div>
                    <time class="text-dark ml-auto" pubdate datetime="2021-05-28" title="28.05.2021">28.05.2021</time>
                </div>
                <div class="has__message__tab border-bottom d-flex flex-row justify-content-between small px-2 py-3">
                    <!-- ========= seller data ========== -->
                    <div class="d-flex flex-row justify-content-start align-items-center p-0 bg-transparent order__seller">
                        <img src="./build/img/bg_5s.png" width="24" height="24" alt="аватарка" class="img-fluid obj-fit rounded-circle m-1 order__seller__photo">
                        <span class="order__seller__name"><a href="#">Vasiliy Pupking</a></span>
                        <div class="chat__item__title px-2">
                            <h6 class="small mb-0 overflow-hidden order__item__title">Игрушка антистресс Pop it Антистресс тыкалка Игрушка пупырка Круг</h6>
                        </div>
                    </div>
                    <time class="text-dark" pubdate datetime="2021-05-28" title="28.05.2021">28.05.2021</time>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const chatBtn = document.querySelector('.chat__button '),
                chatBlock = document.querySelector('.chat__block'),
                chatBtnClose = document.querySelector('button[data-dismiss="chatPanel"]');
                // smallWidth = '100vw',
                // lgWidth = '25em';
            // let screenWidth = window.screen.width;
            
            function openChatPanel() {    
                chatBtn.addEventListener('click', function() {
                    chatBlock.style.width = '';
                    chatBlock.classList.toggle('d-block');
                });
            }

            // if (screenWidth <= 395) {
            //     console.log(smallWidth);
            //     openChatPanel(smallWidth);   
            // } else if (screenWidth >= 395) {
            //     openChatPanel(lgWidth);
            // }

            function closeChatPanel() {
                chatBtnClose.addEventListener('click', function() {
                    chatBlock.style.width = '0';
                    setTimeout(function () {
                        chatBlock.classList.remove('d-block');
                    }, 500)
                });
            }
            openChatPanel();
            closeChatPanel();

            // ========= bootstrap tooltips ========= //
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        });
    </script>