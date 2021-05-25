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

<title>Пропозиції</title>
</head>

<body id="home">
    <?php include_once "user-menu.php"; ?>
    <section id="personalRoom" class="pt-3 pb-5">
        <!--content-->
        <div class="container py-3 py-lg-4 pb-lg-3 px-sm-0 px-md-3">
            <nav aria-label="breadcrumb"
                class="d-flex justify-content-end justify-content-md-between mt-5 mb-3">
                <ol class="d-none d-md-flex breadcrumb bg-transparent px-0 pb-0 mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary text-decoration-none" href="home.php">Головна</a>
                    </li>
                    <li class="breadcrumb-item text_color" aria-current="page">Персональний кабінет</li>
                    <li class="breadcrumb-item active text_color" aria-current="page">Пропозиції</li>
                </ol>
                <a href="index.php" class="align-self-baseline btn btn-small btn-dark text-white shadow border mt-2 mt-md-0"
                    role="button">Вийти</a>
            </nav>
            <div class="row py-2 ml-0 pl-0 mr-0 pr-0">
                <div class="col-sm-12 col-lg-2 px-0 py-0">
                    <article class="sticky-top rounded bg-dark text-center text-lg-left shadow">
                        <h5 class="px-3 py-1">Розділи</h5>
                        <nav class="accordion" id="accordionPerson">
                            <!-- first card -->
                            <div class="card bg-transparent">
                                <div class="card-header p-0 bg-dark" id="first-item">
                                    <button class="btn btn-link bg-transparent btn-block text-center text-lg-left text-white"
                                        type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Мої пропозиції
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse bg-transparent" aria-labelledby="first-item"
                                    data-parent="#accordionPerson">
                                    <ul class="card-body list-group px-2 text-white">
                                        <li class="list-group-item bg-transparent border-white px-2 py-2">
                                            <a href="#" class="text-white">Пропозиція 1</a>
                                        </li>
                                        <li class="list-group-item bg-transparent border-white px-2 py-2">
                                            <a href="#" class="text-white">Пропозиція 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- second card -->
                            <div class="card">
                                <div class="card-header p-0 bg-dark" id="second-item">
                                    <a class="btn btn-link btn-block bg-transparent text-center text-lg-left text-white collapsed"
                                        type="button" href="#">
                                        Подати пропозицію
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </article>
                </div>
                <!-- main content -->
                <div class="col-sm-12 col-lg-10 px-0 pl-md-0 pl-lg-3 py-0 pr-lg-0">
                    <aside class="mt-2 mt-lg-0">
                        <h3 class="bg-dark text-white pl-3 py-2">Пропозиція 1</h3>
                        <p class="lead text-justify bg-light p-3 shadow text_color">Lorem, ipsum dolor sit amet
                            consectetur adipisicing elit.
                            Quod repudiandae velit fugiat. Quisquam atque at quod neque eveniet obcaecati incidunt
                            corporis,
                            officiis id, ea sit odio quidem aut quo, sapiente blanditiis? Recusandae neque delectus
                            dicta, praesentium
                            exercitationem odit deleniti quisquam sequi vero reiciendis minima impedit corporis
                            laboriosam labore atque eligendi fuga
                            quos quam doloremque cumque ab unde. Inventore sequi blanditiis autem assumenda veritatis
                            magnam, dolore illum, animi, delectus
                            excepturi aperiam modi ea! Officia voluptate delectus minus maxime neque quos cumque,
                            assumenda quas, animi esse in recusandae quisquam
                            suscipit veritatis numquam libero. Iure magnam et, <br>sit consectetur laboriosam cupiditate
                            architecto id dolores ea. Temporibus praesentium
                            dolorum obcaecati sunt placeat atque hic accusamus quis a ipsum iusto quaerat molestias
                            earum aspernatur quo porro nihil ducimus nemo quae cupiditate,
                            asperiores dolor? Culpa officiis nobis earum numquam consectetur molestias dolores sed
                            doloribus exercitationem dolorem placeat, deleniti repellat nostrum
                            reprehenderit quos quod facere vero totam quidem excepturi obcaecati ratione! Molestias iure
                            vero sunt quo minus mollitia, excepturi at est facere
                            facilis repudiandae aperiam reprehenderit, possimus deserunt amet illo sapiente fugit
                            voluptate nobis, odio aliquam! Iusto consequatur magni
                            ipsam non aspernatur nisi, sint reiciendis, nemo reprehenderit expedita similique
                            praesentium. Sunt, eaque! Aliquid sit atque dolore eos impedit
                            fuga? Culpa aspernatur excepturi voluptates aperiam quidem natus placeat ea reiciendis!
                            Ipsum itaque omnis placeat cumque atque aliquid cupiditate
                            repellat recusandae, repellendus dicta velit est optio accusantium rem in fugiat. Fugiat ea
                            hic laborum vel nihil quasi repellat. Consectetur,
                            temporibus eius sint rerum tenetur fuga necessitatibus illo quo placeat.</p>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>

</html>