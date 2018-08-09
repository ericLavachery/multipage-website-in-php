<?php
if(isset($_POST["submit"])){
    if ($okThen == 'yes'){
        if ($user['objet'] == 'info') {
            $modalTitle = "Votre demande d'information à bien été envoyée";
        } else {
            $modalTitle = "Votre inscription à bien été envoyée";
        }
        $modalBody = $user['prenom'] . ' ' . $user['nom'] . '<br>Email = ' . $user['email'] . '<br>' . $user['message'];
    }
}
?>
