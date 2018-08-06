<?php
    if (isset($_POST["submit"])){
        $titre = $_POST["titre"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $objet = $_POST["objet"];
        $message = $_POST["message"];
    }else{
        $titre = "";
        $nom = "";
        $prenom = "";
        $email = "";
        $objet = "";
        $message = "";
    }
    function check_input($x){
        if(isset($_POST["submit"]) AND empty($x)){
            return(FALSE);
        }else{
            return(TRUE);
        }
    }

    function display_error($x){
        if(!check_input($x)){
            echo("ERORR");
        }
    }

    if(isset($_POST["submit"]) AND check_input($message) AND check_input($email)){
        $san_titre = check_input($titre) ? filter_var($titre,FILTER_SANITIZE_STRING) : "";
        $san_nom = check_input($nom) ? filter_var($nom,FILTER_SANITIZE_STRING) : "";
        $san_prenom = check_input($prenom) ? filter_var($prenom,FILTER_SANITIZE_STRING) : "";
        $san_email = check_input($email) ? filter_var($email,FILTER_SANITIZE_EMAIL) : "";
        $san_objet = check_input($objet) ? filter_var($objet,FILTER_SANITIZE_STRING) : "";
        $san_message = check_input($message) ? filter_var($message,FILTER_SANITIZE_STRING) : "";
        if(isset($san_titre, $san_nom, $san_prenom, $san_email, $san_objet, $san_message)){
            $user=["titre" => $san_titre,
                "nom" => $san_nom,
                "prenom" => $san_prenom,
                "email" => $san_email,
                "date" => date('H:i:s l j/m/Y'),
                "objet" => $san_objet,
                "message" => $san_message];
            // print_r($user);
            toConsole($user);
        }
    }
?>
