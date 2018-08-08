<?php
// petite fonction pour écrire dans la console en php
function toConsole($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    echo "<script>console.log('Debug: " . $output . "');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#DD0028"/>
    <meta name="description" content="Melius, école supérieure de gestion et communication.">
    <title>Melius | <?= $teou ?></title>
    <!-- Strip http://www.templatemo.com/tm-482-strip -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mq.css">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="img/fav_32.png" />
</head>
