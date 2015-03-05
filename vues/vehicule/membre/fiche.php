<article class="content">
<?php while ($pStmt-> fetch()) { ?>
    <h1>Nom :  <?= parent::nettoyer($nContenuNom) ?></h1>
	<p>Nombre de places :  <?= parent::nettoyer($nContenuNbPlace) ?></p>
	<p>Motorisation :  <?= parent::nettoyer($nContenuMotorisation) ?></p>
	<p>Description :  <?= parent::nettoyer($nContenuDescription) ?></p>
	<p>Prix :  <?= parent::nettoyer($nContenuPrix) ?> euro</p>
<?php } ?>
</article>