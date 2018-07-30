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
            </div>
            <div class="tableRow">
                <label for="nom" class="formLeftCol">Nom: </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="tableRow">
                <label for="prenom" class="formLeftCol">Prénom: </label>
                <input type="text" nom="prenom" id="prenom">
            </div>
            <div class="tableRow">
                <label for="email" class="formLeftCol">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="tableRow">
                <label for="objet" class="formLeftCol">Objet: </label>
                <select class="contentselect" name="objet" id="objet">
                    <option value=""></option>
                    <option value="info">Demande d'information</option>
                    <option value="inscription">Inscription</option>
                </select>
            </div>
            <div class="tableRow">
                <label for="message" class="formLeftCol">Votre message: </label>
                <textarea name="message" id="message" rows="8" cols="80"></textarea>
            </div>
            <div class="tableRow">
                <label for="document" class="formLeftCol">Document: </label>
                <input type="file" name="document" id="documents">
            </div>
            <div class="tableRow">
                <label for="submit" class="formLeftCol"></label>
                <input type="button" id="submit" value="Envoyer">
            </div>
        </div>
    </fieldset>
</form>
