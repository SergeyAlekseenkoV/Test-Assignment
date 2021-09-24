<?php include_once "header.php"; ?>
<title>Портал-Графік роботи каси</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Графік роботи каси</h3>
                <h3
                    class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php"
                    class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0 mb-lg-5">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0">
                    <div class="row mx-0 border border-primary rounded scheduel">
                        <!-- heading -->
                        <div class="col-12 mx-0 px-0 text-center">
                            <h2
                                class="d-flex flex-row justify-content-center align-items-center flex-wrap text-uppercase px-1 py-3 mx-1 my-1 text-white bg_headers">
                                Графік роботи каси в бухгалтерії</h2>
                        </div>
                        <!-- description -->
                        <div class="row mx-1 w-100 mb-1 pt-3 border border-info bg_scheduel">
                            <div
                                class="col-12 mx-0 px-3 d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="lead font-weight-bold px-2 border-info rounded">З 1-го по 28 лютого 2021р.</p>
                                <p><strong>Понеділок - Четверг&nbsp;:</strong><br> з 13.00 до 16.30 год.</p>
                                <p><strong>Вихідні дні&nbsp;:</strong><br> П'ятниця, Субота, Неділя</p>
                                <p class="lead font-weight-bold px-2 border-info rounded">З 1-го березня 2021р.</p>
                                <p><strong>Понеділок - Четверг&nbsp;:</strong><br> з 13.00 до 16.30 год.</p>
                                <p><strong>П'ятниця&nbsp;:</strong><br> з 13.00 до 15.45 год.</p>
                                <p><strong>Вихідні дні&nbsp;:</strong><br> Субота, Неділя</p>
                            </div>
                        </div>
                    </div>
                    <!-- simple slider -->
                    <!-- <style>
                        a:hover {
                            text-decoration: none !important;
                        }

                        /* invisible by default */
                        .containers {
                            display: none;
                        }

                        img {
                            min-height: 100%;
                        }

                        /* prev and next buttons */
                        .back,
                        .forward {
                            cursor: pointer;
                            top: 50%;
                            width: auto;
                            transform: translateY(-50%);
                            color: white;
                            font-size: 4em;
                            border-radius: 0 .5em .5em 0;
                            user-select: none;
                            transition: all 400ms ease;
                        }

                        /* placement of the next buttons */
                        .forward {
                            right: 0;
                            border-radius: .2em 0 0 .2em;
                        }

                        /* hover effect for buttons */

                        .back:hover,
                        .forward:hover {
                            backgroud-color: rgba(0, 0, 0, .8);
                        }

                        /* caption */
                        .info {
                            width: fit-content;
                            color: blue;
                            font-size: 1.1em;
                            right: 50%;
                            bottom: 1em;
                            transform: translateX(50%)
                        }

                        /* numbers */
                        .messageInfo {
                            color: darkblue;
                            font-size: .9em;
                            top: 0;
                        }

                        /* indicators */
                        .dots {
                            display: inline-block;
                            cursor: pointer;
                            height: 1em;
                            width: 1em;
                            background-color: darkblue;
                            transition: all 500ms ease;
                            border: darkblue 1px solid;
                        }

                        .enable,
                        .dots:hover {
                            background-color: lightblue;
                        }

                        /* Fading animation */
                        .fadeOut {
                            -webkit-animation-name: fadeOut;
                            -webkit-animation-duration: 3000ms;
                            animation-name: fadeOut;
                            animation-duration: 3000ms;
                        }
                        
                        @-webkit-keyframes fadeOut {
                            from {opacity: .4}
                            to {opacity: 1}
                        }
                        
                        @keyframes fadeOut {
                            from {opacity: .4}
                            to {opacity: 1}
                        }
                    </style> -->
                    <!-- <div class="slideshow-container position-relative mx-auto mt-2 w-100 border-primary rounded"> -->
                        <!-- full images with numbers and message info -->
                        <!-- <div class="containers fadeOut">
                            <div class="messageInfo position-absolute px-2 py-1 text_color">1 / 3</div>
                            <img class="w-100" src="../img/carosel1.jpg" alt="photo">
                            <div class="position-absolute text-center px-2 py-1 rounded bg_light_through info">First
                                caption</div>
                        </div>

                        <div class="containers fadeOut">
                            <div class="messageInfo position-absolute px-2 py-1 text_color">2 / 3</div>
                            <img class="w-100" src="../img/carosel2.jpg" alt="photo">
                            <div class="position-absolute text-center px-2 py-1 rounded bg_light_through info">Second
                                caption</div>
                        </div>

                        <div class="containers fadeOut">
                            <div class="messageInfo position-absolute px-2 py-1 text_color">3 / 3</div>
                            <img class="w-100" src="../img/carosel3.png" alt="photo">
                            <div class="position-absolute text-center px-2 py-1 rounded bg_light_through info">Third
                                caption</div>
                        </div> -->

                        <!-- buttons -->
                        <!-- <a class="position-absolute p-2 back" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="position-absolute p-2 forward" onclick="plusSlides(1)">&#10095;</a>
                    </div> -->
                    <!-- the dots -->
                    <!-- <div class="text-center mt-2">
                        <span class="rounded-circle mx-1 my-0 dots" onclick="currentSlide(1)"></span>
                        <span class="rounded-circle mx-1 my-0 dots" onclick="currentSlide(2)"></span>
                        <span class="rounded-circle mx-1 my-0 dots" onclick="currentSlide(3)"></span>
                    </div> -->
                </aside>
            </div>
        </div>
    </section>
    <!-- <script>

        /* slideshow by user action */

        var slidePosition = 1;
        SlideShow(slidePosition);

        // controls buttons

        function plusSlides(n) {
            SlideShow(slidePosition += n);
        }

        // image controls

        function currentSlide(n) {
            SlideShow(slidePosition = n);
        }

        function SlideShow(n) {
            var i;
            var slides = document.getElementsByClassName("containers");
            var circles = document.getElementsByClassName("dots");
            if (n > slides.length) { slidePosition = 1 }
            if (n < 1) { slidePosition = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < circles.length; i++) {
                circles[i].className = circles[i].className.replace(" enable", "");
            }
            slides[slidePosition - 1].style.display = "block";
            circles[slidePosition - 1].className += " enable";
        } -->
<!-- 
        /* end user-slideshow */

        /* automtic slides */

        // var slidePosition = 0;
        // SlideShow();

        // function SlideShow() {
        //   var i;
        //   var slides = document.getElementsByClassName("containers");
        //   for (i = 0; i < slides.length; i++) {
        //     slides[i].style.display = "none";
        //   }
        //   slidePosition++;
        //   if (slidePosition > slides.length) {slidePosition = 1}
        //   slides[slidePosition-1].style.display = "block";
        //   setTimeout(SlideShow, 3000); // Change image every 3 seconds (likely to be equal with the fade animation)
        // } 
    </script> -->
    <!--footer-->
    <?php include_once "footer.php"; ?>
    