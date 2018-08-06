<?php
    include('src/class.upload.php'); //Appel à la classe externe
    $error_extension = "<div class='alert alert-danger' role='alert'>
            File invalide.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
    function validate_extension($extension){
        if($extension == "png" OR $extension == "jpg" OR $extension == "jpeg" OR $extension == "gif" OR $extension == ""){
            return(TRUE);
        }else{
            return(FALSE);
        }
    }
    if(isset($_POST["submit"])){ //Si on appuie sur le button submit
        $image = new upload($_FILES["document"]); //On va chercher le fichier a uploader
        $extension = ($image->file_src_name_ext); //On va chercher l'$extension du fichier
        $validate_extension = (validate_extension($extension)) ? "" : $error_extension;
        if(validate_extension($extension)){ // On verifie le format du fichier
            if($image->uploaded) {//il suffit de lire la doc pour vérifier les fonctions
                $image->file_new_name_body   = ($image->file_src_name_body);
                $image->file_auto_rename = true;
                $image->mime_check = true;
                $image->process('upload/');
                if ($image->processed) {
                    // echo 'image uploaded';
                    toConsole('image uploaded');
                    $image->clean();
                }else {
                    echo 'error : ' . $image->error;
                }
            }
        }
    }
?>
