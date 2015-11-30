<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reveur créée</title>
    </head>
    <form method="post" action="index.php?controller=Reveur&action=readAll">
    <body>
        <?php
          echo "<p> Le Reveur de numReveur {$numReveur} a bien été créée.</p>";         
        ?>
        <p><input type="submit" value="Voir la liste des Reveur" /></p>
    </body>
</html>
