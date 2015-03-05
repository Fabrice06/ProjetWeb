<article class="content">
	<h1>Les voitures !</h1> 
	
	<p><a href="">ajout</a></p>
	
	<ul>
		<?php while ($nRow = $pStmt-> fetch_assoc()) { ?>
			<li><a href="<?= HREF_VEHICULE.'&action=lire&id='.parent::nettoyer($nRow['idVehicule']) ?>"><img
					src="<?= FOLDER_DATA_VEHICULE.parent::nettoyer($nRow['imageVehicule']) ?>" alt="<?= "  ".parent::nettoyer($nRow['nomVehicule']) ?>"><?= "  ".parent::nettoyer($nRow['nomVehicule']) ?></a>
				
				<p><a href="">suppression</a></p>
				
			</li>
		<?php } ?>
	</ul>
</article>