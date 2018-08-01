<?php
    $upload_dir = "upload/"; //Dossier de stockage.
    $upload_file = $upload_dir . basename($_FILE["userfile"]["name"]);
    if (move_uploaded_file($_FILE["userfile"]["temp-name"],$upload_file)){
        echo("Perfecto");
    }
?>