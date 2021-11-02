    <!--navigation-->
    <header>
        <nav id="navbarUp" class="navbar navbar-dark navbar-expand-md fixed-top pr-2 pr-md-3 shadow">
            <div class="container">
                <!--LOGO-->
                <div class="logo mr-0 mt-md-0 d-flex justify-content-center align-items-center">
                    <a href="home.php" class="align-self-center rounded-circle border light">
                        <img src="../build/img/logo-dark.png" width="40" height="40" alt="MGOK" class="inner-logo rounded-circle">
                    </a>
                    <a href="home.php" class="align-self-center bg-dark rounded-circle border border-primary dark">
                        <img src="../build/img/logo-white.png" alt="MGOK" class="inner-logo rounded-circle">
                    </a>
                </div>
                <span
                    class="font-weight-bold ml-0 ml-md-2 ml-lg-2 ml-xl-2 d-md-none d-lg-inline-block text-logo shadow-dark"><abbr class="d-none d-sm-inline-block">АТ</abbr> "МГЗК"</span>
                <!--menu button-->
                <button class="navbar-toggler bg-primary border border-transparent" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--dropdowns-->
                <div class="collapse navbar-collapse text-center text-md-left text-lg-left" id="navbarCollapse">
                    <ul class="navbar-nav nav-pills ml-0 ml-md-auto my-0">
                        <li class="d-flex justify-content-center nav-item mt-1 position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2 shadow-dark" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false">Персонал</a>
                            <ul
                                class="dropdown-menu dropdown-content dropdown-right position-absolute p-0 border border-white bg-primary row text-center text-md-left text-lg-left width_dropdown_smallscreen">
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
                                    <a class="dropdown-item dropdown-toggle text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" type="button" 
                                    data-toggle="dropdown" role="link" aria-haspopup="true">Організація
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
                                    <a class="dropdown-item dropdown-toggle text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" type="button" 
                                       data-toggle="dropdown" role="link" aria-haspopup="true">Кадрові документи</a>
                                    <ul class="dropdown-menu bg-primary border py-0 text-center text-md-left">
                                        <li><a class="dropdown-item text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" href="HR_documents_index.php">Зразки документів</a></li>
                                    </ul>
                                <li>
                                <li class="dropdown-submenu position-relative">
                                    <a class="dropdown-item dropdown-toggle text-white pl-md-1 px-md-1 px-lg-1 px-xl-2" type="button" 
                                    data-toggle="dropdown" role="link" aria-haspopup="true">Інформація профспілки</a>
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
                            <a class="text-uppercase nav-link dropdown-toggle py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2 text-white shadow-dark"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false">Виробництво</a>
                            <ul
                                class="dropdown-menu position-absolute dropdown-content p-0 border border-white bg-primary row text-center text-md-left text-lg-left width_dropdown_smallscreen">
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="diagrams.php">Плани виробництва та Виробничі показники</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="#">Підсумки роботи
                                    бригад</a></li>
                            </ul>
                        </li>
                        <li class="d-flex justify-content-center nav-item mt-1 position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2" id="navbarDropdownSocial"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false">Соціальна сфера</a>
                            <ul
                                class="dropdown-menu dropdown-content dropdown-right position-absolute p-0 border border-white bg-primary row text-center text-md-left text-lg-left rounded width_dropdown_smallscreen">
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="rest-vacations.php">Оздоровлення</a></li>
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2 rounded" href="sanatorium.php">Санаторій-профілакторій</a></li>
                            </ul>
                        </li>
                        <li class="d-flex justify-content-center nav-item mt-1 position-relative">
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 px-md-1 px-lg-1 px-xl-2 shadow-dark"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false">Інфо</a>
                            <ul
                                class="dropdown-menu position-absolute dropdown-menu-md-right dropdown-content p-0 border border-white bg-primary row text-center text-md-right text-lg-right width_dropdown_smallscreen">
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
                            <a class="text-uppercase nav-link dropdown-toggle text-white py-3 py-md-1 py-lg-1 pl-md-1 pr-md-1 pl-lg-1 pr-lg-1 pl-xl-2 pr-xl-2 shadow-dark"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false">Гаряча лінія</a>
                            <ul
                                class="dropdown-menu dropdown-menu-md-right dropdown-content position-absolute p-0 border border-white bg-primary row text-center text-md-right text-lg-right width_dropdown_smallscreen">
                                <li><a class="dropdown-item text-white px-md-1 px-lg-1 px-xl-2" href="#">Повідомити про
                                    порушення</a></li>
                            </ul>
                        </li>
                        <!-- for collapsed-menu -->
                        <li class="nav-item d-md-none pt-3 px-md-0 pr-lg-0 pl-lg-1">
                            <a href="salary-list.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Персональний кабінет"
                                class="nav-link bg-transparent text-white pr-md-0 pr-lg-0 pb-md-0 py-md-0"><i
                                    class="fas fa-user-circle fa-2x" aria-hidden="true"></i></a>   
                        </li>
                        <li class="nav-item d-flex flex-row justify-content-around d-md-none pt-3 px-md-0 pr-lg-0 pl-lg-1">
                            <a href="#"
                                class="nav-link bg-transparent text-white pr-md-0 pr-lg-0 pr-xl-2 pb-md-0 py-2 py-md-0"><i
                                    class="far fa-calendar-alt fa-2x" aria-hidden="true"></i></a>
                            <a href="phones-list.php"
                                class="nav-link bg-transparent text-white pr-lg-0 pr-md-0 pr-xl-2 pb-md-0 py-md-0"><i
                                    class="fas fa-phone-square fa-2x" aria-hidden="true"></i></a>
                        </li>
                        <!-- for large menu -->
                        <li class="nav-item d-none d-md-inline-block align-self-end">
                            <ul class="d-flex flex-row justify-content-center align-items-center pl-1 pr-0 mx-0">
                                <li class="list-unstyled">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Календар подій"
                                        class="bg-transparent text-white px-1 pr-lg-2 pr-xl-3 py-md-0"><i
                                            class="far fa-calendar-alt fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-unstyled nav_link">
                                    <a href="phones-list.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Телефонний довідник"
                                        class="bg-transparent text-white px-1 pr-lg-2 pr-xl-3 py-md-0"><i
                                            class="fas fa-phone-square fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-unstyled nav_link">
                                    <a href="salary-list.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Персональний кабінет"
                                        class="bg-transparent text-white pl-1 pr-0 pb-md-0"><i
                                            class="fas fa-user-circle fa-2x" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>