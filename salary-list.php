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
        <!--nav-block-->
        <div class="container py-3 py-lg-3 pb-lg-3 px-sm-0 px-md-3 mt-1 mt-md-0">
            <nav aria-label="breadcrumb" class="d-flex justify-content-between align-items-baseline mt-5 mb-2">
                <h3 class="d-md-none pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Розрахунковий лист</h3>
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Розрахунковий лист</li>
                </ol>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-1 mt-md-2 mt-xl-3 p-1 text-uppercase font-weight-bold border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </nav>
            <!-- nav article -->
            <div class="row py-2 mx-0">
                <article class="col-sm-12 col-lg-2 px-0 py-0 mb-1">
                    <form class="sticky-top rounded needs-validation bg-dark p-3 text-center" novalidate="">
                        <p class="font-weight-bold mb-0 text-uppercase text-white">Сформувати лист</p>
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
                    <aside class="mt-2 mt-lg-0 position-relative shadow">
                        <a href="#" role="button" 
                           class="position-absolute d-none d-sm-block"
                            data-toggle="modal" data-target="#tableLg">
                            <span data-toggle="tooltip" data-placement="bottom" 
                                  data-original-title="Збільшити">
                                  <i class="fa fa-search fa-2x"></i>
                            </span>
                        </a>
                        <div class="table table-responsive mb-0 border-primary rounded text_color">
                            <!-- <div class="d-flex justify-content-center align-items-center bg-info" style="height: 44vh;">
                                <h2 class="text-center p-3 text_color">
                                    Нажаль дані за обраний період тимчасово недоступні. Спробуйте пізніше.
                                </h2>
                            </div> -->
                            <!-- add or remove d-flex class (display:none; by default in style.css -->
                            <div class="justify-content-center align-items-center" id="divloader">
                                <div class="align-self-center">
                                    <div class="preload"></div>
                                </div>
                            </div>
                            <table class="table-striped table-hover table-bordered">
                                <tbody id="tableMainBody">
                                    <TR>
                                        <TD CLASS="R14C0" COLSPAN=16><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Розрахунковий&nbsp;листок&nbsp;за&nbsp;Май&nbsp;2021</SPAN>
                                        </TD>
                                        <TD CLASS="R14C16">
                                            <DIV STYLE="position:relative; height:31px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:31px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:31px;overflow:hidden;"></DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R15C0" COLSPAN=9>Організація: АТ "Марганецький ГЗК"</TD>
                                        <TD CLASS="R15C9" COLSPAN=7><SPAN></SPAN></TD>
                                        <TD CLASS="R15C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R16>
                                        <TD CLASS="R16C0" COLSPAN=8 ROWSPAN=4>ГОРОДОВА НАТАЛІЯ МИКОЛАЇВНА</TD>
                                        <TD CLASS="R16C8" ROWSPAN=4>
                                            <DIV STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R16C9" COLSPAN=7 ROWSPAN=2>Господарський цех</TD>
                                        <TD CLASS="R16C16">
                                            <DIV STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:24px;overflow:hidden;"></DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R16>
                                        <TD CLASS="R16C16">
                                            <DIV STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:24px;overflow:hidden;">&nbsp;</DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R15C0" COLSPAN=7 ROWSPAN=2>Старший комірник</TD>
                                        <TD CLASS="R15C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R15C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD>&nbsp;</TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R15C9" COLSPAN=9><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Табельний&nbsp;номер:&nbsp;441&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</SPAN>
                                        </TD>
                                        <TD CLASS="R15C9" COLSPAN=7>
                                            <DIV STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R15C16">
                                            <DIV STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:15px;overflow:hidden;"></DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R21>
                                        <TD CLASS="R21C0" COLSPAN=9><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Код&nbsp;за&nbsp;ДРФО:&nbsp;2794204402</SPAN>
                                        </TD>
                                        <TD CLASS="R21C9">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R21C9">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R21C9">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R21C9">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R21C9">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R21C9">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R21C15">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R21C9">
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:14px;overflow:hidden;"></DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R22>
                                        <TD CLASS="R22C0" COLSPAN=16>
                                            <DIV STYLE="position:relative; height:8px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R22C16">
                                            <DIV STYLE="position:relative; height:8px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:8px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:8px;overflow:hidden;">&nbsp;</DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R23C0" ROWSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Вид</SPAN></TD>
                                        <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Період</SPAN></TD>
                                        <TD CLASS="R23C0" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Відпрацьовано</SPAN></TD>
                                        <TD CLASS="R23C0" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Оплачено</SPAN></TD>
                                        <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Сума</SPAN></TD>
                                        <TD CLASS="R23C0" COLSPAN=3 ROWSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Вид</SPAN></TD>
                                        <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Період</SPAN></TD>
                                        <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Сума</SPAN></TD>
                                        <TD CLASS="R23C16">
                                            <DIV STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:15px;overflow:hidden;"></DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R24C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">Дні</SPAN>
                                        </TD>
                                        <TD CLASS="R24C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">Години</SPAN>
                                        </TD>
                                        <TD CLASS="R24C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">Дні</SPAN>
                                        </TD>
                                        <TD CLASS="R24C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">Години</SPAN>
                                        </TD>
                                        <TD CLASS="R23C16">
                                            <DIV STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:15px;overflow:hidden;"></DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R25C0" COLSPAN=9><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">1.Нараховано</SPAN></TD>
                                        <TD CLASS="R25C0" COLSPAN=7><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">2.&nbsp;Утримано</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R26C0">Выслуга лет</TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">122622,50</SPAN></TD>
                                        <TD CLASS="R26C9" COLSPAN=3>Проф,взносы 1%</TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">76,06</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R16>
                                        <TD CLASS="R28C0">Премия за выполнение плана рабочим</TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">1 772,75</SPAN></TD>
                                        <TD CLASS="R28C9" COLSPAN=3>Подписные издания</TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">53,40</SPAN></TD>
                                        <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R26C0">Доплата за интенсивность труда</TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">144</SPAN>
                                        </TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">145,25</SPAN></TD>
                                        <TD CLASS="R26C9" COLSPAN=3>Взносы в больничную кассу</TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">128,00</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R26C0">Доплата за совмещение</TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R26C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">144</SPAN>
                                        </TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">915,01</SPAN></TD>
                                        <TD CLASS="R26C9" COLSPAN=3>Военный сбор</TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">114,08</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R16>
                                        <TD CLASS="R28C0">Повременно-премиальная по окладу</TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">18</SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">144</SPAN>
                                        </TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN STYLE="white-space:nowrap;max-width:0px;">144</SPAN>
                                        </TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">4 150,00</SPAN></TD>
                                        <TD CLASS="R28C9" COLSPAN=3>НДФЛ</TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">1 368,99</SPAN></TD>
                                        <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R31C0" COLSPAN=7><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;нараховано</SPAN>
                                        </TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">7 605,51</SPAN></TD>
                                        <TD CLASS="R31C0" COLSPAN=5><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;утримано</SPAN>
                                        </TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">1 740,53</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R25C0" COLSPAN=9><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">3.&nbsp;Доходи&nbsp;в&nbsp;натуральній&nbsp;формі</SPAN>
                                        </TD>
                                        <TD CLASS="R25C0" COLSPAN=7><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">4.&nbsp;Виплачено</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R16>
                                        <TD CLASS="R28C0"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C9" COLSPAN=3>Аванс (за попереднім розрахунком)</TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">2 544,00</SPAN></TD>
                                        <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R16>
                                        <TD CLASS="R28C0"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C9" COLSPAN=3>Чергова виплата з погашенням боргів</TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">2 009,00</SPAN></TD>
                                        <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R31C0" COLSPAN=7><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;натуральних&nbsp;доходів</SPAN>
                                        </TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                        <TD CLASS="R31C0" COLSPAN=5><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;виплат</SPAN></TD>
                                        <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">4 553,00</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R36C0" COLSPAN=7><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Борг&nbsp;за&nbsp;підприємством&nbsp;на&nbsp;початок&nbsp;місяця</SPAN>
                                        </TD>
                                        <TD CLASS="R36C7" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">2 463,62</SPAN></TD>
                                        <TD CLASS="R36C0" COLSPAN=5><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">Борг&nbsp;за&nbsp;підприємством&nbsp;на&nbsp;кінець&nbsp;місяця</SPAN>
                                        </TD>
                                        <TD CLASS="R36C7" COLSPAN=2><SPAN
                                                STYLE="white-space:nowrap;max-width:0px;">313 775,60</SPAN></TD>
                                        <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD></TD>
                                    </TR>
                                    <TR CLASS=R1>
                                        <TD CLASS="R37C0" COLSPAN=16><SPAN></SPAN></TD>
                                        <TD CLASS="R37C16"><SPAN></SPAN></TD>
                                        <TD><SPAN></SPAN></TD>
                                        <TD>&nbsp;</TD>
                                    </TR>
                                    <TR CLASS=R13>
                                        <TD CLASS="R13C0">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C1">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C2">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD CLASS="R13C16">
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                <SPAN></SPAN></DIV>
                                        </TD>
                                        <TD>
                                            <DIV STYLE="width:100%;height:22px;overflow:hidden;">&nbsp;</DIV>
                                        </TD>
                                    </TR>
                                    <TR CLASS=R14>
                                    </TR>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal-table -->
                        <div class="modal fade-in px-0" id="tableLg" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog d-flex justify-content-center align-items-center">
                                <div class="modal-content bg-light">
                                    <div class="modal-body modal-centered border-primary rounded p-0 p-lg-3 text_color">
                                        <table class="table-striped table-hover table-bordered" id="modalRootTable">
                                            <tbody>
                                                <TR>
                                                    <TD CLASS="R14C0" COLSPAN=16><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Розрахунковий&nbsp;листок&nbsp;за&nbsp;Май&nbsp;2021</SPAN>
                                                    </TD>
                                                    <TD CLASS="R14C16">
                                                        <DIV
                                                            STYLE="position:relative; height:31px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:31px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:31px;overflow:hidden;"></DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R15C0" COLSPAN=9>Організація: АТ "Марганецький ГЗК"</TD>
                                                    <TD CLASS="R15C9" COLSPAN=7><SPAN></SPAN></TD>
                                                    <TD CLASS="R15C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R16>
                                                    <TD CLASS="R16C0" COLSPAN=8 ROWSPAN=4>ГОРОДОВА НАТАЛІЯ МИКОЛАЇВНА
                                                    </TD>
                                                    <TD CLASS="R16C8" ROWSPAN=4>
                                                        <DIV
                                                            STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R16C9" COLSPAN=7 ROWSPAN=2>Господарський цех</TD>
                                                    <TD CLASS="R16C16">
                                                        <DIV
                                                            STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:24px;overflow:hidden;"></DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R16>
                                                    <TD CLASS="R16C16">
                                                        <DIV
                                                            STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:24px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:24px;overflow:hidden;">&nbsp;
                                                        </DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R15C0" COLSPAN=7 ROWSPAN=2>Старший комірник</TD>
                                                    <TD CLASS="R15C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R15C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD>&nbsp;</TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R15C9" COLSPAN=9><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Табельний&nbsp;номер:&nbsp;441&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</SPAN>
                                                    </TD>
                                                    <TD CLASS="R15C9" COLSPAN=7>
                                                        <DIV
                                                            STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R15C16">
                                                        <DIV
                                                            STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:15px;overflow:hidden;"></DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R21>
                                                    <TD CLASS="R21C0" COLSPAN=9><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Код&nbsp;за&nbsp;ДРФО:&nbsp;2794204402</SPAN>
                                                    </TD>
                                                    <TD CLASS="R21C9">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R21C9">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R21C9">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R21C9">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R21C9">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R21C9">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R21C15">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R21C9">
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:14px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:14px;overflow:hidden;"></DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R22>
                                                    <TD CLASS="R22C0" COLSPAN=16>
                                                        <DIV
                                                            STYLE="position:relative; height:8px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R22C16">
                                                        <DIV
                                                            STYLE="position:relative; height:8px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:8px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:8px;overflow:hidden;">&nbsp;</DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R23C0" ROWSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Вид</SPAN></TD>
                                                    <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Період</SPAN></TD>
                                                    <TD CLASS="R23C0" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Відпрацьовано</SPAN>
                                                    </TD>
                                                    <TD CLASS="R23C0" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Оплачено</SPAN>
                                                    </TD>
                                                    <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Сума</SPAN></TD>
                                                    <TD CLASS="R23C0" COLSPAN=3 ROWSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Вид</SPAN></TD>
                                                    <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Період</SPAN></TD>
                                                    <TD CLASS="R23C0" COLSPAN=2 ROWSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Сума</SPAN></TD>
                                                    <TD CLASS="R23C16">
                                                        <DIV
                                                            STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:15px;overflow:hidden;"></DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R24C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Дні</SPAN></TD>
                                                    <TD CLASS="R24C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Години</SPAN></TD>
                                                    <TD CLASS="R24C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Дні</SPAN></TD>
                                                    <TD CLASS="R24C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Години</SPAN></TD>
                                                    <TD CLASS="R23C16">
                                                        <DIV
                                                            STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:15px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:15px;overflow:hidden;"></DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R25C0" COLSPAN=9><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">1.Нараховано</SPAN>
                                                    </TD>
                                                    <TD CLASS="R25C0" COLSPAN=7><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">2.&nbsp;Утримано</SPAN>
                                                    </TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R26C0">Выслуга лет</TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">622,50</SPAN></TD>
                                                    <TD CLASS="R26C9" COLSPAN=3>Проф,взносы 1%</TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">76,06</SPAN></TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R16>
                                                    <TD CLASS="R28C0">Премия за выполнение плана рабочим</TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">1 772,75</SPAN>
                                                    </TD>
                                                    <TD CLASS="R28C9" COLSPAN=3>Подписные издания</TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">53,40</SPAN></TD>
                                                    <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R26C0">Доплата за интенсивность труда</TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">144</SPAN></TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">145,25</SPAN></TD>
                                                    <TD CLASS="R26C9" COLSPAN=3>Взносы в больничную кассу</TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">128,00</SPAN></TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R26C0">Доплата за совмещение</TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">144</SPAN></TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">915,01</SPAN></TD>
                                                    <TD CLASS="R26C9" COLSPAN=3>Военный сбор</TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">114,08</SPAN></TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R16>
                                                    <TD CLASS="R28C0">Повременно-премиальная по окладу</TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">18</SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">144</SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">144</SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">4 150,00</SPAN>
                                                    </TD>
                                                    <TD CLASS="R28C9" COLSPAN=3>НДФЛ</TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">1 368,99</SPAN>
                                                    </TD>
                                                    <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R31C0" COLSPAN=7><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;нараховано</SPAN>
                                                    </TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">7 605,51</SPAN>
                                                    </TD>
                                                    <TD CLASS="R31C0" COLSPAN=5><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;утримано</SPAN>
                                                    </TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">1 740,53</SPAN>
                                                    </TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R25C0" COLSPAN=9><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">3.&nbsp;Доходи&nbsp;в&nbsp;натуральній&nbsp;формі</SPAN>
                                                    </TD>
                                                    <TD CLASS="R25C0" COLSPAN=7><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">4.&nbsp;Виплачено</SPAN>
                                                    </TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R16>
                                                    <TD CLASS="R28C0"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C9" COLSPAN=3>Аванс (за попереднім розрахунком)</TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">2 544,00</SPAN>
                                                    </TD>
                                                    <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R16>
                                                    <TD CLASS="R28C0"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C3"><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C9" COLSPAN=3>Чергова виплата з погашенням боргів</TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R28C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">2 009,00</SPAN>
                                                    </TD>
                                                    <TD CLASS="R28C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R31C0" COLSPAN=7><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;натуральних&nbsp;доходів</SPAN>
                                                    </TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN></SPAN></TD>
                                                    <TD CLASS="R31C0" COLSPAN=5><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Всього&nbsp;виплат</SPAN>
                                                    </TD>
                                                    <TD CLASS="R26C1" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">4 553,00</SPAN>
                                                    </TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R36C0" COLSPAN=7><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Борг&nbsp;за&nbsp;підприємством&nbsp;на&nbsp;початок&nbsp;місяця</SPAN>
                                                    </TD>
                                                    <TD CLASS="R36C7" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">2 463,62</SPAN>
                                                    </TD>
                                                    <TD CLASS="R36C0" COLSPAN=5><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">Борг&nbsp;за&nbsp;підприємством&nbsp;на&nbsp;кінець&nbsp;місяця</SPAN>
                                                    </TD>
                                                    <TD CLASS="R36C7" COLSPAN=2><SPAN
                                                            STYLE="white-space:nowrap;max-width:0px;">3 775,60</SPAN>
                                                    </TD>
                                                    <TD CLASS="R23C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD></TD>
                                                </TR>
                                                <TR CLASS=R1>
                                                    <TD CLASS="R37C0" COLSPAN=16><SPAN></SPAN></TD>
                                                    <TD CLASS="R37C16"><SPAN></SPAN></TD>
                                                    <TD><SPAN></SPAN></TD>
                                                    <TD>&nbsp;</TD>
                                                </TR>
                                                <TR CLASS=R13>
                                                    <TD CLASS="R13C0">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C1">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C2">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD CLASS="R13C16">
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV
                                                            STYLE="position:relative; height:22px;width: 100%; overflow:hidden;">
                                                            <SPAN></SPAN></DIV>
                                                    </TD>
                                                    <TD>
                                                        <DIV STYLE="width:100%;height:22px;overflow:hidden;">&nbsp;
                                                        </DIV>
                                                    </TD>
                                                </TR>
                                                <TR CLASS=R14>
                                                </TR>
                                            </tbody>
                                        </table>
                                        <a role="button" href="#" class="position-absolute close_table"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="btn btn-transparent p-0 text_color"><i
                                                    class="far fa-times-circle fa-4x"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</script>
</body>

</html>