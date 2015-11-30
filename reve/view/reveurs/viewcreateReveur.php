<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Création d'un Reveur</title>
    </head>
    <body>
		<form method="post" action="index.php?controller=Reveur&action=created">
			<fieldset>
				<legend> Mon formulaire:</legend> 
					<p>
						<label for="numReveur ">numReveur </label>:
						<input type="text" placeholder="Ex : 2099za4466" name="numReveur" id="numReveur " required/>
					</p>
					<p>
						<label for="loginReveur">loginReveur</label>:
						<input type="text" placeholder="Ex : prince_avec_cravache" name="loginReveur" id="loginReveur" required/>
					</p> 
					<p>
						<label for="mdpReveur">mdpReveur</label>:
						<input type="text" placeholder="Ex : erotique" name="mdpReveur" id="mdpReveur" required/>
					</p>
					<p>
						<label for="dateNaissanceReveur ">dateNaissanceReveur </label>:
						<input type="number" placeholder="Ex : 101488" name="dateNaissanceReveur " id="dateNaissanceReveur" required/>
					</p>	
					<p>
						<input type="submit" value="Envoyer" />
					</p>
			</fieldset>  
		</form>

    </body>
</html>