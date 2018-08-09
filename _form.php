<?php
    require("upload.php");
    require("sterilize.php");
    require("_mailbody.php");
    require("log.php");
    require("mail.php");
    require("_modal.php");
?>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
    <h2 class="tm-section-header thin-font col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Contactez-nous</h2>

    <form action="contact.php" method="post" class="contact-form" enctype="multipart/form-data">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-contact-form-full">
            <div class="form-group letitre" >
                <input type="radio" name="titre" id="Mme" value="Mme"<?php if (isset($titre) && $titre == 'Mme') {echo(' checked');} ?>> <label for="Mme">Mme &nbsp;</label>
                <input type="radio" name="titre" id="Melle" value="Melle"<?php if (isset($titre) && $titre == 'Melle') {echo(' checked');} ?>> <label for="Melle">Melle &nbsp;</label>
                <input type="radio" name="titre" id="Mr" value="Mr"<?php if (isset($titre) && $titre == 'Mr') {echo(' checked');} ?>> <label for="Mr">Mr &nbsp;</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-contact-form-left">
            <div class="form-group">
                <label class="noShow" for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom :"
                required="true" value="<?php if (isset($prenom)) {echo($prenom);} ?>" onblur="validate(this)" onfocus="validate(this)"/>
            </div>
            <div class="form-group">
                <label class="noShow" for="nom">Nom</label>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom :"
                required="true" value="<?php if (isset($nom)) {echo($nom);} ?>" onblur="validate(this)" onfocus="validate(this)"/>
            </div>
            <div class="form-group">
                <label class="noShow" for="email">Email</label>
                <input type="email" id="email" name="email"  class="form-control" placeholder="Email :"
                required="true" value="<?php if (isset($email)) {echo($email);} ?>" onblur="validate(this)" onfocus="validate(this)"/>
                <?php if (isset($validate_email)) {echo($validate_email);} ?>
            </div>
            <div class="form-group">
                <label class="noShow" for="objet">Objet</label>
                <select class="form-control" name="objet" id="objet">
                    <option value="" selected>Objet :</option>
                    <option value="info"<?php if (isset($objet) && $objet == 'info') {echo(' selected');} ?>>Demande d'information</option>
                    <option value="inscription"<?php if (isset($objet) && $objet == 'inscription') {echo(' selected');} ?>>Inscription</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-contact-form-right">
            <div class="form-group">
                <label class="noShow" for="message">Message</label>
                <textarea id="message" name="message" class="form-control" rows="8" placeholder="Message :"
                required="true" onblur="validate(this)" onfocus="validate(this)"><?php if (isset($message)) {echo($message);} ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-contact-form-full">
            <div class="form-group">
                <label class="noShow" for="document">Document</label>
                <input type="file" id="document" name="document" class="form-control" placeholder="Document :"
                accept=".jpg, .jpeg, .png, .gif">
                <?php if (isset($validate_extension)) {echo($validate_extension);} ?>
            </div>
            <div class="form-group leformat">
                <span class="thin-font">Format de réponse désiré : &nbsp;</span>
                <nobr>
                    <input type="radio" name="format" id="HTML" value="HTML" checked> <label for="HTML">HTML &nbsp;</label>
                    <input type="radio" name="format" id="TXT" value="TXT"<?php if (isset($format) && $format == 'TXT') {echo(' checked');} ?>> <label for="TXT">Texte &nbsp;</label>
                </nobr>
            </div>
            <button type="submit" name="submit" class="btn submit-btn" id="submit">Envoyer</button>
        </div>
    </form>

    <script>

        function validate(input){
            let error_message;
            switch(input.id){
                case ("prenom") :
                    error_message = "Veuillez entrer votre prénom";
                    break;
                case ("nom") :
                    error_message = "Veuillez entrer votre nom de famille";
                    break;
                case ("email") :
                    error_message = "Veuillez entrer votre email";
                    break;
                case ("message") :
                    error_message = "Veuillez écrire votre message ici";
                    break;
                default :
                    error_message = "";
                    break;
            }
            if(input.value == ""){
                input.setCustomValidity(error_message);
            }else{
                input.setCustomValidity("");
            }
        }
    </script>
</div>
