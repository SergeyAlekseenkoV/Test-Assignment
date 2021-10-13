<?php include_once "header.php"; ?>
<title>Розклад руху автобусів</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 pb-lg-5 best_team">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color wow slideInLeft" data-animation="slideInLeft">Розклад руху автобусів</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 mx-0 px-0">
                <?php include_once "left-nav.php"; ?>
                <!-- aside -->
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0 wow fadeInUp" data-animation="fadeInUp">
                    <div class="row mx-0 p-1 border border-primary rounded">
                        <div class="col-12 mx-0 px-0 text-center mb-1 mb-md-0">
                            <h2 class="text-uppercase px-0 py-3 mx-0 my-0 mb-md-1 text-white bg_headers">Розклад руху
                                автотранспорту</h2>
                        </div>
                        <!-- collapsed sections -->
                        <div class="col-12 px-0 text-center border border-info">
                            <div class="scheduel_bus accordion bg_bus" id="scheduelBus">
                                <!-- ================ scheduel-4 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light mx-auto bg_light_through border border-primary my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-4" role="button" aria-expanded="true" aria-controls="scheduel-4">
                                            Графік руху автобуса за маршрутом №<strong> 4</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-4" aria-labelledby="headingOne" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:50</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>5:20</td>
                                                    <td>5:30</td>
                                                    <td>14</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>6:05</td>
                                                    <td>6:10</td>
                                                    <td>17</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">10 столова</th>
                                                    <td>6:20</td>
                                                    <td>6:25</td>
                                                    <td>5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>6:55</td>
                                                    <td>6:55</td>
                                                    <td></td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>7:00</td>
                                                    <td>8:00</td>
                                                    <td>3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>8:25</td>
                                                    <td>8:30</td>
                                                    <td>9.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>9:10</td>
                                                    <td>9:15</td>
                                                    <td>17</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш.к-ра</th>
                                                    <td>9:40</td>
                                                    <td>9:45</td>
                                                    <td>14</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>10:00</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>12:50</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>13:10</td>
                                                    <td>13:15</td>
                                                    <td>14</td>
                                                    <td>через ЛТФ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>14:00</td>
                                                    <td>14:30</td>
                                                    <td>23</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>15:00</td>
                                                    <td>15:00</td>
                                                    <td>18</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш.к-ра</th>
                                                    <td>15:15</td>
                                                    <td>15:20</td>
                                                    <td>8</td>
                                                    <td>через ЛТФ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>15:45</td>
                                                    <td>15:50</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш.к-ра</th>
                                                    <td>16:15</td>
                                                    <td>16:20</td>
                                                    <td>16</td>
                                                    <td>через ЛТФ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>16:55</td>
                                                    <td>17:20</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>17:50</td>
                                                    <td>17:55</td>
                                                    <td>17</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>18:00</td>
                                                    <td>19:20</td>
                                                    <td>3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш.к-ра</th>
                                                    <td>19:25</td>
                                                    <td>19:40</td>
                                                    <td>3</td>
                                                    <td>через ЛТФ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>20:10</td>
                                                    <td>20:50</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>21:10</td>
                                                    <td>21:10</td>
                                                    <td>14</td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>21:40</td>
                                                    <td>23:25</td>
                                                    <td>18</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>23:50</td>
                                                    <td>23:50</td>
                                                    <td>18</td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>0:00</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-5 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-5" role="button" aria-expanded="false" aria-controls="scheduel-5">
                                            Графік руху автобуса за маршрутом №<strong> 5</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-5" aria-labelledby="headingTwo" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-left text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Новокиївка</th>
                                                    <td>5:10</td>
                                                    <td>5:20</td>
                                                    <td>24</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Острів</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 3/5</th>
                                                    <td>6:20</td>
                                                    <td>6:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 5</th>
                                                    <td>6:25</td>
                                                    <td>6:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 3/5</th>
                                                    <td>6:35</td>
                                                    <td>6:40</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>6:55</td>
                                                    <td>7:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>8:10</td>
                                                    <td>8:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ПНС</th>
                                                    <td>9:10</td>
                                                    <td>9:15</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>9:50</td>
                                                    <td>9:55</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>10:10</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>13:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>14:05</td>
                                                    <td>14:10</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>14:20</td>
                                                    <td>14:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>14:50</td>
                                                    <td>16:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>16:05</td>
                                                    <td>16:10</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Острiв</th>
                                                    <td>16:25</td>
                                                    <td>16:25</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Новокиївка </th>
                                                    <td>17:10</td>
                                                    <td>17:15</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>18:00</td>
                                                    <td>19:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>19:10</td>
                                                    <td>19:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ПНС</th>
                                                    <td>19:50</td>
                                                    <td>20:10</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>20:50</td>
                                                    <td>20:55</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>21:10</td>
                                                    <td>22:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>23:05</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-11 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-11" role="button" aria-expanded="false" aria-controls="scheduel-11">
                                            Графік руху автобуса за маршрутом №<strong> 11</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-11" aria-labelledby="headingThree" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>4:35</td>
                                                    <td>4:50</td>
                                                    <td>6.3</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>5:50</td>
                                                    <td>5:55</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:50</td>
                                                    <td>6:50</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>7:50</td>
                                                    <td>7:50</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>8:50</td>
                                                    <td>8:55</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>9:00</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>13:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>13:25</td>
                                                    <td>13:30</td>
                                                    <td>6.3</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>14:30</td>
                                                    <td>14:30</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>15:45</td>
                                                    <td>15:45</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>16:30</td>
                                                    <td>16:30</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>17:30</td>
                                                    <td>17:30</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>21:00</td>
                                                    <td>21:30</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>22:30</td>
                                                    <td>23:20</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>0:20</td>
                                                    <td>0:25</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>0:30</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-14 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-14" role="button" aria-expanded="false" aria-controls="scheduel-14">
                                            Графік руху автобуса за маршрутом №<strong> 14</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-14" aria-labelledby="headingFour" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>4:40</td>
                                                    <td>4:50</td>
                                                    <td>6.3</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 3-5</th>
                                                    <td>5:25</td>
                                                    <td>5:30</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Максимівка</th>
                                                    <td>5:55</td>
                                                    <td>6:00</td>
                                                    <td>19</td>
                                                    <td>через ЛТФ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>6:25</td>
                                                    <td>6:30</td>
                                                    <td>13</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:45</td>
                                                    <td>6:50</td>
                                                    <td>9.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 3-5</th>
                                                    <td>7:20</td>
                                                    <td>7:40</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>8:10</td>
                                                    <td>8:15</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>8:30</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>13:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>13:30</td>
                                                    <td>13:35</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 3-5</th>
                                                    <td>14:10</td>
                                                    <td>14:30</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>15:15</td>
                                                    <td>15:20</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 3-5</th>
                                                    <td>16:25</td>
                                                    <td>16:30</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>17:00</td>
                                                    <td>18:10</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта № 8 подст.</th>
                                                    <td>19:00</td>
                                                    <td>19:20</td>
                                                    <td>23</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>20:00</td>
                                                    <td>20:05</td>
                                                    <td>23</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>21:15</td>
                                                    <td>21:20</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>21:30</td>
                                                    <td>21:35</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 3-5</th>
                                                    <td>22:10</td>
                                                    <td>23:25</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>23:50</td>
                                                    <td>23:50</td>
                                                    <td>16</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>0:00</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-15 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-15" role="button" aria-expanded="false" aria-controls="scheduel-15">
                                            Графік руху автобуса за маршрутом №<strong> 15</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-15" aria-labelledby="headingFive" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>4:30</td>
                                                    <td>4:50</td>
                                                    <td>6.3</td>
                                                    <td>по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 8</th>
                                                    <td>5:15</td>
                                                    <td>5:30</td>
                                                    <td>19.6</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">10 столова</th>
                                                    <td>6:20</td>
                                                    <td>6:20</td>
                                                    <td>19.6</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>6:40</td>
                                                    <td>6:40</td>
                                                    <td>9.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:45</td>
                                                    <td>6:50</td>
                                                    <td>9.5</td>
                                                    <td>по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 8</th>
                                                    <td>7:30</td>
                                                    <td>7:45</td>
                                                    <td>20</td>
                                                    <td>через місто та по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>8:20</td>
                                                    <td>8:25</td>
                                                    <td>20</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>8:40</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>13:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>13:20</td>
                                                    <td>13:30</td>
                                                    <td>6.3</td>
                                                    <td>по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 8-2</th>
                                                    <td>14:10</td>
                                                    <td>14:30</td>
                                                    <td>20</td>
                                                    <td>через місто та по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>15:15</td>
                                                    <td>15:20</td>
                                                    <td>19.6</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 8</th>
                                                    <td>15:50</td>
                                                    <td>16:20</td>
                                                    <td>19.6</td>
                                                    <td>по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>16:50</td>
                                                    <td>16:50</td>
                                                    <td>20</td>
                                                    <td>через місто та по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>17:05</td>
                                                    <td>17:10</td>
                                                    <td>9.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>17:40</td>
                                                    <td>17:45</td>
                                                    <td>17</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>18:15</td>
                                                    <td>21:10</td>
                                                    <td>14</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>21:20</td>
                                                    <td>21:30</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 8</th>
                                                    <td>22:10</td>
                                                    <td>23:25</td>
                                                    <td>19.6</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>23:50</td>
                                                    <td>23:50</td>
                                                    <td>20</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>0:00</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-16 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-16" role="button" aria-expanded="false" aria-controls="scheduel-16">
                                            Графік руху автобуса за маршрутом №<strong> 16</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-16" aria-labelledby="headingSix" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>5:20</td>
                                                    <td>5:30</td>
                                                    <td></td>
                                                    <td>по вул. Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>6:00</td>
                                                    <td>6:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:20</td>
                                                    <td>6:25</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ПМВВР</th>
                                                    <td>6:50</td>
                                                    <td>6:55</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>7:05</td>
                                                    <td>7:10</td>
                                                    <td></td>
                                                    <td>ч/з АТП,Куйбишева,АБК-1</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" class="text-left">АБК-1</th>
                                                    <td>7:30</td>
                                                    <td>7:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>7:55</td>
                                                    <td>8:30</td>
                                                    <td></td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>8:50</td>
                                                    <td>8:55</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>9:10</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>обід з 10:00 до 11:00</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-17 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-17" role="button" aria-expanded="false" aria-controls="scheduel-17">
                                            Графік руху автобуса за маршрутом №<strong> 17</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-17" aria-labelledby="headingSeven" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>5:20</td>
                                                    <td>5:30</td>
                                                    <td></td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш.к-ра </th>
                                                    <td>6:00</td>
                                                    <td>6:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:20</td>
                                                    <td>6:25</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>6:55</td>
                                                    <td>7:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>8:00</td>
                                                    <td>8:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>8:20</td>
                                                    <td>13:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>обід з 10:00 до 11:00</strong></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>13:05</td>
                                                    <td>15:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>15:30</td>
                                                    <td>15:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>15:50</td>
                                                    <td>15:55</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>16:10</td>
                                                    <td>16:10</td>
                                                    <td></td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>16:35</td>
                                                    <td>16:40</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш. к-ра</th>
                                                    <td>16:50</td>
                                                    <td>16:50</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Червоногригорівка</th>
                                                    <td>17:30</td>
                                                    <td>17:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>18:10</td>
                                                    <td>18:15</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>18:20</td>
                                                    <td>19:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш. к-ра</th>
                                                    <td>19:40</td>
                                                    <td>19:40</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Червоногригорівка</th>
                                                    <td>20:20</td>
                                                    <td>20:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>21:05</td>
                                                    <td>21:10</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>21:20</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-19 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-19" role="button" aria-expanded="false" aria-controls="scheduel-19">
                                            Графік руху автобуса за маршрутом №<strong> 19</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-19" aria-labelledby="headingEight" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>6:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:10</td>
                                                    <td>6:10</td>
                                                    <td></td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>6:30</td>
                                                    <td>6:35</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:45</td>
                                                    <td>6:50</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>7:25</td>
                                                    <td>7:30</td>
                                                    <td></td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:15</td>
                                                    <td>6:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>8:35</td>
                                                    <td>13:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>13:30</td>
                                                    <td>13:35</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>14:15</td>
                                                    <td>14:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>15:10</td>
                                                    <td>15:10</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>15:30</td>
                                                    <td>15:30</td>
                                                    <td></td>
                                                    <td>мале коло ч/з Ворошиловку</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">УКК</th>
                                                    <td>15:50</td>
                                                    <td>15:50</td>
                                                    <td></td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>16:25</td>
                                                    <td>16:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>17:10</td>
                                                    <td>17:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>17:50</td>
                                                    <td>17:55</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>18:00</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>обід з 10:00 до 11:00</strong></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>18:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>18:05</td>
                                                    <td>18:10</td>
                                                    <td></td>
                                                    <td>через місто та по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>18:40</td>
                                                    <td>18:45</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>19:00</td>
                                                    <td>21:15</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>21:30</td>
                                                    <td>21:35</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>22:15</td>
                                                    <td>23:40</td>
                                                    <td></td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>0:10</td>
                                                    <td>0:10</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">АБК Груш. к-ра</th>
                                                    <td>0:25</td>
                                                    <td>0:30</td>
                                                    <td></td>
                                                    <td>ч/з АТП</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Червоногригорівка</th>
                                                    <td>1:10</td>
                                                    <td>1:15</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>1:55</td>
                                                    <td>3:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Червоногригорівка</th>
                                                    <td>4:05</td>
                                                    <td>4:10</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>4:45</td>
                                                    <td>4:50</td>
                                                    <td></td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>5:25</td>
                                                    <td>5:30</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>5:50</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>обід с 1:55-2:55</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-29 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-29" role="button" aria-expanded="false" aria-controls="scheduel-29">
                                            Графік руху автобуса за маршрутом №<strong> 29</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-29" aria-labelledby="headingNine" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>6:00</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:05</td>
                                                    <td>6:25</td>
                                                    <td>6.3</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>6:55</td>
                                                    <td>8:30</td>
                                                    <td>19</td>
                                                    <td>через місто та по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>9:00</td>
                                                    <td>9:05</td>
                                                    <td>19</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>9:20</td>
                                                    <td>13:00</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"><i>Збір водіїв</i></th>
                                                    <td>12:40</td>
                                                    <td>12:50</td>
                                                    <td>16</td>
                                                    <td>через місто та по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>13:05</td>
                                                    <td>13:30</td>
                                                    <td>6.3</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>14:20</td>
                                                    <td>14:25</td>
                                                    <td>19</td>
                                                    <td>через ЛТФ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>14:30</td>
                                                    <td>14:40</td>
                                                    <td>3.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>15:20</td>
                                                    <td>15:25</td>
                                                    <td>26.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>16:15</td>
                                                    <td>16:30</td>
                                                    <td>23</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>17:10</td>
                                                    <td>17:30</td>
                                                    <td>19</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>17:50</td>
                                                    <td>17:55</td>
                                                    <td>10</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>18:00</td>
                                                    <td></td>
                                                    <td>3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>обід з 11:00 до 12:00</strong></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>18:00</td>
                                                    <td>20:45</td>
                                                    <td></td>
                                                    <td>Автоцех, стоянка</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>21:00</td>
                                                    <td>21:35</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>21:50</td>
                                                    <td>23:25</td>
                                                    <td>19</td>
                                                    <td>через місто</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>23:50</td>
                                                    <td>23:50</td>
                                                    <td>19</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">ЭМЛ</th>
                                                    <td>0:15</td>
                                                    <td>0:30</td>
                                                    <td>9.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>1:15</td>
                                                    <td>1:20</td>
                                                    <td>17</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>1:45</td>
                                                    <td>3:30</td>
                                                    <td>14</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"><i>Збір водіїв</i></th>
                                                    <td>3:45</td>
                                                    <td>3:45</td>
                                                    <td></td>
                                                    <td>по вул.Куйбишева-Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>4:15</td>
                                                    <td>4:15</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Городище</th>
                                                    <td>4:30</td>
                                                    <td>4:30</td>
                                                    <td>14</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 9-10</th>
                                                    <td>5:25</td>
                                                    <td>5:30</td>
                                                    <td>23</td>
                                                    <td>ч/з ЛТФ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>5:50</td>
                                                    <td>6:00</td>
                                                    <td>9</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>перерва 1:55-2:55</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ================ scheduel-32 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <button class="btn btn-link btn-collapse d-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#scheduel-32" role="button" aria-expanded="false" aria-controls="scheduel-32">
                                            Графік руху автобуса за маршрутом №<strong> 32</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="scheduel-32" aria-labelledby="headingTen" data-parent="#scheduelBus" class="table table-responsive collapse table-striped table-bordered table-hover mb-0 border-primary">
                                        <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                            <thead>
                                                <tr class="bg_linear_dark text-center text-white">
                                                    <th scope="col" class="align-top">
                                                        Маршрут</th>
                                                    <th scope="col" class="align-top">
                                                        Прибуття,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відправлення,<br>годин</th>
                                                    <th scope="col" class="align-top">
                                                        Відстань,<br>км</th>
                                                    <th scope="col" class="align-top">
                                                        Примітка</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;1-ша
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>4:20</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>4:40</td>
                                                    <td>4:50</td>
                                                    <td>6.3</td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>5:50</td>
                                                    <td>5:50</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Підстанція</th>
                                                    <td>9:00</td>
                                                    <td>9:05</td>
                                                    <td>19</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>6:00</td>
                                                    <td>6:05</td>
                                                    <td>3.5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>6:50</td>
                                                    <td>6:50</td>
                                                    <td>25</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>7:50</td>
                                                    <td>7:50</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>8:50</td>
                                                    <td>8:50</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>9:00</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="border">
                                                    <th scope="row" class="bg-dark text-white"><strong>&nbsp;2-га
                                                            зміна</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td></td>
                                                    <td>13:05</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>13:00</td>
                                                    <td>13:45</td>
                                                    <td>6.3</td>
                                                    <td>по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>14:30</td>
                                                    <td>14:30</td>
                                                    <td>22</td>
                                                    <td>через Ворошиловку</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>15:45</td>
                                                    <td>15:45</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>16:45</td>
                                                    <td>16:50</td>
                                                    <td>22</td>
                                                    <td>через місто та по вул.Лермонтова</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>17:50</td>
                                                    <td>18:10</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Підстанція</th>
                                                    <td>19:10</td>
                                                    <td>19:10</td>
                                                    <td>25</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>20:10</td>
                                                    <td>20:15</td>
                                                    <td>25</td>
                                                    <td>по вул.Лермонтова (чекати на электричку)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>20:30</td>
                                                    <td>21:15</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>21:30</td>
                                                    <td>21:35</td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Шахта 14-15</th>
                                                    <td>22:35</td>
                                                    <td>23:20</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Вокзал</th>
                                                    <td>0:20</td>
                                                    <td>0:20</td>
                                                    <td>22</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left">Автоцех</th>
                                                    <td>0:30</td>
                                                    <td></td>
                                                    <td>6.3</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end cards -->
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>