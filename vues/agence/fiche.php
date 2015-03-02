<?php while ($pStmt-> fetch()) { ?>
    <h1><?= parent::nettoyer($nContenuNom) ?></h1>
    <p><?= parent::nettoyer($nContenuAdresse) ?></p>
    <p><?= parent::nettoyer($nContenuPhone) ?></p>
    <p><?= parent::nettoyer($nContenuMail) ?></p>
    <p><?= parent::nettoyer($nContenuHoraire) ?></p>
<?php } ?>