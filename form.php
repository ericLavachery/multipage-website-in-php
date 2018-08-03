<?php
    require("sterilize.php");
    require("upload.php");
    require("mail.php")
?>
<form enctype="multipart/form-data" method="post" action="contact.php">
    <fieldset>
        <legend>Contact</legend>
        <div class="tableContainer">
            <div class="tableRow">
                <label for="task" class="formLeftCol">Titre: </label>
                <input type="radio" name="titre" id="Mme" value="Mme">
                <label for="Mme">Mme</label>
                <input type="radio" name="titre" id="Melle" value="Melle">
                <label for="Melle">Melle</label>
                <input type="radio" name="titre" id="Mr" value="Mr">
                <label for="Mr">Mr</label>
                <?php display_error($_POST["titre"]) ?>
            </div>
            <div class="tableRow">
                <label for="nom" class="formLeftCol">Nom: </label>
                <input type="text" name="nom" id="nom" value=<?php echo($nom) ?>>
                <?php display_error($_POST["nom"]) ?>
            </div>
            <div class="tableRow">
                <label for="prenom" class="formLeftCol">Prénom: </label>
                <input type="text" name="prenom" id="prenom" value=<?php echo($prenom) ?>>
                <?php display_error($_POST["prenom"]) ?>
            </div>
            <div class="tableRow">
                <label for="email" class="formLeftCol">Email: </label>
                <input type="email" name="email" id="email" value=<?php echo($email) ?>>
                <?php display_error($_POST["email"]) ?>
            </div>
            <div class="tableRow">
                <label for="objet" class="formLeftCol">Objet: </label>
                <select class="contentSelect" name="objet" id="objet">
                    <option value=""></option>
                    <option value="info">Demande d'information</option>
                    <option value="inscription">Inscription</option>
                </select>
                <?php display_error($_POST["objet"]) ?>
            </div>
            <div class="tableRow">
                <label for="message" class="formLeftCol">Votre message: </label>
                <textarea name="message" id="message" rows="8" cols="80"></textarea>
                <?php display_error($_POST["message"]) ?>
            </div>
            <div class="tableRow">
                <label for="document" class="formLeftCol">Document: </label>
                <input type="file" name="document" id="documents">
            </div>
            <div class="tableRow">
                <label for="submit" class="formLeftCol"></label>
                <input type="submit" name="submit" value="Envoyer">
            </div>
        </div>
    </fieldset>
</form>