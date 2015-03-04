<form class="content" method="post" action="<?= $nContenuFormControleur ?>">
	<section><h3>Créer mon compte</h3>
		<p><label for="nom">Nom:</label>
			<input name="nom" type="text" required value="<?= $nContenuValueNom ?>"/><?= $nContenuMsgNom ?></p>
		
		<p><label for="prenom">Prénom:</label>
			<input name="prenom" type="text" required value="<?= $nContenuValuePrenom ?>"/><?= $nContenuMsgPrenom ?></p>
	
	<p><label for="adresse">Adresse:</label>
		<input name="adresse" type="text" required value="<?= $nContenuValueAdresse ?>"/><?= $nContenuMsgAdresse ?></p>
		
	<p><label for="mail">Mail:</label>
		<input name="mail" type="text" required value="<?= $nContenuValueMail ?>"/><?= $nContenuMsgMail ?></p>
					
	<p><label for="mdp">Mot de passe:</label>
		<input name="mdp" type="text" required value="<?= $nContenuValueMdp ?>"/><?= $nContenuMsgMdp ?></p>
		
	<input type="hidden" name="action" value="nouveau"/>
	
    <input name="valider" value="Valider" type="submit" /><?= $nContenuMsgAccount ?>
    </section>
</form>