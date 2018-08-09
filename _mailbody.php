<?php
if(isset($_POST["submit"])){
    if ($user_info["objet"] == 'info') {
        $mailInfos = "<h3>Votre demande d'information à bien été envoyée</h3>";
    } else {
        $mailInfos = "<h3>Votre inscription à bien été envoyée</h3>";
    }
    setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
    $dateEtHeure = strftime('%A %d %B %Y, %H:%M',strtotime($user_info["date"]));
    $mailInfos = $mailInfos . '<p>' . $user_info["prenom"] . ' ' . $user_info["nom"] . '<br>Format de réponse souhaité = ' . $user_info["format"] . '<br>' . $user_info["message"] . '<br>' . $dateEtHeure . '</p>';
    $mailBody = '<!DOCTYPE html><html lang="fr" dir="ltr"><head><meta charset="utf-8"><title>Melius</title></head><body>' . $mailInfos . '</body></html>';
    toConsole($mailBody);
}
?>
