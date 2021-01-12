<?php 
    include "user.php";
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

            $User1= new User();
            $User1->afficheUser(); 

        ?>


        <div>

            <table border="1" class="color">
                <tr>
                    <tr>
                         <td>user</td>
                    </tr>   
                    <td>
                        <p>Nom : </p>
                        <p>Prenom : </p>
                    </td>

                    <tr>
                        <td>afficheUser()</td>
                    </tr>
                </tr> 
                
            </table>
        </div>

    </body>
</html>