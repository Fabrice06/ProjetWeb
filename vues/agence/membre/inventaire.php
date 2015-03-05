<article class="content">
	<h1>Les agences !</h1>
	<ul>
		<?php while ($nRow = $pStmt-> fetch_assoc()) { ?>
			<li><a href="<?= HREF_AGENCE.'&action=lire&id='.parent::nettoyer($nRow['idAgence']) ?>">
				<img src="<?= FOLDER_DATA_AGENCE.parent::nettoyer($nRow['imageAgence']) ?>" alt="<?= "Agence ".parent::nettoyer($nRow['nomAgence']) ?>">
			<?="  ".parent::nettoyer($nRow['nomAgence']) ?></a></p>
			
			<p><a href="">réserver</a></p>
			
			</li>
		<?php } ?>
	</ul>
</article>