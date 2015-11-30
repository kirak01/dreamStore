<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Création d'un Reve</title>
    </head>
    <body>
		<form method="post" action="index.php?controller=reve&action=created">
			<fieldset>
				<legend> Mon formulaire:</legend> 
					<p>
						<label for="numReve ">numReve </label>:
						<input type="text" placeholder="Ex : 2099za4466" name="numReve" id="numReve " required/>
					</p>
					<p>
						<label for="nomReve">nomReve</label>:
						<input type="text" placeholder="Ex : prince_avec_cravache" name="nomReve" id="nomReve" required/>
					</p> 
					<p>
						<label for="catReve">catReve</label>:
						<input type="text" placeholder="Ex : erotique" name="catReve" id="catReve" required/>
					</p>
					<p>
						<label for="prix ">prix </label>:
						<input type="number" placeholder="Ex : 101488" name="prix " id="prix" required/>
					</p>
					<p>
						<label for="description ">description </label>:
						<input type="text" placeholder="Ex : Bleu" name="description " id="description " required/>
					</p>	
					<p>
						<input type="submit" value="Envoyer" />
					</p>
			</fieldset>  
		</form>

    </body>
</html>