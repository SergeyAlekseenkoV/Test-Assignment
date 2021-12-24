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
                <li class="breadcrumb-item text_color" aria-current="page">
                    <a class="text-primary" href="#">Опис вакансї</a>
                </li>
                <li class="breadcrumb-item text_color" aria-current="page">Електронна форма</li>
            </ol>
        </nav>
        <!-- heading -->
        <div class="col-12 mx-0 px-0 text-center mt-3">
            <h2 class="text-uppercase text-white bg_headers p-3 mb-0">
                РЕЗЮМЕ (АНКЕТА) ПРЕТЕНДЕНТА НА ПРАЦЕВЛАШТУВАННЯ
            </h2>
        </div>
    </header>
    <section class="open_positions container mt-0 pt-0 mb-3 pb-3">
        <!-- text-positions -->
        <div id="open-positions" class="row mx-0 w-100 border border-primary bg_muted p-3">
            <form action="" method="post" id="sendingForm" class="d-block">
                <fieldset class="form-row m-1 p-1 p-sm-2 p-md-3 p-lg-4 p-xl-5 bg_muted border rounded shadow">
                    <div class="form-group col-md-12">
                        <label for="vacancyname" class="text-uppercase font-weight-bold">Назва
                            вакансії</label>
                        <input type="text" class="form-control border border-primary shadow text_color" id="vacancyname" readonly>
                    </div>
                    <h3 class="col-12 text-uppercase">Інформація про претендента</h3>
                    <div class="form-group col-8 col-md-4 bg-light pb-1">
                        <label for="tabnumber">Дата народження</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text border border-primary shadow text_color" id="dateofbirth"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control border border-primary text_color" id="birthdate" aria-label="birthdate" placeholder="число місяць рік" aria-describedby="dateofbirth" required>
                        </div>
                    </div>
                    <div class="form-group col-12 bg-light pb-1">
                        <label for="authorname">Прізвище, ім'я, по-батькові</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text border border-primary shadow text_color" id="usericonprepend">
                                    <i class="fas fa-user-circle" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" class="form-control border border-primary text_color" id="authorname" placeholder="П.І.Б автора" aria-label="authorname" aria-describedby="usericonprepend" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputAddress">Адреса</label>
                        <input type="text" class="form-control border border-primary shadow text_color" id="inputAddress" required>
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
                    <div class="form-group col-lg-10 col-md-9">
                        <h3 class="my-3 font-weight-bold">Освіта</h3>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input checked type="radio" id="radioProp1" name="radioEducation" class="custom-control-input">
                            <label class="custom-control-label" for="radioProp1">Вища</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioProp2" name="radioEducation" class="custom-control-input">
                            <label class="custom-control-label" for="radioProp2">Середня спеціальна</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="radioProp3" name="radioEducation" class="custom-control-input">
                            <label class="custom-control-label" for="radioProp3">Середня</label>
                        </div>
                    </div>
                    <div class="form-group col-12 bg-light pb-1">
                        <label for="authorname">Назва учбового закладу</label>
                        <div class="input-group">
                            <input type="text" class="form-control border border-primary text_color" id="schoolname" placeholder="назва закладу" aria-label="schoolname" required>
                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-10 bg-light pb-1">
                        <label for="authorname">Кваліфікація</label>
                        <div class="input-group">
                            <input type="text" class="form-control border border-primary text_color" id="degreename" placeholder="кваліфікація" aria-label="degreename" required>
                        </div>
                    </div>
                    <div class="form-group col-8 col-md-4 bg-light pb-1">
                        <label for="tabnumber">Дата початку навчання</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text border border-primary shadow text_color" id="startdate"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control border border-primary text_color" placeholder="число місяць рік" id="startday" aria-label="startday" aria-describedby="startdate" required>
                        </div>
                    </div>
                    <div class="form-group col-8 col-md-4 bg-light pb-1">
                        <label for="tabnumber">Дата закінчення навчання</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text border border-primary shadow text_color" id="enddate"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control border border-primary text_color" placeholder="число місяць рік" id="endday" aria-label="endday" aria-describedby="enddate" required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="editionaleducation" class="text_color">Додаткова освіта(курси) якщо така є</label>
                        <textarea class="w-100 rounded shadow" id="editionaleducation" name="editionaleducation" placeholder="Назва, тривалість, здобуті навички чи кваліфікація" rows="5" cols="49"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-12 col-md-10 col-lg-8">
                        <label for="problemDescr" class="text_color">Останнє місце роботи<br>(Дата прийому / дата звільнення / назва підприємства / посада)</label>
                        <textarea class="w-100 rounded shadow" id="lastworkplace" name="lastworkplace" placeholder="текст" rows="4" cols="49"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-12 col-md-10 col-lg-8">
                        <label for="editionalinfo" class="text_color">Додаткові відомості (за бажанням)</label>
                        <textarea class="w-100 rounded shadow" id="editionalinfo" name="editionalinfo" placeholder="текст" rows="4" cols="49" required></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" id="sendBtn" class="btn btn-lg btn-primary btn-block mx-1 mt-4 py-2 py-md-3 shadow shadow-dark text-uppercase">Подати форму</button>
                    <a href="vacancy-list.php#start-of-list" class="btn btn-lg btn-light text-uppercase my-3 mx-auto border-primary shadow text_color">&laquo; Повернутися до списку вакансій</a>
                </fieldset>
            </form>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>