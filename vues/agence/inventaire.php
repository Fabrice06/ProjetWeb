<h1>Les agences !</h1>
<?php while ($nRow = $pStmt-> fetch_assoc()) { ?>
	<p>
		<a href="<?= HREF_AGENCE.'&action=lire&id='.parent::nettoyer($nRow['idAgence']) ?>"><?= parent::nettoyer($nRow['nomAgence']) ?></a>
    </p>
<?php } ?>
