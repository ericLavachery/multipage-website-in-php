<?php
if(isset($_POST["submit"])){
    if ($user_info["error"] AND $user_file["error"]){
        $user = (array_merge($user_info,$user_file));
        print_r("user log".$user);
        $json = file_get_contents("log.json");//Récupération du fichier .json en str
        $json_utile = json_decode($json, TRUE);//Transformation du str en tableau
        $json_utile[] = $user;//On ajoute les données de l'utilisateur dans la base de données
        $json_utile_encode = json_encode($json_utile);//Transformation du tableau en str
        file_put_contents("log.json", $json_utile_encode);
    }
}
?>
