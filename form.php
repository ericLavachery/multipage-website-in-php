<form>
    <fieldset>
        <legend>Contact</legend>
        <div class="tableContainer">
            <div class="tableRow">
                <label for="task">Titre: </label>
                <input type="radio" name="titre" id="Mme" value="Mme">Mme
                <input type="radio" name="titre" id="Melle" value="Melle">Melle
                <input type="radio" name="titre" id="Mr" value="Mr">Mr
            </div>
            <div class="tableRow">
                <label for="nom">Nom: </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="tableRow">
                <label for="prenom">Prénom: </label>
                <input type="text" nom="prenom" id="prenom">
            </div>
            <div class="tableRow">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="tableRow">
                <label for="objet">Objet: </label>
                <select class="contentselect" name="objet" id="objet">
                    <option value=""></option>
                    <option value="info">Demande d'information</option>
                    <option value="inscription">Inscription</option>
                </select>
            </div>
            <div class="tableRow">
                <label for="message">Votre message: </label>
                <textarea name="message" id="message" rows="8" cols="80"></textarea>
            </div>
            <div class="tableRow">
                <label for="document">Document: </label>
                <input type="file" name="document" id="documents">
            </div>
            <div class="tableRow">
                <label for="submit"></label>
                <input type="button" id="submit" value="Envoyer">
            </div>
        </div>
    </fieldset>
</form>
