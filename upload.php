<?php
    include('src/class.upload.php'); //Appel à la classe externe
    if(isset($_POST["submit"]) AND !empty($_FILES["document"])){ //Si on appuie sur le button submit
        print_r($_FILES["document"]);
        $image = new upload($_FILES["document"]); //On va chercher le fichier a uploader
        $extension = ($image->file_src_name_ext); //On va chercher l'$extension du fichier
        if($extension == "png" OR $extension == "jpg" OR $extension == "jpeg" OR $extension == "gif"){ // On verifie le format du fichier
            if($image->uploaded) {//il suffit de lire la doc pour vérifier les fonctions
                $image->file_new_name_body   = ($image->file_src_name);
                $image->file_auto_rename = true;
                $image->mime_check = true;
                $image->process('upload/');
                if ($image->processed) {
                    echo 'image uploaded';
                    $image->clean();
                }else {
                    echo 'error : ' . $image->error;
                }
            }
        }else{
            echo("Mauvais format");
        }
    }
?>