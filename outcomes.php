<?php include_once "header.php"; ?>
<title>Портал-Підсумок роботи бригад</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 position_description">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Підсумок роботи бригад</h3>
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
                            <h2 class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 my-1 text-white bg_headers">Підсумок роботи бригад</h2>
                        </div>
                        <!-- description -->
                        <div class="row mx-1 w-100">
                            <div class="col-12 mt-0 mb-0 px-0 border border-primary position-relative" style="height: 100vh;">
                                <iframe style="top: 0;left:0;right:0;bottom:0;" class="position-absolute min-height" width="100%" height="100%" 
                                    seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSi0b1cu8ZQMdIe1kIf7UVC28BSpIfBvt9i3DOoHfTgiTZjxGeeyET2xo1UYaG7PQfuUVKApvewefI8/pubhtml?widget=true&amp;headers=false"></iframe>
                            </div>
                            <div class="col-12 py-1 px-0 my-2 mb-0 text-center">
                                <a target="_blank" href="https://docs.google.com/spreadsheets/d/1yPlDoJUhbKfvDAd93llCcqZRHN_WlskG9lZ6Jyw6Hps/edit#gid=850930886" 
                                   class="btn btn-primary">Дивитися документ у сервісі Google&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>