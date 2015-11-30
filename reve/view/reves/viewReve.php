<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Détails du rêve</title>
    </head>
        

    <body>
        <?php
          echo "<p> Le rêve numéro {$v->getNumReve()}: {$v->getNomReve()}, fait partie de la catégorie {$v->getCatReve()}.</p>
          <br>
          <p>{$v->getDescriptionReve()}</p>
          <br>
          <p>Prix : {$v->getPrixReve()}</p>";
        ?>
        "<a href =index.php?controller=reve&action=readAll> Retour </a>"
    </body>
</html>

