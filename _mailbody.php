<?php
if(isset($_POST["submit"])){
    if ($user_info["format"] == 'HTML') {
        if ($user_info["objet"] == 'info') {
            $mailInfos = "<h3>Votre demande d'information à bien été envoyée</h3>";
        } else {
            $mailInfos = "<h3>Votre inscription à bien été envoyée</h3>";
        }
        $mailInfos = $mailInfos . '<p>' . $user_info["prenom"] . ' ' . $user_info["nom"] . '<br>Format de réponse souhaité = ' . $user_info["format"] . '<br>' . $user_info["message"] . '<br>' . $user_info["date"] . '</p>';
        $mailBody = '<!DOCTYPE html><html lang="fr" dir="ltr"><head><meta charset="utf-8"><title>Melius</title></head><body style="font-family: arial;"><table><tr><td style="color: #FFFFFF; background-color: #DD0028; padding: 10px; font-family: arial; font-size: 25px;">Melius</td></tr></table>' . $mailInfos . '</body></html>';
    } else {
        if ($user_info["objet"] == 'info') {
            $mailInfos = "Votre demande d'information à bien été envoyée";
        } else {
            $mailInfos = "Votre inscription à bien été envoyée";
        }
        $mailInfos = ' | ' . $mailInfos . ' ' . $user_info["prenom"] . ' ' . $user_info["nom"] . ' | Format de réponse souhaité = ' . $user_info["format"] . ' | Message = ' . $user_info["message"] . ' |
         ' . $user_info["date"];
        $mailBody = $mailInfos;
    }
}
?>
