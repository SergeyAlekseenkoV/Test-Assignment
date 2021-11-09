<?php include_once "header.php"; ?>
<title>Маршрут руху автобусів</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 pb-lg-5 best_team">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color wow slideInLeft" data-animation="slideInLeft">Маршрут руху автобусів</h3>
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
                            <h2 class="text-uppercase px-0 py-3 mx-0 my-0 mb-md-1 text-white bg_headers">Маршрут руху
                                автотранспорту</h2>
                        </div>
                        <!-- collapsed sections -->
                        <div class="col-12 px-0 text-center border border-info">
                            <div class="route_bus accordion bg_bus" id="routeBus">
                                <!-- ================ route-4 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" 
                                            data-toggle="collapse" data-target="#route-4" role="button" aria-expanded="true">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 4</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-4" aria-labelledby="headingOne" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route4" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 text_color little-filter-effect" 
                                            data-toggle="collapse" data-target="#route4b" role="button" aria-expanded="false" aria-controls="route4b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route4b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=1UnWZgW5S1Ew0WJIoZSsaGhabaLUvSmZN&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 4</th>
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
                                </div>
                                <!-- ================ route-11 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" 
                                            data-toggle="collapse" data-target="#route-11" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 11</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-11" aria-labelledby="headingThree" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route11" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 text_color little-filter-effect" 
                                            data-toggle="collapse" data-target="#route11b" role="button" aria-expanded="false" aria-controls="route11b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route11b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=1bYLdPu1plqSwRSDUv74ZSe0GURt3hH-T&&z=12" width="100%" height="485"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 11</th>
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
                                </div>
                                <!-- ================ route-14 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#route-14" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом &nbsp;<strong>№ 14</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-14" aria-labelledby="headingFour" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route14" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 height-40 text_color little-filter-effect" data-toggle="collapse" data-target="#route14b" role="button" aria-expanded="false" aria-controls="route14b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route14b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=1vXSHfw9u6fzjBfixqXPWC7zOAnzg83lO&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 14</th>
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
                                                        <td></td>
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
                                </div>
                                <!-- ================ route-15 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#route-15" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 15</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-15" aria-labelledby="headingFive" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route15" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 height-40 text_color little-filter-effect" data-toggle="collapse" data-target="#route15b" role="button" aria-expanded="false" aria-controls="route15b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route15b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=1ePxbrdKocG2etfzP0wTmUn3syHRkcS16&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 15</th>
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
                                </div>
                                <!-- ================ route-16 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#route-16" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 16</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-16" aria-labelledby="headingSix" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route16" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 height-40 text_color little-filter-effect" data-toggle="collapse" data-target="#route16b" role="button" aria-expanded="false" aria-controls="route16b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route16b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=13ci4tARhKg_mwUxeyleSYibHsZ2Zwu1R&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 16</th>
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
                                </div>
                                <!-- ================ route-17 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#route-17" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 17</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-17" aria-labelledby="headingSeven" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route17" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 height-40 text_color little-filter-effect" data-toggle="collapse" data-target="#route17b" role="button" aria-expanded="false" aria-controls="route17b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route17b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=11xVYgAR4CyfyGgKzfCG9Nc6IRp9cz9vB&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 17</th>
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
                                </div>
                                <!-- ================ route-19 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#route-19" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 19</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-19" aria-labelledby="headingEight" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route19" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 height-40 text_color little-filter-effect" data-toggle="collapse" data-target="#route19b" role="button" aria-expanded="false" aria-controls="route19b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route19b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=1hWxJurhlswxdKMVXmNtYxSPUup9HvLRl&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 19</th>
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
                                </div>
                                <!-- ================ route-29 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#route-29" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 29</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-29" aria-labelledby="headingNine" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route29" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 height-40 text_color little-filter-effect" data-toggle="collapse" data-target="#route29b" role="button" aria-expanded="false" aria-controls="route29b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route29b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=15hEI5ocf8iOqHQlHe4AiaBd-iLDEcDK-&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 29</th>
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
                                </div>
                                <!-- ================ route-32 ================ -->
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <button class="btn btn-link btn-collapse d-md-flex justify-content-center align-items-center shadow-light bg_light_through border border-primary mx-auto my-2 text-uppercase text_color little-filter-effect" data-toggle="collapse" data-target="#route-32" role="button" aria-expanded="false">
                                            Схема та розклад руху автобуса за маршрутом&nbsp;<strong>№ 32</strong>&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                    </div>
                                    <div id="route-32" aria-labelledby="headingTen" data-parent="#routeBus" class="card-body p-0 collapse">
                                        <button id="route32" class="btn-collapse d-flex justify-content-around shadow-light align-items-center btn bg_light_through border border-primary m-2 p-1 height-40 text_color little-filter-effect" data-toggle="collapse" data-target="#route32b" role="button" aria-expanded="false" aria-controls="route32b">
                                            Дивитись схему маршруту на карті&nbsp;
                                            <i class="fas fa-chevron-right ml-2"></i></button>
                                        <!-- ========= collapse block ========= -->
                                        <div id="route32b" class="collapse w-100 px-0">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=1AS597GeRKzMT8Rku0zL5LhvK0ksUTA2-&&z=12" width="100%" height="480"></iframe>
                                        </div>
                                        <!-- ========= end block ========= -->
                                        <!-- ========= table block ======== -->
                                        <div class="table table-responsive table-striped table-bordered table-hover mb-0 border-primary">
                                            <table class="table table-light table-striped table-sm mb-0 border border-primary text_color">
                                                <thead>
                                                    <tr class="bg_linear_dark text-center text-white">
                                                        <th scope="col" class="align-top">
                                                            Маршрут 32</th>
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
                                </div>
                                <!-- ================ route-end ================ -->
                            </div>
                        </div>
                        <!-- collapsed sections end-->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>