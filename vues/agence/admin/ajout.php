// A modifier uniquement le corps du formulaire est valide


<form class="content" method="post" action="<?= $nContenuFormControleur ?>">
	
	<section><h3>Ajouter une agence</h3>
		
		<p><label for="nom">Nom de l'agence :</label>
			<input name="nom" type="text" required value="<?= $nContenuValueNom ?>"/><?= $nContenuMsgNom ?>
		</p>
	
		<p><label for="adresse">Adresse :</label>
			<input name="adresse" type="text" required value="<?= $nContenuValueAdresse ?>"/><?= $nContenuMsgAdresse ?>
		</p>
		
		<p><label for="tel">Téléphone :</label>
			<input name="tel" type="text" required value="<?= $nContenuValuePrenom ?>"/><?= $nContenuMsgPrenom ?>
		</p>
			
		<p><label for="mail">Mail :</label>
			<input name="mail" type="text" required value="<?= $nContenuValueMail ?>"/><?= $nContenuMsgMail ?>
		</p>
						
		<p><label for="horaires">Horaires :</label>
			<input name="horaires" type="text" required value="<?= $nContenuValueMdp ?>"/><?= $nContenuMsgMdp ?>
		</p>
			
		<input type="hidden" name="action" value="nouveau"/>
		
	    <input name="valider" value="Valider" type="submit" /><?= $nContenuMsgAccount ?>
	    
    </section>
</form>