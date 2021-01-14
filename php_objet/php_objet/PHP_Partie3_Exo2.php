<?php 
    include "personnage.php";
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="PHP_Partie3_Exo1CSS.css">
        <title>object</title>
    </head>

    <body>
    
        <?php

            $perso1= new personnage();
            $perso1->afficheVie();

        ?>

    </body>
</html>