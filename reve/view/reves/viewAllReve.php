<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des rêves</title>
    </head>
        
    <body>
        <?php
        foreach ($tab_v as $v) {
			echo "<p> <a href = index.php?controller=reve&action=read&numReve={$v->getNumReve()}>{$v->getNomReve()}</a></p>" ;
		}
        ?>
    </body>
</html>

