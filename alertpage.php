<?php include_once "header.php"; ?>
<title>Повідомити про порушення</title>
</head>

<body id="main">
    <?php include_once "menu.php"; ?>
    <!-- main-section-->
    <section class="mt-0 pt-3 pb-lg-5 ads_page_descr">
        <div class="container pt-2 pb-2 pb-lg-3 px-sm-0 px-md-3 px-lg-3 px-xl-3">
            <div class="d-flex justify-content-between align-items-baseline mt-3 mt-md-3 mt-lg-3 mt-xl-4">
                <h3 class="d-md-none d-lg-block pt-sm-2 pt-lg-3 text-left text-uppercase text_color">Повідомити про порушення</h3>
                <h3 class="d-none d-md-block align-self-baseline d-lg-none pt-sm-2 pt-lg-3 text-left mb-2 text-uppercase text_color">
                    Акціонерне Товариство "Марганецький гірничо-збагачувальний
                    комбінат"</h3>
                <a href="index.php" class="align-self-baseline d-flex flex-row align-items-center flex-nowrap bg-light mt-5 mb-3 p-1 text-uppercase border border-primary rounded shadow text_color">
                    Вихід<i class="fas fa-sign-out-alt ml-2"></i></a>
            </div>
            <div class="row pb-sm-1 ml-0 px-0 mr-0">
                <?php include_once "left-nav.php"; ?>
                <aside class="col-sm-12 col-lg-10 px-0 px-sm-0 pl-md-0 pl-lg-1 py-3 py-lg-0 fadeInAnimation bg_light_through" data-fadeinanimation>
                    <div id="open-positions" class="row mx-0 border border-primary rounded bg_alert py-3 py-lg-5">
                        <!-- text-positions -->
                        <div class="col-12 mx-0 px-2">
                            <div class="d-flex flex-column fustify-content-center align-items-center py-3 py-md-5 blur">
                                <h2 class="text-center text-italic display-3 shadows d-none d-lg-block">Увага !</h2>
                                <h2 class="text-center text-italic display-4 shadows d-block d-lg-none">Увага !</h2>
                                <div class="col-10 col-md-8 col-xl-6 my-1 my-md-3 px-0 px-md-3">
                                    <p class="lead text-justify font-weight-bold shadow-light">
                                        Якщо вам стало відомо про викрадення товарно-матеріальних цінностей
                                        підприємства або інші правопорушення ви можете повідомити про це</p>
                                    <p class="lead font-weight-bolder text-center">Анонімність гарантується.</p>
                                    <p class="lead text-center font-weight-bolder">
                                        <br class="d-md-none">
                                        <em class="bg_dark_through text-white shadow-dark px-1 rounded">
                                            "телефон довіри": 51-15</em>
                                        <br>
                                            або повідомити про це у режимі онлайн 
                                    </p>
                                    <!-- <p class="text-center text-info"><i class="far fa-hand-point-down fa-3x"></i></p> -->
                                    
                                </div>
                                <div class="col-10 col-md-8 col-xl-6 px-0 px-md-3 text-center text-md-left">
                                    <button id="show_form_button" class="btn btn-lg btn-block btn-dark text-uppercase mx-auto mx-md-0 shadow-dark border text-white shadow-light" 
                                        data-toggle="modal" data-target="#position-form">Надіслати повідомлення</button>
                                </div>

                            </div>
                        </div>
                        <!-- <form name="dataForm" class="col-12 col-md-8 my-4">
                            <div class="form-group">
                                <label for="bday">Оберіть дату</label>
                                <input class="form-control w-75" type="date" required>
                            </div>
                            <div>
                                <button type="submit">Submit</button>
                            </div>
                        </form> -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- modal -->
    <div class="modalAlert w-100 flex-column align-items-center justify-content-center height-100p position-fixed bg_linear_dark mx-auto d-none text-white shadow-dark" style="top:0;left: 0;z-index: 1080">
            <div class="modalContent col-10 col-md-8 col-lg-6 px-0 border rounded blur little-filter-effect bg_info_through shadow" style="height: auto">
                <header class="modalHeader d-flex flex-row justify-content-between align-items-center p-3">
                    <p class="mb-0">Some text here</p>
                    <button type="button" class="closeBtn btn btn-info text_color">CLOSE</button>
                </header>
                <hr class="bg-light">
                <div class="modalBody px-3 height-210 overflow-auto">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde 
                        facilis labore corporis eveniet fugiat atque porro soluta voluptatibus accusamus. Sit error 
                        quos aperiam autem consequuntur nihil quas minima accusantium quaerat distinctio numquam sint 
                        consequatur est non deleniti dolore libero nobis, unde soluta reprehenderit ut veritatis dignissimos. 
                        Consectetur possimus vitae quos voluptas vero harum, placeat, alias architecto laborum enim reiciendis ipsum 
                        sint nisi necessitatibus veritatis dolorem minus iste provident quibusdam non saepe eveniet praesentium? 
                        Neque quia laboriosam in. Provident ut magnam, fugit, omnis laborum dolorum doloremque officia perspiciatis 
                        quam aspernatur enim dolore nihil fugiat eos, odit quo. Maiores nulla adipisci facere ipsam delectus sint nostrum 
                        voluptatem dolorem officia ea voluptates nisi sapiente, non molestiae! Esse blanditiis odio, nulla fuga ipsa 
                        autem molestias doloremque perferendis cupiditate quod mollitia deserunt facere ex suscipit quasi molestiae eos 
                        tempore. Velit tempore similique deleniti inventore excepturi cupiditate fugiat quaerat quo fuga. Similique voluptas 
                        repellendus necessitatibus voluptatibus ut, in iusto porro quasi dolor quas eveniet magnam autem enim sunt molestiae 
                        tempore nisi voluptatem assumenda asperiores quae odit. Recusandae quaerat, explicabo modi ex minus libero repudiandae 
                        eaque magni sint quibusdam, dolorum architecto. Sint, nam odio nihil veniam assumenda dicta, quae tempore perspiciatis 
                        maiores atque, mollitia nesciunt at corrupti velit facilis voluptatem deleniti ipsum praesentium cumque saepe? Omnis 
                        ipsum, sint dolorem magnam quae ut laborum repellat, delectus ducimus voluptatibus ex totam quos eaque similique inventore 
                        exercitationem voluptatem error vero explicabo aperiam quis possimus harum praesentium commodi! Accusantium aliquid odit non 
                        nam neque, exercitationem deleniti magni. Exercitationem maxime molestias ut nemo amet minima consectetur eveniet iste illum 
                        perspiciatis cum accusantium quidem, accusamus libero! Cum sint, atque impedit molestias odit, at voluptas ducimus consequuntur 
                        ullam corporis in necessitatibus fugit voluptate delectus fugiat maxime doloribus dolore, perspiciatis eius. Nesciunt ipsa porro
                         eveniet quia hic numquam libero aut voluptas rem, modi ipsum iusto!
                    </p>
                </div>
                <hr class="bg-light">
                <footer class="modalFooter w-100 px-3 d-flex flex-column justify-content-center align-items-center">
                    <p class="mb-0 my-auto align-self-end">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, sunt?</p>
                </footer>
            </div>
    </div>
    <!-- end -->
    <!--footer-->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            var inp = document.querySelector('[type="date"]');
            const form = document.dataForm;
            console.log(inp);
            form.addEventListener('submit', function(e) {
                //e.preventDefault();
                //console.log(typeof(inp.value));
                valNew = inp.value;
                console.log("=>" + inp.value);
                valNew = valNew.replaceAll('-', '.');
                console.log(valNew);
            });
        });
    </script> -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openBtn = document.querySelector('#show_form_button'),
                closeBtn = document.querySelector('.closeBtn'),
                modalBlock = document.querySelector('.modalAlert');
            let bodyMain = document.querySelector('body');

            function openModal() {
                modalBlock.classList.remove('d-none');
                modalBlock.classList.add('d-flex');
                bodyMain.style.overflow = "hidden";
            }

            function closeModal() {
                modalBlock.classList.add('d-none');
                modalBlock.classList.remove('d-flex');
                bodyMain.style.overflow = "";
            }

            openBtn.addEventListener('click',openModal);

            closeBtn.addEventListener('click', closeModal);

            window.addEventListener('click', clickOutside);

            function clickOutside(e) {
                if (e.target === modalBlock) {
                    closeModal();
                }
            }
        });
    </script>
    <?php include_once "footer.php"; ?>