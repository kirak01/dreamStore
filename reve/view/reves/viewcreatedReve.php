<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reve créée</title>
    </head>
    <form method="post" action="index.php?controller=Reve&action=readAll">
    <body>
        <?php
          echo "<p> Le Revede numReve {$numReve} a bien été créée.</p>";         
        ?>
        <p><input type="submit" value="Voir la liste des Reve" /></p>
    </body>
</html>
