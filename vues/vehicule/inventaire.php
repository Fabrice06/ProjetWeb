<h1>Les voitures !</h1>
<?php while ($nRow = $pStmt-> fetch_assoc()) { ?>
	<p>
		<a href="<?= HREF_VEHICULE.'&action=lire&id='.parent::nettoyer($nRow['id']) ?>"><?= parent::nettoyer($nRow['nom']) ?></a>
    </p>
<?php } ?>
