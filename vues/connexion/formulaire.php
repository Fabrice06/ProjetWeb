<h1>Bienvenue !</h1>
<aside>
<form method="post" action="<?= $nContenuFormControleur ?>">

	<p><label for="mail">Mail:</label>
		<input name="mail" type="text" required value="<?= $nContenuValueMail ?>"/><?= $nContenuMsgMail ?></p>
					
	<p><label for="mdp">Mot de passe:</label>
		<input name="mdp" type="text" required value="<?= $nContenuValueMdp ?>"/><?= $nContenuMsgMdp ?></p>
		
	<input type="hidden" name="action" value="valider"/>
	
    <input name="valider" value="Valider" type="submit" /><?= $nContenuMsgAccount ?>
</form>
</aside>
<article>
<a href="<?= HREF_CLIENT ?>">Créer un nouveau compte</a>
</article>