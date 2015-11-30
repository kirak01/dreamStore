<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des rêveurs</title>
    </head>
        
    <body>
        <?php
        foreach ($tab_v as $v) {
			echo "<p> <a href = index.php?controller=reveur&action=read&numReveur={$v->getNumReveur()}>{$v->getloginReveur()}</a></p>" ;
		}
        ?>
    </body>
</html>

