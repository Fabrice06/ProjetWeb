<?php $pStmt-> bind_result($nNom, $nNbPlace, $nClasse); ?>
<?php while ($pStmt-> fetch()) { ?>
    <h1><?= parent::nettoyer($nNom) ?></h1>
    <p><?= parent::nettoyer($nNbPlace) ?></p>
    <p><?= parent::nettoyer($nClasse) ?></p>
<?php } ?>