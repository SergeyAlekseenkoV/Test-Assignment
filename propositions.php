<?php include_once "header.php"; ?>
<title>Пропозиції</title>
</head>

<body id="home">
    <?php include_once "user-menu.php"; ?>
    <section id="personalRoom" class="pt-3 pb-5">
        <!--nav-block-->
        <div class="container py-3 py-lg-3 pb-lg-3 px-sm-0 px-md-3">
            <nav aria-label="breadcrumb" class="d-flex justify-content-between align-items-baseline mt-5 mb-2">
                <h3 class="d-md-none pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Пропозиції</h3>
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Пропозиції</li>
                </ol>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-1 mt-md-2 mt-xl-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </nav>
            <div class="row py-2 ml-0 pl-0 mr-0 pr-0">
                <div class="col-sm-12 col-lg-2 px-0 py-0">
                    <article class="sticky-top rounded bg-dark text-center text-lg-left text-white shadow pt-1">
                        <h6 class="px-3 pt-2 pb-1 text-uppercase">Подання пропозиції</h6>
                        <nav class="accordion" id="accordionProp">
                            <!-- first card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark border-top" id="first-item">
                                    <button class="btn bg-transparent btn-block text-left d-flex flex-row justify-content-between justify-content-sm-center justify-content-lg-between align-items-center  text-white text-uppercase" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Короткий опис сервісу&nbsp;&nbsp;&nbsp;<span><i class="fas fa-chevron-right"></i></span>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse bg-transparent" aria-labelledby="first-item" data-parent="#accordionProp">
                                    <ul class="card-body list-group p-0 text-white">
                                        <li class="list-group-item bg-transparent p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Для подання пропозиції (ідеї) Вам
                                                необхідно
                                                заповнити форму подання з обов'язковими полями,
                                                де необхідно вказати на проблему, а також спосіб її вирішення</p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Подана пропозиція буде відправлена до
                                                загальної бази
                                                та розглянута впродовж певного часу</p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Розглянуті та погоджені пропозиції будуть
                                                внесені до
                                                списку пропозицій, як необхідних до
                                                введення у дію на підприємстві </p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Ваша думка вкрай важлива та має право
                                                бути почута
                                            </p>
                                        </li>
                                        <li class="list-group-item bg-transparent border-top p-2">
                                            <p class="mb-0 small">&bull;&nbsp; Дієві пропозиції (ідеї) будуть
                                                відзначені
                                                грошовими винагородами в залежності від розміру досягнутого економічного ефекту</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- my propositions -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark border-top" id="second-item">
                                    <button class="btn bg-transparent btn-block text-left d-flex flex-row justify-content-between justify-content-sm-center justify-content-lg-between align-items-center  text-white text-uppercase" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Мої пропозиції&nbsp;&nbsp;&nbsp;<span><i class="fas fa-chevron-right"></i></span>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse bg-transparent" aria-labelledby="second-item" data-parent="#accordionProp">
                                    <ul class="card-body list-group p-0 text-white">
                                        <li class="list-group-item bg-transparent p-2">
                                            <a href="proposition-description.php" class="text-white">Пропозиція <br>№ <strong>1222</strong></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </article>
                </div>
                <!-- main content -->
                <div class="col-sm-12 col-lg-10 px-0 pl-md-0 pl-lg-1 py-0 pr-lg-0">
                    <aside class="mt-2 mt-lg-0 bg-info border border-primary rounded shadow">
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2 class="text-uppercase px-0 py-3 mx-1 my-1 text-white bg_dark_through">Електронна форма подачі
                                пропозиції </h2>
                        </div>
                        <form action="" method="post" id="sendingForm" class="d-block">
                            <fieldset class="form-row m-1 p-1 p-sm-2 p-md-3 p-lg-4 p-xl-5 bg_muted border rounded">
                                <div class="form-group col-md-12">
                                    <label for="propname" class="text-uppercase font-weight-bold">Назва
                                        пропозиції</label>
                                    <input type="text" class="form-control border border-primary shadow text_color" placeholder="Назва пропозиції" id="propname" required>
                                </div>
                                <h3 class="col-12 text-uppercase">Інформація про автора</h3>
                                <div class="form-group col-8 col-md-3 bg-light pb-1">
                                    <label for="tabnumber">Табельний номер</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border border-primary shadow text_color" id="tabnumprepend">№</span>
                                        </div>
                                        <input type="text" class="form-control border border-primary text_color" id="tabnumber" aria-label="tabnumber" aria-describedby="tabnumprepend" readonly required>
                                    </div>
                                </div>
                                <div class="form-group col-md-9 bg-light pb-1">
                                    <label for="authorname">Прізвище, ім'я, по-батькові автора</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border border-primary shadow text_color" id="usericonprepend">
                                                <i class="fas fa-user-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control border border-primary text_color" id="authorname" placeholder="П.І.Б автора" aria-label="authorname" aria-describedby="usericonprepend" readonly required>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputAddress">Цех, професія</label>
                                    <input type="text" class="form-control border border-primary shadow text_color" id="inputAddress" placeholder="Цех, професія" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Контактний телефон</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-primary px-3 bg_muted text_color">
                                                <i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="tel" name="telephone" class="form-control border-primary shadow bg-light" placeholder="(XXX)XXX-XX-XX" id="telInput" aria-describedby="telInput" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Електронна адреса</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-primary bg_muted text_color">
                                                <i class="far fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="emailaddress" class="form-control border-primary shadow bg-light" placeholder="email" id="emailaddress" aria-describedby="emailaddress" required>
                                    </div>
                                </div>
                                <h3 class="col-12 text-uppercase font-weight-bold my-3">Опис ідеї</h3>
                                <div class="form-group col-12">
                                    <label for="problemDescr" class="text_color">Розв'язувана проблема (Зміст проблеми
                                        та можливі її наслідки)</label>
                                    <textarea class="w-100 rounded shadow" id="problemDescr" name="problemDescr" rows="5" cols="49" required></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group col-12">
                                    <label for="solutionDescr" class="text_color">Запропоновані рішення</label>
                                    <textarea class="w-100 rounded shadow" id="solutionDescr" name="solutionDescr" rows="5" cols="49" required></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group col-md-10 col-md-9">
                                    <label for="coauthors" class="text_color">Співавтори</label>
                                    <textarea class="w-100 rounded shadow" id="coauthors" name="coauthors" rows="3" cols="49"></textarea>
                                </div>
                                <div class="col-md-10 mb-3 prop_selection">
                                    <label for="propDirection">Напрямок пропозиції</label>
                                    <select class="custom-select border-primary rounded shadow text_color" id="propDirection" required>
                                        <option selected disabled value="">Обрати...</option>
                                        <option>Зміна нормативного документу</option>
                                        <option>Зміни у технології виробництва</option>
                                        <option>Охорона навколишнього середовища</option>
                                        <option>Збільшення обсягів виробництва</option>
                                        <option>Підвищення якості забезпечення виробництва</option>
                                        <option>Підвищення якості підготовки та проведення ремонтів</option>
                                        <option>Підвищення якості продукції</option>
                                        <option>Підвищення якості експлуатації та обслуговування устаткування</option>
                                        <option>Підвищення енергоефективності</option>
                                        <option>Зниження затрат та скорочення витрат на виробництво</option>
                                        <option>Зниження трудомісткості на виконання робіт</option>
                                        <option>Скорочення часу на виконання робіт</option>
                                        <option>Покращення умов праці та порядку робочих місць</option>
                                        <option>Поліпшення в галузi промислової безпеки та охорони праці</option>
                                        <option value="anotherChoice">Інше
                                            <textarea id="anotherChoice" class="w-100 rounded shadow" rows="5" cols="49"></textarea>
                                        </option>
                                </div>

                                <div class="form-group col-md-10 col-md-9">
                                    <label for="influenceIndicator" class="text_color">Показники на які може вплинути
                                        запропонована ідея</label>
                                    <textarea class="w-100 rounded shadow" id="influenceIndicator" name="coauthors" rows="3" cols="49"></textarea>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <label for="propEffect">Очікуваний економічний ефект, грн/рік
                                        <br><small>(необов'язкове для заповнення поле)</small></label>
                                    <select class="custom-select border-primary rounded shadow text_color" id="propEffect">
                                        <option selected disabled value="">Обрати...</option>
                                        <option>Без розрахунків</option>
                                        <option>Менше 20 тис.</option>
                                        <option>20 - 50 тис.</option>
                                        <option>50 - 100 тис.</option>
                                        <option>100 - 500 тис.</option>
                                        <option>500 тис. - 1 млн.</option>
                                        <option>Більше 1 млн.</option>
                                        <option>Відсутній</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-10 col-md-9">
                                    <!-- file uploading -->
                                    <p>Додайте файл</p>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fileInput" aria-describedby="inputUploading">
                                        <label class="custom-file-label border-primary text_color" for="fileInput">Обрати файл</label>
                                    </div>
                                    <!-- end file -->
                                    <p class="my-3">Чи є у Вас досвід впровадження <em class="font-weight-bold">аналогічних пропозицій?</em></p>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input checked type="radio" id="radioProp1" name="radioExperience" class="custom-control-input">
                                        <label class="custom-control-label" for="radioProp1">Так</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="radioProp2" name="radioExperience" class="custom-control-input">
                                        <label class="custom-control-label" for="radioProp2">Ні</label>
                                    </div>
                                    <p class="my-3">Чи хотіли б Ви взяти участь у впровадженні цієї <em class="font-weight-bold">ідеї?</em></p>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input checked type="radio" id="radioPart1" name="radioWish" class="custom-control-input">
                                        <label class="custom-control-label" for="radioPart1">Так</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="radioPart2" name="radioWish" class="custom-control-input">
                                        <label class="custom-control-label" for="radioPart2">Ні</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary w-50 mx-1 mt-4 py-2 py-md-3 shadow">Подати
                                    пропозицію</button>
                            </fieldset>
                        </form>
                        <div id="successSent" class="d-none justify-content-center align-items-center my-5 py-5">
                            <p class="lead mb-0">* Пропозиція успішно надіслана <br>та буде розглянута найближчим часом!</p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
    <script>
        $(document).ready(function() {

            /* select in propositions page */

            $("#propDirection").change(function() {
                if (this.value == 'anotherChoice') {
                    $("#anotherChoice").show();
                } else {
                    $("#anotherChoice").hide();
                }
            });

            $("#sendingForm").submit(function(event) {
                $(this).removeClass("d-block");
                $(this).addClass("d-none");
                $("#successSent").addClass("d-flex");
                event.preventDefault();
            });

            /* if entered data is not sent confirm the action of leaving the page */

            window.addEventListener('beforeunload', (event) => {
                event = event || window.event;
                let formIsSent = document.querySelector('#sendingForm');
                if (formIsSent.classList.contains('d-block')) {
                    let inputs = document.querySelectorAll('textarea');
                    inputs.forEach(function(input) {
                        if (input.value) {
                            beforeUnLoad(event);

                            function beforeUnLoad(event) {
                                event.preventDefault();
                                // set some back value for Chrome
                                event.returnValue = '';
                            }
                        }
                    });
                /* when the proposition form is sent default behavior of th browser */

                } else if (formIsSent.classList.contains('d-none')) {
                    beforeUnLoad();
                    // function beforeUnLoad(event) {
                    //     event.preventDefault() = 0;
                    // }
                }
            });
        });
    </script>
</body>

</html>