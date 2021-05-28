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
        <nav aria-label="breadcrumb"
                class="d-flex justify-content-between align-items-baseline mt-5 mb-3"> 
                <h3 class="d-md-none pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Розрахунковий лист</h3>
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Розрахунковий лист</li>
                </ol>
                <a href="index.php" class="align-self-baseline btn btn-small btn-dark text-white shadow border mt-3 mt-md-0"
                    role="button">Вийти</a>
            </nav>
            <!-- user-data -->
            <div class="row py-0 pl-0 mt-0 mb-1">
                <div class="col-12">
                    <div class="row text_color mx-0 my-0 pt-3 pb-0 pb-lg-3">
                        <div class="col-8 px-0">
                            <h4 class="mb-2 font-weight-bold">Петров Іван Перебий-ніс</h4>
                            <p class="lead mb-0">Цех автоматизованих систем управління</p>
                            <p class="lead mb-0">Інженер-програміст</p>
                        </div>
                        <div class="col-4 px-0 text-right">
                            <p class="lead mb-0">Таб.№: <span class="font-weight-bold">17847</span></p>
                            <p class="lead mb-0">Оклад: <span class="font-weight-bold">17847</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="col-sm-12 col-lg-10 px-0 pl-md-0 pl-lg-2 pl-xl-3 py-0 pr-lg-0">
                    <aside class="mt-2 mt-lg-0 shadow">
                        <div class="table table-responsive mb-0">
                            <table class="table table-bordered bg-light mb-0 text_color">
                                <caption class="bg-primary text-white p-2 border">
                                    Розрахунковий лист за <span
                                        class="bg-dark p-1 text-white mr-2"><b>Червень</b></span><span
                                        class="bg-dark p-1 text-white"><b>2021</b></span></caption>
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th scope="col" class="px-2 py-1">Вид</th>
                                        <th scope="col" class="px-2 py-1">Період</th>
                                        <th scope="col" colspan="2" class="px-2 py-1">Відпрацьовано</th>
                                        <th scope="col" colspan="2" class="px-2 py-1">Cплачено</th>
                                        <th scope="col" class="px-2 py-1">Сума</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- adding splitted decription to header's columns -->
                                    <tr>
                                        <th scope="row" class="px-2 py-1"></th>
                                        <td class="px-2 py-1"></td>
                                        <td class="px-2 py-1 small text-center">Дні</td>
                                        <td class="px-2 py-1 small text-center">Години</td>
                                        <td class="px-2 py-1 small text-center">Дні</td>
                                        <td class="px-2 py-1 small text-center">Години</td>
                                        <td class="px-2 py-1 text-right small">грн</td>
                                    </tr>
                                    <!-- end -->
                                    <!-- salary profit -->
                                    <tr>
                                        <th scope="row" colspan="7" class="font-weight-bold px-2 py-1">1. Нараховано
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">Премія за виконнання плану
                                        </th>
                                        <td colspan="5" class="px-2 py-1"></td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">Доплата за інтенсивність
                                            праці</th>
                                        <td class="px-2 py-1 text-center"></td>
                                        <td class="px-2 py-1 text-center">дн.</td>
                                        <td class="px-2 py-1 text-center">год.</td>
                                        <td class="px-2 py-1 text-center">дн.</td>
                                        <td class="px-2 py-1 text-center">год.</td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">Почасово-преміальна за
                                            окладом</th>
                                        <td></td>
                                        <td class="px-2 py-1 text-center">дн.</td>
                                        <td class="px-2 py-1 text-center">год.</td>
                                        <td class="px-2 py-1 text-center">дн.</td>
                                        <td class="px-2 py-1 text-center">год.</td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">Доп. за навчання нової
                                            професії</th>
                                        <td class="px-2 py-1 text-center"></td>
                                        <td class="px-2 py-1 text-center">дн.</td>
                                        <td class="px-2 py-1 text-center">год.</td>
                                        <td class="px-2 py-1 text-center">дн.</td>
                                        <td class="px-2 py-1 text-center">год.</td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="6" class="font-italic px-2 py-1">Усього нараховано</th>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="6" class="font-italic px-2 py-1">Борг за працівником на
                                            початок місяця</th>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <!-- end of profit -->
                                    <!-- salary tax -->
                                    <tr>
                                        <th scope="row" colspan="7" class="font-weight-bold px-2 py-1">2. Утримано</th>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">Проф.взноси 1%</th>
                                        <td colspan="5" class="px-2 py-1"></td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">Лікарняна каса</th>
                                        <td colspan="5" class="px-2 py-1"></td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">НДФЛ</th>
                                        <td colspan="5" class="px-2 py-1"></td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="font-weight-normal px-2 py-1">Військовий збір</th>
                                        <td colspan="5" class="px-2 py-1"></td>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="6" class="font-italic px-2 py-1">Усього утримано</th>
                                        <td class="px-2 py-1 text-right">грн</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="6" class="font-italic px-2 py-1">Борг за підприємством
                                            на кінець місяця</th>
                                        <td class="px-2 py-1 text-right">грн</td>
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