<?php
$teou = 'Accueil';
include '_head.php';
?>
<body>
    <div class="container tm-container">
        <?php include '_navbar.php'; ?>

        <!-- page content -->
        <div class="tm-page-content">

            <!-- #home -->
            <section id="tm-section-1" class="row tm-section">

                <div class="tm-white-curve-left col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="tm-white-curve-left-rec"></div>
                    <div class="tm-white-curve-left-circle"></div>
                    <div class="tm-white-curve-text">
                        <h2 class="tm-section-header textcol-sec-1">Formation en 1 an</h2>
                        <ul>
                            <li>Application concrète des techniques des affaires</li>
                            <li>Utilisation performante des outils bureautiques</li>
                            <li>Connaissance active des langues</li>
                            <li>Ouverture sur le monde économique, politique et social</li>
                        </ul>
                        <h2>&nbsp;</h2>
                        <h2 class="tm-section-header textcol-sec-1">3 axes</h2>
                        <ul>
                            <li>La gestion</li>
                            <li>La communication</li>
                            <li>La culture générale</li>
                            <li>Parler fort comme Adrien</li>
                        </ul>
                    </div>
                </div>

                <div class="tm-home-right col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-6">
                    <h2 class="tm-section-header">Notre méthode</h2>
                    <p class="thin-font">
                        <ul>
                            <li>Approche basée sur la résolution de problèmes pratiques</li>
                            <li>Travaux de groupe : Workshop, études de cas, Business game...</li>
                            <li>Rencontres avec les entreprises, visites sur le terrain</li>
                            <li>Cours en petits groupes, coaching individuel, bourse à l'emplois</li>
                        </ul>
                    </p>
                </div>

            </section>
            <!-- #home -->
            <!-- #programme -->
            <section id="tm-section-2" class="row tm-section">
                <div class="tm-flex-center col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6">
                    <img src="img/promo85.png" alt="Image" class="img-fluid tm-img">
                </div>

                <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">

                    <div class="tm-white-curve-right-circle"></div>
                    <div class="tm-white-curve-right-rec"></div>

                    <div class="tm-white-curve-text">
                        <h2 class="tm-section-header textcol-sec-2">Participez au Melius Business Game 2018</h2>
                        <p>Praesent consectetur dictum massa eu tincidunt. Nulla facilisi. Nam tincidunt nex diam eget sollicitudin. Quisque tincidunt ex sit amet metus ultricies, sed lobortis purus finibus.</p>
                        <p class="thin-font">Morbi nex felis rutrum, faucibus odio sed, ullamcorper risus. Sed id condimentum nequq, at iaculis ex. Praesent faucibus viverra ante id auctor. Pellentesque at risus ut arcu blandit consectetur.</p>
                    </div>

                </div>
            </section>
            <!-- #programme -->

            <?php include '_footer.php'; ?>

        </div>
        <!-- page content -->

    </div>
    <!-- .container -->

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <!-- <script src="js/jquery.singlePageNav.min.js"></script> -->

    <?php include '_js.php'; ?>

</body>
</html>
