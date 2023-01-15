<?php
require_once './route.php';
recursos('models/plantilla.php');
require './controllers/cursocontroller.php';
section('header.php');

?>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Categories-->
            <div class="sidebar-widget widget_categories mb-50 mt-30">
                <div class="widget-header-2 position-relative">
                    <h5 class="mt-5 mb-15">Hot topics</h5>
                </div>
                <div class="widget_nav_menu">
                    <ul>
                        <li class="cat-item cat-item-2"><a href="category.html">Travel tips</a> <span class="post-count">30</span></li>
                        <li class="cat-item cat-item-3"><a href="category-grid.html">Book review</a> <span class="post-count">25</span></li>
                        <li class="cat-item cat-item-4"><a href="category-list.html">Hotel review</a> <span class="post-count">16</span></li>
                        <li class="cat-item cat-item-5"><a href="category-masonry.html">Destinations </a> <span class="post-count">22</span></li>
                        <li class="cat-item cat-item-6"><a href="category-big.html">Lifestyle</a> <span class="post-count">25</span></li>
                    </ul>
                </div>
            </div>
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="<?php assets('imgs\news\thumb-1.jpg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Life of a Travel Writer with David Farley</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">05 August</span>
                                        <span class="post-by has-dot">300 views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="<?php assets('imgs\news\thumb-2.jpg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why Don’t More Black American Women Travel Solo?</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">12 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="<?php assets('imgs\news\thumb-3.jpg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The 22 Best Things to See and Do in Bangkok</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Advertise banner</h5>
                </div>
                <a href="https://themeforest.net/user/alithemes/portfolio" target="_blank">
                    <img class="advertise-img border-radius-5" src="<?php assets('imgs\ads\ads-1.jpg') ?>" alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20 justify-content-between">
                    <div class="col-md-6 col-xs-6">
                        <a href="index.html"><img class="logo" src="<?php assets('imgs\theme\logo.png') ?>" alt=""></a>
                    </div>
                    <div class="col-md-6 col-xs-6 d-none d-lg-flex">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-xs-6">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Busqueda" aria-label="Busqueda">
                                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="elegant-icon icon_search"></i></button>
                                </form>
                            </div>
                            <div class="col-md-2 col-xs-3">
                                <a href="#" class="font-weight-bold mx-2">Login</a>
                            </div>
                            <div class="col-md-2 col-xs-3">
                                <a href="#" class="font-weight-bold mx-2">Registro</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li><a href="/">INICIO</a> </li>
                            <?php
                            foreach ($langP as $langMenu) {
                                echo '<li><a href="#">' . strtoupper($langMenu['lang_nom']) . '</a></li>';
                            };
                            ?>

                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="index.php">Inicio</a>
                                <ul class="sub-menu text-muted font-small">
                                    <li><a href="page-login.html" class="font-weight-bold">Login</a></li>
                                    <li><a href="page-register.html" class="font-weight-bold">Registro</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Páginas</a>
                                <ul class="sub-menu font-small">
                                    <?php
                                    foreach ($langP as $langMenu) {
                                        echo '<li><a href="#">' . strtoupper($langMenu['lang_nom']) . '</a></li>';
                                    };
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <?php
                        foreach ($smx as $social) {

                            if (empty($social['sm_rutaweb'])) {
                                $link = "#";
                            } else {
                                $link = $social['sm_rutaweb'];
                            }

                            echo '<li class="list-inline-item"><a class="social-icon ' . $social['sm_icon1'] . ' text-xs-center" target="_blank" href="' . $link . '"><i class="elegant-icon ' . $social['sm_icon2'] . '"></i></a></li>';
                        }


                        ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="loop-grid mb-30">
                <div class="row">
                    <?php foreach ($cursoN as $curso) { ?>
                        <?php if ($curso['episodio'] != 1) {
                            continue;
                        } ?>
                        <article class="col-lg-8 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?php echo $curso['iframe'] ?>" allowfullscreen></iframe>
                                    </div>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                        <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                        <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-content p-30">
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a href="#"><?php echo strtoupper($curso['cur_titulo']) . " Capitulo " . $curso['episodio'] ?></a>
                                            <p class="my-4 font-weight-500"><?php echo 'Capitulo #' . $curso['episodio'] . ' Del Curso: ' . $curso['cur_titulo'] ?> </p>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on"><?php echo fecha($curso['fecha']) ?></span>
                                            <span class="time-reading has-dot">12 mins</span>
                                            <span class="post-by has-dot">23k Vistas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    <?php foreach ($cursoN as $curso) { ?>
                        <?php if ($curso['episodio'] == 1) {
                            continue;
                        } ?>
                        <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?php echo $curso['iframe'] ?>" allowfullscreen></iframe>
                                    </div>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                        <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                        <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-content p-30">
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a href="#"><?php echo strtoupper($curso['cur_titulo']) . " Capitulo " . $curso['episodio'] ?></a>
                                            <p class="my-4 font-weight-500"><?php echo 'Capitulo #' . $curso['episodio'] . ' Del Curso: ' . $curso['cur_titulo'] ?> </p>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on"><?php echo fecha($curso['fecha']) ?></span>
                                            <span class="time-reading has-dot">12 mins</span>
                                            <span class="post-by has-dot">23k Vistas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <?php
    section('footer.php');
    ?>
</body>

</html>