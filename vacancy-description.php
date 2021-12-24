<?php include_once "header.php"; ?>
<title>Вакансії</title>
</head>
<!-- content -->

<body id="main">
    <?php include_once "login-menu.php"; ?>
    <header class="container mt-5 pt-5">
        <nav aria-label="breadcrumb" class="d-flex justify-content-start align-items-baseline mt-5 mb-2">
            <ol class="d-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary" href="#">Вакансії</a>
                </li>
                <li class="breadcrumb-item text_color" aria-current="page">Опис вакансї</li>
            </ol>
        </nav>
        <!-- heading -->
        <div class="col-12 mx-0 px-0 text-center mt-3">
            <h2 class="text-uppercase text-white bg_headers p-3 mb-0">
                Опис вакансії
            </h2>
        </div>
    </header>
    <section class="open_positions container mt-0 pt-0 mb-3 pb-3">
        <!-- text-positions -->
        <div id="open-positions" class="row mx-0 w-100 border border-primary bg_muted p-3">
            <div class="col-12">
                <div class="row d-flex flex-column mx-0 w-100">
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
                            <li>  21 200 грн (5 розряд)</li>
                            <li>  24 750 грн (6 розряд)</li>
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
                                <a href="vacancy-form.php" class="btn btn-lg btn-dark text-uppercase my-4 mx-auto mx-md-0 shadow">Відгукнутися на вакансію</a>
                                <a href="vacancy-list.php#start-of-list" class="btn btn-lg btn-light text-uppercase my-3 mx-auto mx-md-0 border-primary shadow text_color">&laquo; Повернутися до списку вакансій</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>