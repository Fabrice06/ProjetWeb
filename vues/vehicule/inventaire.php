<h1>Les voitures !</h1>
<?php while ($nRow = $pStmt-> fetch_assoc()) { ?>
	<p>
		<a href="<?= HREF_VEHICULE.'&action=lire&id='.parent::nettoyer($nRow['idVehicule']) ?>"><?= parent::nettoyer($nRow['nomVehicule']) ?></a>
    </p>
<?php } ?>
