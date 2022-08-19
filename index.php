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

        $masque = '/Michel/'; 
        $tableau = ['Michel', 'Jean Michel', 'pieree michel', 'Robert', 'Arthur'];
        $resultat = preg_grep($masque, $tableau);

        var_dump($resultat);

       



    ?>
</body>
</html>

