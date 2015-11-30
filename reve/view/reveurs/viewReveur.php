<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Détails du rêveur</title>
    </head>
        

    <body>
        <?php
          echo "<p> Le rêveur numéro {$v->getNumReveur()}: {$v->getloginReveur()}, a pour mot de passe {$v->getmdpReve()}.</p>
          <br>
          <p> il est nait le {$v->getdateNaissanceReveur()}</p>"
        
        "<a href =index.php?controller=reve&action=readAll> Retour </a>"
        ?>
    </body>
</html>

