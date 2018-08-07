<?php
    function check_input($x){
        if(isset($_POST["submit"]) AND empty($x)){
            return(FALSE);
        }else{
            return(TRUE);
        }
    }
    $error_message = "<div class='alert alert-danger' role='alert'>
            Email invalide.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";

    if(isset($_POST["submit"])){
        $titre = check_input($_POST["titre"]) ? filter_var($_POST["titre"],FILTER_SANITIZE_STRING) : "";
        $nom = check_input($_POST["nom"]) ? filter_var($_POST["nom"],FILTER_SANITIZE_STRING) : "";
        $prenom = check_input($_POST["prenom"]) ? filter_var($_POST["prenom"],FILTER_SANITIZE_STRING) : "";
        $email = check_input($_POST["email"]) ? filter_var($_POST["email"],FILTER_SANITIZE_EMAIL) : "";
        $objet = check_input($_POST["objet"]) ? filter_var($_POST["objet"],FILTER_SANITIZE_STRING) : "";
        $message = check_input($_POST["message"]) ? filter_var($_POST["message"],FILTER_SANITIZE_STRING) : "";
        $format = check_input($_POST["format"]) ? filter_var($_POST["format"],FILTER_SANITIZE_STRING) : "";
        $validate_email = (filter_var($email,FILTER_VALIDATE_EMAIL) ? "" : $error_message);
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $user=["titre" => $titre,
                "nom" => $nom,
                "prenom" => $prenom,
                "email" => $email,
                "date" => date('H:i:s l j/m/Y'),
                "objet" => $objet,
                "message" => $message,
                "format" => $format];
            // print_r($user);
            toConsole($user);
        }
    }



?>
