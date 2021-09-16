<?php include_once "header.php"; ?>
<title>Портал-Опис вакансії</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 position_description">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Опис вакансії
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
                        <h2 class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 my-1 text-white bg_headers">Досвід 
                                <span class="d-none d-sm-inline-block dot mx-1 mx-md-2 mx-md-3"><i class="far fa-dot-circle"></i></span><span class="d-sm-none">-</span> Стабільність 
                                <span class="d-none d-sm-inline-block dot mx-1 mx-md-2 mx-md-3"><i class="far fa-dot-circle"></i></span><span class="d-sm-none">-</span> Перспектива</h2>
                        </div>
                        <!-- text-positions -->
                        <div class="col-12 mx-0 px-2">
                            <div class="d-flex flex-row justify-content-center justify-content-md-start align-items-center mx-5 my-4">
                                <h2 class="text-center text-md-left text_color">Підземний гірник очисного вибою 5-6 розряду</h2>
                            </div>
                            <p class="px-2 mb-2"><strong>Привіт, наш майбутній співробітник!</strong><br>Ми чекаємо Вас в нашій команді! Молодого, амбітного, спраглого стати професіоналом у обраній професії.</p>
                            <p class="px-2 mb-2"><strong class="font-italic">Готові прийняти випускників, надати перше місце роботи! Дати старт для Вашої професійної кар'єри!</strong></p>
                            <br>
                            <p class="px-2 mb-2 font-weight-bold"><a href="avarage-salary.php">Розмір середньої заробітної плати</a></p>
                                <ul class="list-unstyled ml-3">
                                    <li> - 21 200 грн (5 розряд)</li>
                                    <li> - 24 750 грн (6 розряд)</li>
                                </ul>
                            <p class="px-2 mb-2"><strong>Графік роботи</strong><br> 3-x змінний, бригадний. Тривалість зміни 7.2 години</p>
                            <p class="px-2 mb-2"><strong>Умови пенсійного забезпечення</strong><br> пільговий список пенсійного забезпечення № 1</p>
                            <p class="px-2 mb-2"><strong>Від Вас ми чекаємо:</strong><br> - БАЖАННЯ ПРАЦЮВАТИ!!!</p>
                            <p class="px-2 mb-2 font-weight-bold">Ми Вам пропонуємо:</p>
                                <ol>
                                    <li> Старт для Вашої професійної кар'єри.</li>
                                    <li> Повний соцпакет.</li>
                                    <li> Оформлення відповідно до КЗпП України.</li>
                                    <li> Стабільний дохід.</li>
                                    <li> Право на пільгове пенсійне забезпечення</li>
                                    <li> Оздоровлення в <a href="#">санаторії-профілакторії</a>.</li>
                                    <li> Пільгова програма відпочинку за кордоном (Туреччина, Єгипет).</li>
                                    <li> Харчування працівників у виробничих їдальнях.</li>
                                    <li> Трансфер автобусами підприємства в віддалені райони міста.</li>
                                    <li> Медичне страхування в СК «Лікарняна каса».</li>
                                    <li> Матеріальна допомога при вступі в шлюб та при народженні дитини, а також інші умови згідно <a href="#">Колективного договору</a>.</li>   
                                </ol>
                            <div class="row m-2">
                                <div class="col-12 col-md-8 col-lg-6 text-center text-md-left">
                                    <button class="btn btn-lg btn-dark text-uppercase my-4 mx-auto mx-md-0 shadow" data-toggle="modal" data-target="#position-form">Відгукнутися на вакансію</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="position-form" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1"
                                        aria-labelledby="lable-position-form" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content border">
                                                <div class="modal-header bg-dark">
                                                    <h5 class="modal-title text-white" id="lable-position-form">
                                                        Зворотній дзвінок за вакансією
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-white">
                                                            <i class="far fa-times-circle"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-3">
                                                    <form action=""
                                                        method="post">
                                                            <div class="form-group text-left">
                                                                <label for="userInput" class="text_color mb-0"><ul><li>Ваші П.І.Б</li></ul></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text border-primary bg_muted text_color">
                                                                            <i class="fas fa-user-circle" aria-hidden="true"></i></span>
                                                                    </div>
                                                                    <input type="text"
                                                                      class="form-control border-primary shadow bg-light"
                                                                      id="userInput" placeholder="" value=""
                                                                      required>
                                                                </div>
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="telInput" class="text_color mb-0"><ul><li>Ваш телефон</li></ul></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text border-primary px-3 bg_muted text_color">
                                                                            <i class="fas fa-mobile-alt"></i></span>
                                                                    </div>
                                                                    <input type="tel" name="telephone"
                                                                      class="form-control border-primary shadow bg-light"
                                                                      placeholder="(XXX)XXX-XX-XX" id="telInput" aria-describedby="telInput"
                                                                      required>
                                                                </div>
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                            <div class="form-group text-center">
                                                                <label for="expDescr" class="text_color">Ваш досвід роботи (стисло)</label>
                                                                <textarea class="w-100 rounded shadow" id="expDescr" name="expDescr" rows="5" cols="49" required></textarea>
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                            <button type="submit" class="btn btn-lg btn-primary mt-4 shadow w-100 text-white"
                                                                    value="login">Відправити запит</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal -->
                                    <a href="open-positions.php#start-of-list" class="btn btn-lg btn-light text-uppercase my-3 mx-auto mx-md-0 border-primary shadow text_color">&laquo; Повернутися до списку вакансій</a>
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