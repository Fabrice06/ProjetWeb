<article class="content">
<?php while ($pStmt-> fetch()) { ?>
    <h1><?= parent::nettoyer($nContenuNom) ?></h1>
	<p><?= parent::nettoyer($nContenuNbPlace) ?></p>
	<p><?= parent::nettoyer($nContenuClasse) ?></p>
<?php } ?>
</article>