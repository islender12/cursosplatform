<?php
$socialmedia = new Socialmedia;
$smx = $socialmedia->get_socialmedia();
?>
<!-- Footer Start-->
<footer class="pt-50 pb-20 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-widget wow fadeInUp animated mb-30 text-center">
                    <div class="textwidget">
                        <strong class="color-black">Sigueme</strong><br>
                        <ul class="header-social-network d-inline-block list-inline color-white mb-20 mt-4">
                            <!-- Recorremos todos los icones de redes Sociales -->
                            <?php
                            foreach ($smx as $social) {

                                if (empty($social['sm_rutaweb'])) {
                                    $link = "#";
                                } else {
                                    $link = $social['sm_rutaweb'];
                                }

                                echo '<li class="list-inline-item"><a class="' . $social['sm_icon1'] . '" href="' . $link . '" target="_blank" title="' . ucfirst($social['sm_nom']) . '"><i class="elegant-icon ' . $social['sm_icon2'] . '"></i></a></li>';
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
            <p class="float-md-left font-small text-muted">© 2021, Stories - Personal Blog HTML Template </p>
            <p class="float-md-right font-small text-muted">
                Design by <a href="https://alithemes.com" target="_blank">AliThemes</a> | All rights reserved
            </p>
        </div>
    </div>
</footer>
<!-- End Footer -->
<div class="dark-mark"></div>
<?php
section('scripts.php');
?>