<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Créer un utilisateur </title>
    </head>
    <body>
		<form method="post" action="../../controller/routeur.php?action=created">
			<fieldset>
				<legend>Utilisateur :</legend>
				<p>
					<label for="couleur_id">nomUtilisateur</label> :
					<input type="text" placeholder="Ex : Andrie" name="nomUtilisateur" id="nomUtilisateur_id" required/>
				</p>
				<p>
					<label for="marque_id">prenomUtilisateur</label> :
					<input type="text" placeholder="Ex : Alex" name="prenomUtilisateur" id="prenomUtilisateur_id" required/>
				</p>
        <p>
          <label for="marque_id">mailUtilisateur</label> :
          <input type="text" placeholder="Ex : canard@and.coin" name="mailUtilisateur" id="mailUtilisateur_id" required/>
        </p>
        <p>
          <label for="marque_id">ageUtilisateur</label> :
          <input type="text" placeholder="Ex : 16" name="ageUtilisateur" id="ageUtilisateur_id" required/>
        </p>
        <p>
          <label for="marque_id">mdpUtilisateur</label> :
          <input type="text" placeholder="Ex : *******" name="mdpUtilisateur" id="mdpUtilisateur_id" required/>
        </p>
        <p>
          <label for="marque_id">idRole</label> :
          <input type="text" placeholder="Ex : 0" name="idRole" id="idRole_id" required/>
        </p>
				<p>
					<input type="submit" value="Envoyer" />
				</p>
			</fieldset>
		</form>
	</body>
</html>