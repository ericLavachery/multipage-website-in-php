<?php
if(isset($_POST["submit"])){
    if ($user_info["error"] && $user_file["error"]){
        $okThen = 'yes';
        if ($objet == 'info') {
            $modalTitle = "Votre demande d'information à bien été envoyée";
        } else {
            $modalTitle = "Votre inscription à bien été envoyée";
        }
        $modalBody = $prenom . ' ' . $nom . '<br>Email = ' . $email . '<br>' . $message;
    }
}
?>
