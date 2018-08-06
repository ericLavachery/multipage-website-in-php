<?php
    require("upload.php");
    require("sterilize.php");
?>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
    <h2 class="tm-section-header thin-font col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Contactez-nous</h2>

    <form action="contact.php" method="post" class="contact-form" enctype="multipart/form-data">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-contact-form-full">
            <div class="form-group letitre" >
                <input type="radio" name="titre" id="Mme" value="Mme"> <label for="Mme">Mme &nbsp;</label>
                <input type="radio" name="titre" id="Melle" value="Melle"> <label for="Melle">Melle &nbsp;</label>
                <input type="radio" name="titre" id="Mr" value="Mr"> <label for="Mr">Mr &nbsp;</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-contact-form-left">
            <div class="form-group">
                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom :"
                required="true" onblur="validate(this)" onfocus="validate(this)" value="<?php echo($prenom) ?>"/>
            </div>
            <div class="form-group">
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom :"
                required="true" onblur="validate(this)" onfocus="validate(this)" value="<?php echo($nom) ?>"/>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email"  class="form-control" placeholder="Email :"
                required="true" onblur="validate(this)" onfocus="validate(this)" value="<?php echo($email) ?>"/>
                <?php echo($validate_email); ?>
            </div>
            <div class="form-group">
                <select class="form-control" name="objet" id="objet">
                    <option value="">Objet :</option>
                    <option value="info">Demande d'information</option>
                    <option value="inscription">Inscription</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-contact-form-right">
            <div class="form-group">
                <textarea id="message" name="message" class="form-control" rows="8" placeholder="Message :"
                required="true" onblur="validate(this)" onfocus="validate(this)"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-contact-form-full">
            <div class="form-group">
                <input type="file" id="document" name="document" class="form-control" placeholder="Document :">
                <?php echo($validate_extension); ?>
            </div>
            <button type="submit" name="submit" class="btn submit-btn" id="submit">Envoyer</button>
        </div>
    </form>
    <script>
        
        function validate(input){
            let error_message;
            switch(input.id){
                case ("prenom") :
                    error_message = "Ton Prénom.";
                    break;
                case ("nom") :
                    error_message = "Ton Nom.";
                    break;
                case ("email") :
                    error_message = "Ton Email.";
                    break;
                case ("message") :
                    error_message = "Ton Message.";
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
