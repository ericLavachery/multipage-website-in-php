<?php
$teou = 'Contact';
include '_head.php';
?>
<body>
    <div class="container tm-container">
        <?php include '_navbar.php'; ?>
        <!-- page content -->
        <div class="tm-page-content">

            <!-- #activites -->
            <section id="tm-section-3" class="row tm-section">
                <div class="tm-white-curve-left col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                    <div class="tm-white-curve-left-rec">

                    </div>
                    <div class="tm-white-curve-left-circle">

                    </div>
                    <div class="tm-white-curve-text">
                        <h2 class="tm-section-header textcol-sec-3">About our company</h2>
                        <p class="thin-font">Praesent consectetur dictum massa eu tincidunt. Nulla facilisi. Nam tincidunt nex diam eget sollicitudin. Quisque tincidunt ex sit amet metus ultricies, sed lobortis purus finibus.</p>
                        <p>Morbi nex felis rutrum, faucibus odio sed, ullamcorper risus. Sed id condimentum nequq, at iaculis ex. Praesent faucibus viverra ante id auctor. Pellentesque at risus ut arcu blandit consectetur.</p>
                    </div>

                </div>
                <div class="tm-flex-center col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6">
                    <img src="img/strip-02.jpg" alt="Image" class="img-fluid tm-img">
                </div>
            </section>
            <!-- #activites -->
            <!-- #contact -->
            <section id="tm-section-4" class="row tm-section">

                <?php include '_form.php'; ?>

                <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">

                    <div class="tm-white-curve-right-circle"></div>
                    <div class="tm-white-curve-right-rec"></div>

                    <div class="tm-white-curve-text">

                        <h2 class="tm-section-header textcol-sec-4">Contact Us</h2>
                        <p>Quisque tincidunt ex sit amet metus ultricies, sed lobortis purus finibus. Morbi nex felis rutrum, faucibus odio sed, ullamcorper risus. Sed id condimentum nequq, at iaculis</p>

                        <h3 class="tm-section-subheader green-text">Our Address</h3>
                        <address>
                            110-220 Praesent consectetur, Dictum massa 10550
                        </address>

                        <div class="contact-info-links-container">
                            <span class="green-text contact-info">
                                Tel: <a href="tel:0100200340" class="contact-info-link">010-020-0340</a>
                            </span>
                            <span class="green-text contact-info">
                                Email: <a href="mailto:info@company.com" class="contact-info-link">info@company.com</a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #contact -->

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
