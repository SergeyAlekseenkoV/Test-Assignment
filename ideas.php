<?php include_once "header.php"; ?>
<title>Портал-База ідей</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">База ідей</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0 fadeInAnimation" data-fadeinanimation>
                    <div id="ideas-storage" class="row mx-0 border border-primary rounded bg_muted">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2 class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 mt-1 mb-0 text-white bg_headers">
                                Загальна база ідей</h2>
                        </div>
                        <!-- tabs -->
                        <div class="col-12 mx-0 px-1 mt-2">
                            <!-- tabs navigation -->
                            <ul class="nav nav-pills nav-fill nav-justified" id="ideasTab" role="tablist">
                                <li class="nav-item rounded" role="presentation">
                                    <a class="nav-link active my-0 p-1 py-md-0 px-md-2 font-weight-bold text_color" id="passed-tab" 
                                        data-toggle="pill" href="#passed" role="tab" aria-controls="passed" aria-selected="true">Подані<br class="d-sm-none">
                                        пропозиції &nbsp;&nbsp;<span class="text-white mb-1">&raquo;</span></a>
                                </li>
                                <li class="nav-item rounded" role="presentation">
                                    <a class="nav-link my-0 p-1 py-md-0 px-md-2 font-weight-bold text_color" id="approved-tab" 
                                        data-toggle="pill" href="#approved" role="tab" aria-controls="approved" aria-selected="false">Пропозиції <br class="d-sm-none">
                                        тиражування &nbsp;&nbsp;<span class="text-white mb-1">&raquo;</span></a>
                                </li>
                            </ul>
                            <!-- end tabs navigations -->
                            <!-- tabs content blocks -->
                            <div class="tab-content px-0" id="myTabContent">
                                <div class="tab-pane fade show active" id="passed" role="tabpanel" aria-labelledby="passed-tab">
                                    <div class="mt-2 mb-0 position-relative search_bar_wrapper">
                                        <form class="search_bar position-relative">
                                            <input type="text" name="search" class="search_bar_input position-absolute shadow" 
                                                maxlength="70" placeholder="Пошук" id="searchInput" aria-label="search">
                                            <button type="submit" class="btn search_bar_submit" aria-label="submit search">
                                                <i class="fas fa-search"></i></button>
                                        </form>
                                        <!-- <span class="ml-4 text_color small font-weight-bold counter">Максимальна кількість символів 70</span> -->
                                    </div>
                                    <div class="my-1 d-flex flex-wrap justify-content-between align-items-baseline">
                                        <div class="align-self-start">
                                            <span>Фільтрувати пропозиції по статусу</span>
                                            <select class="custom-select border-info text_color">
                                                <option selected="1" value="1">статус 1</option>
                                                <option value="2">статус 2</option>
                                                <option value="3">статус 3</option>
                                                <option value="4">статус 4</option>
                                            </select>
                                        </div>
                                        <div class="align-self-end bg-light border-right border-bottom rounded px-1 mt-2 shadow text_color"><small>Подані
                                                пропозиції:</small> <b>2132</b></div>
                                    </div>
                                    <div class="table table-responsive table-striped table-bordered table-hover mb-1 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg-secondary text-center">
                                                    <th scope="col" class="align-top small text-uppercase">№ ідеї</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Авторство</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Назва пропозиції</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Автор пропозиції</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Структурний підрозділ</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Посада</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Опис ідеї
                                                    </th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Статус</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="proposition-description.php">1&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор та співавтор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                        під час ремонту вагонів ВГ-1</td>
                                                    <td>Розглядається</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="proposition-description.php">2&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                        під час ремонту вагонів ВГ-1</td>
                                                    <td>Відхилено</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="proposition-description.php">3&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                        під час ремонту вагонів ВГ-1</td>
                                                    <td>Розглядається</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="proposition-description.php">4&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій
                                                        під час ремонту вагонів ВГ-1</td>
                                                    <td>Тиражування</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="approved" role="tabpanel" aria-labelledby="approved-tab">
                                    <div class="my-1 text-right">
                                        <span class="bg-light border-right border-bottom rounded px-1 shadow text_color"><small>ПропозиціЇ для тиражування: </small> <b>1233</b></span>
                                    </div>
                                    <div class="table table-responsive table-striped table-bordered table-hover mb-1 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg-secondary text-center">
                                                    <th scope="col" class="align-top small text-uppercase">№ ідеї</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Авторство</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Назва пропозиції</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Автор пропозиції</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Структурний підрозділ</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Посада</th>
                                                    <th scope="col" class="align-top small text-uppercase">
                                                        Опис ідеї
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="#">1&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор та співавтор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій під час ремонту вагонів ВГ-1</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="#">2&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій під час ремонту вагонів ВГ-1</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="#">3&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій під час ремонту вагонів ВГ-1</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="row"><a href="#">4&nbsp;&raquo;</a></th>
                                                    <td>СПП</td>
                                                    <td>Дуже дієва пропозиція з використання нових технологій</td>
                                                    <td>Деякий автор</td>
                                                    <td>шахта 14 - 15</td>
                                                    <td>Начальник дільниці ВШТ та ПВС</td>
                                                    <td>Тут буде детальний опис дуже дієвої пропозиції з використання нових технологій під час ремонту вагонів ВГ-1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.querySelector('.search_bar_input'),
                txtItemLimit = searchInput.getAttribute('maxlength'),
                formInput = document.querySelector('.search_bar');
            // let spanToCount = document.querySelector('.counter');
            /* hide span */
            // function hideSpan () {
            //     spanToCount.classList.add("d-none");
            // }
            /* hide it by default */
            // hideSpan();
            /* on focus event */
            searchInput.addEventListener('focus', () => {
                formInput.style.width = "100%";
                // showSpan();
            });
            /* close by escape key */
            document.addEventListener('keyup', (event) => {
                if(event.code === 'Escape') {
                    closeBarInput();
                    // hideSpan();
                }
            });
            /* counter for characters */
            // formInput.addEventListener('keyup', txtSetCounter);
            /* if key is pressed and repeating */
            // formInput.addEventListener('keydown', function(event) {
            //     if(event.repeat){txtSetCounter()}
            // });
            /* show the rest of characters to type */
            // function txtSetCounter() {
            //     const txtCounterResult = txtItemLimit - searchInput.value.length;
            //     spanToCount.innerHTML = `Лишилося символів ${txtCounterResult}`;
            // }
            /* show span */
            // function showSpan () {
            //     spanToCount.classList.remove("d-none");
            // }
            /* close input by changing width to default value*/
            function closeBarInput() {
                formInput.style.width = "";
                // hideSpan();
            }
            /* close input by clicking somewhere except the .tab-pane block */
            function closeBarInputOutside(event){
                if (!event.target.closest('.tab-pane')) {
                    closeBarInput();
                    // console.log(event.target);
                }
            }
            document.addEventListener('click',closeBarInputOutside);
        });
    </script>
    </body>
</html>