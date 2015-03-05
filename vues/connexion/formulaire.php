
<form class="content" method="post" action="<?= $nContenuFormControleur ?>">
<section><h3>accéder à mon compte</h3>

	<p><label for="mail">Mail:</label>
		<input name="mail" type="text" required value="<?= $nContenuValueMail ?>"/><?= $nContenuMsgMail ?></p>
					
	<p><label for="mdp">Mot de passe:</label>
		<input name="mdp" type="password" required value="<?= $nContenuValueMdp ?>"/><?= $nContenuMsgMdp ?></p>
		
	<input type="hidden" name="action" value="valider"/>
	
    <input name="valider" value="Valider" type="submit" /><?= $nContenuMsgAccount ?>
    </section>
    <section><h3>pas encore client</h3><a href="<?= HREF_CLIENT ?>">Créer un nouveau compte</a></section>
</form>

