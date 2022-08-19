<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>
    <h1>Je fais des Regex</h1>
    <?php

    $masque1 = "/ap|pe|ll/";
    // $masque2 = "/[.]/"; 
    // $masque3 = "/[\D]/"; 
    // $masque4 = "/[\s]/"; 
    $chaine = "Je m'appelle Jean-Louis, j'ai 42 ans";

    preg_match_all($masque1, $chaine, $tableau1);
    // preg_match_all($masque2, $chaine, $tableau2);
    // preg_match_all($masque3, $chaine, $tableau3);
    // preg_match_all($masque4, $chaine, $tableau4);

    var_dump($tableau1);
    echo "<br />";
    // var_dump($tableau2);
    // echo "<br />";
    // var_dump($tableau3);
    // echo "<br />";
    // var_dump($tableau4);

    ?>
</body>
</html>