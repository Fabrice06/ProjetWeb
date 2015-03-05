<article class="content">
	<?php while ($pStmt-> fetch()) { ?>
   	 <h1>Agence <?= parent::nettoyer($nContenuNom) ?></h1>
   	 <p><?= parent::nettoyer($nContenuAdresse) ?></p>
    	<p>Tél : <?= parent::nettoyer($nContenuPhone) ?></p>
    	<p>Mail : <?= parent::nettoyer($nContenuMail) ?></p>
    	<p><?= parent::nettoyer($nContenuHoraire) ?></p>
	<?php } ?>
</article>