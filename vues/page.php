<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet"  media="screen" type="text/css" href="<?= FOLDER_CSS.'style.css' ?>" />
<title><?= $titrePage ?></title>
</head>
	
<body>
<div class="container">

	<header>
		<h1><a href="<?= HREF_HOME ?>">LocaLoco ! <strong>la location Fun</strong></a></h1>
		<nav><ul>
			<li><a href="<?= HREF_HOME ?>">Accueil</a></li>
			<li><a href="<?= HREF_RESERVATION ?>">Réserver</a></li>
			<li><a href="<?= HREF_AGENCE ?>">Agences</a></li>
			<li><a href="<?= HREF_VEHICULE ?>">Véhicules</a></li>
			<li><a href="<?= HREF_SERVICE ?>">Services</a></li>
			<li><a href="<?= HREF_COMPTE ?>"><?= $nPageTagCompte ?></a></li>
		</ul></nav>
	</header>
		
	<aside><article>
		<hgroup>
			<h2>Location de voiture</h2>
			<h3><a href="<?= HREF_VEHICULE ?>">Faites vous plaisir !!!!</a></h3>
		</hgroup>
		<p>Louez une voiture FUN ....</p>
	</article></aside>

	
		<?= $nPageBlocContenu ?>
	

 	<footer>
		<ul>
	        <li><h2>Divers</h2></li>
	        <li><a href="<?= HREF_HOME ?>" rel="external">Accueil</a></li>
	        <li><a href="<?= HREF_RESERVATION ?>" rel="external">Réserver</a></li>
	        <li><a href="<?= HREF_COMPTE ?>" rel="external">Mon compte</a></li>
      	</ul>
      	<ul>
	        <li><h2>&nbsp;</h2></li>
	        <li><a href="<?= HREF_AGENCE ?>" rel="external">Agence</a></li>
	        <li><a href="<?= HREF_VEHICULE ?>" rel="external">Véhicules</a></li>
	        <li><a href="<?= HREF_SERVICE ?>" rel="external">Services</a></li>
      	</ul>
      	<ul>
	        <li><h2>Site</h2></li>
	        <li><a href="<?= HREF_RECRUTE ?>" rel="external">LocaLoco recrute</a></li>
	        <li><a href="<?= HREF_PARTENAIRE ?>" rel="external">Nos partenaires</a></li>
      	</ul>
	</footer>
		
</div>
</body>
</html>