<?php include_once "header.php"; ?>
<title>Портал-Плани виробництва</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 position_description">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Плани виробництва</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <div id="rest-vacation" class="row mx-0 border border-primary rounded">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2 class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 my-1 text-white bg_headers">Планові та фактичні показники</h2>
                        </div>
                        <!-- ============= navigation-tabs per decade ============= -->
                        <ul class="col-12 mx-0 px-1 nav nav-pills nav-justified" id="pills-tab" role="tablist">
                            <li class="nav-item bg-light" role="presentation">
                                <a class="nav-link min-height d-flex flex-column justify-content-center align-items-center" id="firstDecade" data-toggle="pill" href="#first" role="tab" aria-controls="pills-home" aria-selected="false">Январь-март</a>
                            </li>
                            <li class="nav-item bg-light" role="presentation">
                                <a class="nav-link min-height d-flex flex-column justify-content-center align-items-center" id="secondDecade" data-toggle="pill" href="#second" role="tab" aria-controls="pills-profile" aria-selected="false">Апрель-июнь</a>
                            </li>
                            <li class="nav-item bg-light" role="presentation">
                                <a class="nav-link active min-height d-flex flex-column justify-content-center align-items-center" id="thirdDecade" data-toggle="pill" href="#third" role="tab" aria-controls="pills-contact" aria-selected="true">Июнь-сентябрь</a>
                            </li>
                            <li class="nav-item bg-light" role="presentation">
                                <a class="nav-link min-height d-flex flex-column justify-content-center align-items-center" id="fourthDecade" data-toggle="pill" href="#fourth" role="tab" aria-controls="pills-contact" aria-selected="false">октябрь-декабрь</a>
                            </li>
                        </ul>
                        <!-- ============= content ============= -->
                        <div class="tab-content w-100" id="myTabContent">
                            <!-- ============= decade 1 ============= -->
                            <div class="tab-pane fade border m-1" id="first" role="tabpanel" aria-labelledby="firstDecade">
                                <div class="row mx-auto w-100">

                                </div>
                            </div>
                            <!-- ============= decade 2 ============= -->
                            <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="secondDecade">
                                <div class="row mx-auto w-100">
                                    <div class="col-12 my-0 px-0 position-relative table table-responsive" style="height:370px">
                                        <iframe style="top: 0;left:0;right:0;bottom:0;" class="position-absolute" width="900" height="100%" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS5jyZuRXPPseDyqzNew57TK3Mlh1wHOzqafjqvq0BXNJxsuFjm0okvYVWDKEjKic2wLZpPb-NckZty/pubchart?oid=1087145314&amp;format=interactive"></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- ============= decade 3 ============= -->
                            <div class="tab-pane fade show active" id="third" role="tabpanel" aria-labelledby="thirdDecade">
                                <div class="row mx-auto w-100">
                                    <div class="col-12 my-0 px-0 position-relative table table-responsive diagram_block">
                                        <iframe style="top: 0;left:0;right:0;bottom:0;" class="position-absolute" width="900" height="380px" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS5jyZuRXPPseDyqzNew57TK3Mlh1wHOzqafjqvq0BXNJxsuFjm0okvYVWDKEjKic2wLZpPb-NckZty/pubchart?oid=1838059437&amp;format=interactive"></iframe>
                                        <iframe style="top: 380px;left:0;right:0;bottom:0;" class="position-absolute" width="900" height="380px" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS5jyZuRXPPseDyqzNew57TK3Mlh1wHOzqafjqvq0BXNJxsuFjm0okvYVWDKEjKic2wLZpPb-NckZty/pubchart?oid=977566622&amp;format=interactive"></iframe>
                                        <iframe style="top: 760px;left:0;right:0;bottom:0;" class="position-absolute" width="900" height="380px" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS5jyZuRXPPseDyqzNew57TK3Mlh1wHOzqafjqvq0BXNJxsuFjm0okvYVWDKEjKic2wLZpPb-NckZty/pubchart?oid=1216048734&amp;format=interactive"></iframe>
                                        <iframe style="top: 1140px;left:0;right:0;bottom:0;" class="position-absolute" width="900" height="380px" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS5jyZuRXPPseDyqzNew57TK3Mlh1wHOzqafjqvq0BXNJxsuFjm0okvYVWDKEjKic2wLZpPb-NckZty/pubchart?oid=728852396&amp;format=interactive"></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- ============= decade 4 ============= -->
                            <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourthDecade">
                                <div class="row mx-auto w-100">

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