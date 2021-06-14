<?php
// Initialize the session
session_start();


// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: index.php");
//     exit;
// }

?>

<?php include_once "header.php";?>

<title>Розрахунковий лист</title>
</head>

<body id="home">
    <?php include_once "user-menu.php"; ?>
    <section id="personalRoom" class="pt-3 pb-5">
        <!--content-->
        <div class="container py-3 py-lg-4 pb-lg-3 px-sm-0 px-md-3">
            <nav aria-label="breadcrumb" class="d-flex justify-content-between align-items-baseline mt-5 mb-3">
                <h3 class="d-md-none pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Розрахунковий лист</h3>
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Розрахунковий лист</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Мої дані</li>
                </ol>
                <a href="index.php"
                    class="align-self-baseline btn btn-small btn-dark text-white shadow border mt-3 mt-md-0"
                    role="button">Вийти</a>
            </nav>
            <!-- nav article -->
            <div class="row py-2 mx-0">
                <article class="col-sm-12 col-lg-2 px-0 py-0 mb-1">
                    <form class="sticky-top rounded needs-validation bg-dark p-3 text-center" novalidate="">
                        <p class="font-weight-bold mb-0">Зформувати лист</p>
                        <div class="form-row">
                            <div class="col-12 col-sm-6 col-lg-12">
                                <label for="validationTooltipMonth" class="m-0"></label>
                                <select class="custom-select text_color" id="validationTooltipMonth" required="">
                                    <option selected="" disabled="" value="">Місяць...</option>
                                    <option>Січень</option>
                                    <option>Лютий</option>
                                    <option>Березень</option>
                                    <option>Квітень</option>
                                    <option>Травень</option>
                                    <option>Червень</option>
                                    <option>Липень</option>
                                    <option>Серпень</option>
                                    <option>Вересень</option>
                                    <option>Жовтень</option>
                                    <option>Листопад</option>
                                    <option>Грудень</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Оберіть місяць!
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-12">
                                <label for="validationTooltipYear" class="m-0"></label>
                                <select class="custom-select text_color" id="validationTooltipYear" required="">
                                    <option selected="1" value="1">2021</option>
                                    <option value="2">2020</option>
                                    <option value="3">2019</option>
                                    <option value="4">2018</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Оберіть Рік!
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4 mb-3 btn_responsive" type="submit">Застосувати</button>
                    </form>
                </article>
                <!-- main content -->
                <div class="col-sm-12 col-lg-10 px-0 pl-md-0 pl-lg-1 py-0 pr-lg-0">
                    <aside class="mt-2 mt-lg-0 shadow">
                        <div class="table table-responsive mb-0 border-primary rounded text_color">
                            <!-- <div class="d-flex justify-content-center align-items-center bg-info" style="height: 44vh;">
                                <h2 class="text-center p-3 text_color">
                                    Нажаль дані за обраний період тимчасово недоступні. Спробуйте пізніше.
                                </h2>
                            </div> -->
                            <!-- add or remove d-flex class (display:none; by default in style.css -->
                            <div class="d-none justify-content-center align-items-center load">
                                <div>
                                    <div class="preload"></div>
                                </div>
                            </div>
                            <table class="table-striped">
                                <tbody>
                                    <tr>
                                        <td>Розрахунковий листок за Апрель 2021</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Організація: АТ "Марганецький ГЗК"</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>ПЕТРУК НАДІЯ ОЛЕКСІЇВНА</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Господарський цех</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Машиніст крана (кранівник) 5-го розряду</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Табельний номер: 3527</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Код за ДРФО: 2412414603</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Вид</td>
                                        <td></td>
                                        <td>Період</td>
                                        <td></td>
                                        <td>Відпрацьовано</td>
                                        <td></td>
                                        <td>Оплачено</td>
                                        <td></td>
                                        <td>Сума</td>
                                        <td></td>
                                        <td>Вид</td>
                                        <td></td>
                                        <td></td>
                                        <td>Період</td>
                                        <td></td>
                                        <td></td>
                                        <td>Сума</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Дні</td>
                                        <td>Години</td>
                                        <td>Дні</td>
                                        <td>Години</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1.Нараховано</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>2. Утримано</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Премия за выполнение плана рабочим</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>122 429,44</td>
                                        <td></td>
                                        <td>Удерж. за питание работников</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>370,20</td>
                                    </tr>
                                    <tr>
                                        <td>Доплата за интенсивность труда</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>175</td>
                                        <td>188,96</td>
                                        <td></td>
                                        <td>Подписные издания</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>53,40</td>
                                    </tr>
                                    <tr>
                                        <td>Повременно-премиальная по ЧТС</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>22</td>
                                        <td>175</td>
                                        <td></td>
                                        <td>175</td>
                                        <td>5 398,75</td>
                                        <td></td>
                                        <td>Утримання за проживання в гуртожитку</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1 769,80</td>
                                    </tr>
                                    <tr>
                                        <td>Выслуга лет</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>854,56</td>
                                        <td></td>
                                        <td>Взносы в больничную кассу</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>128,00</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Утримання за вик. листом відсотком до межі</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1 428,34</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Проф,взносы 1%</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>88,72</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>НДФЛ</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1 596,91</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Военный сбор</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>133,08</td>
                                    </tr>
                                    <tr>
                                        <td>Всього нараховано</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>8 871,71</td>
                                        <td></td>
                                        <td>Всього утримано</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>5 568,45</td>
                                    </tr>
                                    <tr>
                                        <td>3. Доходи в натуральній формі</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>4. Виплачено</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Чергова виплата з погашенням боргів</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1 898,20</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Аванс (за попереднім розрахунком)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1 721,19</td>
                                    </tr>
                                    <tr>
                                        <td>Всього натуральних доходів</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Всього виплат</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>3 619,39</td>
                                    </tr>
                                    <tr>
                                        <td>Борг за підприємством на початок місяця</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1 898,20</td>
                                        <td></td>
                                        <td>Борг за підприємством на кінець місяця</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1 582,07</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>

</html>