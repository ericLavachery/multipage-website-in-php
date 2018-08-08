<?php
$teou = 'Contact';
include '_head.php';
?>
<body>
    <div class="container tm-container">
        <?php include '_navbar.php'; ?>
        <!-- page content -->
        <div class="tm-page-content">

            <!-- #contact -->
            <section id="tm-section-4" class="row tm-section">

                <?php include '_form.php'; ?>

                <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">

                    <div class="tm-white-curve-right-circle"></div>
                    <div class="tm-white-curve-right-rec"></div>

                    <div class="tm-white-curve-text">
                        <h2 class="tm-section-header textcol-sec-4">Contact</h2>
                        <p class="thin-font"></p>

                        <h3 class="tm-section-subheader green-text">Our Address</h3>
                        <address>
                            48 rue d'Oultremont, B - 1040 Bruxelles
                        </address>
                        <div class="contact-info-links-container">
                            <span class="green-text contact-info">
                                Tel: <a href="tel:3227343149" class="contact-info-link">32.(0)2.734.31.49</a>
                            </span>
                            <span class="green-text contact-info">
                                Email: <a href="mailto:info@melius.be" class="contact-info-link">info@melius.be</a>
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

    <?php include '_js.php'; ?>

</body>
</html>
