<?php
if ($user["objet"] == 'info') {
    $mailInfos = "<h3>Votre demande d'information à bien été envoyée</h3>";
} else {
    $mailInfos = "<h3>Votre inscription à bien été envoyée</h3>";
}
$mailInfos = $mailInfos . '<p>' . $user["prenom"] . ' ' . $user["nom"] . '<br>Email = ' . $user["email"] . '<br>' . $user["message"] . '</p>';
$mailBody = '<!DOCTYPE html><html lang="fr" dir="ltr"><head><meta charset="utf-8"><title>Melius</title></head><body>' . $mailInfos . '</body></html>'
?>
