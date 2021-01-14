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

            $perso1= new personnage("Cleme",100,50); 
            $perso2=new personnage("lulu",100,50);
            
            $perso1->affiche();
            $perso2->affiche();

            $perso2->attaque($perso1);
            $perso2->defense($perso1);
            $perso1->attaque($perso2);

            $perso1->affichePV();
            $perso2->affichePV();


        ?>

    </body>
</html>