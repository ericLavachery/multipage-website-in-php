<?php
$teou = 'contact';
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
                        <h2 class="tm-section-header gray-text">About our company</h2>
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
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
                    <h2 class="tm-section-header thin-font col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Contactez-nous</h2>

                    <form action="contact.php" method="post" class="contact-form">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-left">
                            <div class="form-group letitre">
                                <input type="radio" name="titre" id="Mme" value="Mme">
                                <label for="Mme">Mme &nbsp;&nbsp;</label>
                                <input type="radio" name="titre" id="Melle" value="Melle">
                                <label for="Melle">Melle &nbsp;&nbsp;</label>
                                <input type="radio" name="titre" id="Mr" value="Mr">
                                <label for="Mr">Mr &nbsp;&nbsp;</label>
                            </div>
                            <div class="form-group">
                                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom :"  required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom :"  required/>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email :"  required/>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="objet" id="objet">
                                    <option value="">Objet :</option>
                                    <option value="info">Demande d'information</option>
                                    <option value="inscription">Inscription</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <input type="file" id="document" name="document" class="form-control" placeholder="Document :">
                            </div> -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-right">
                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control" rows="10" placeholder="Message :" required></textarea>
                            </div>
                            <!-- <button type="submit" class="btn submit-btn" id="submit">Envoyer</button> -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-contact-form-end">
                            <div class="form-group">
                                <input type="file" id="document" name="document" class="form-control" placeholder="Document :">
                            </div>
                            <button type="submit" class="btn submit-btn" id="submit">Envoyer</button>
                        </div>
                    </form>

                    <!-- <form action="contact.php" method="post" class="contact-form">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-left">
                            <div class="form-group">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                            </div>
                            <div class="form-group">
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-right">
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn submit-btn">Send It Now</button>
                        </div>
                    </form> -->

                </div>

                <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">

                    <div class="tm-white-curve-right-circle"></div>
                    <div class="tm-white-curve-right-rec"></div>

                    <div class="tm-white-curve-text">

                        <h2 class="tm-section-header green-text">Contact Us</h2>
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
