<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet"  media="screen" type="text/css" href="<?= FOLDER_CSS.'style_screen.css' ?>" />
<title><?= $titrePage ?></title>
</head>
	
<body>
<div class="container">

	<header>
		<h1><a href="<?= HREF_HOME ?>">Ben voyons ! <strong>élu produit de l'année</strong></a></h1>
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
			<h2>Featured Article</h2>
			<h3><a href="#">aaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaa a a a aaaaaaaaa</a></h3>
		</hgroup>
		<p>bbbbbbbbbbbb bbbbbb bbbbbbbb bbbb  b b b b bbbbbbbbbbbbb</p>
	</article></aside>

	<section class="content">
		<?= $nPageBlocContenu ?>
	</section>

 	<footer>
		<ul>
	        <li><h2>gauche</h2></li>
	        <li><a href="#" rel="external">xxxxxxx</a></li>
	        <li><a href="#" rel="external">xxxxxxxx</a></li>
	        <li><a href="#" rel="external">xxxxxxxxx</a></li>
      	</ul>
      	<ul>
	        <li><h2>&nbsp;</h2></li>
	        <li><a href="#" rel="external">yy</a></li>
	        <li><a href="#" rel="external">yyyyyyyyyyyy</a></li>
	        <li><a href="#" rel="external">yyyyyyy</a></li>
	        <li><a href="#" rel="external">yyyyyyyy</a></li>
	        <li><a href="#" rel="external">yyyyyyyyyyyyyyy</a></li>
      	</ul>
      	<ul>
	        <li><h2>droite</h2></li>
	        <li><a href="#" rel="external">zzzzz</a></li>
	        <li><a href="#" rel="external">zzzzzzzzz</a></li>
	        <li><a href="#" rel="external">zzzz</a></li>
	        <li><a href="#" rel="external">zzzzzzz</a></li>
      	</ul>
	</footer>
		
</div>
</body>
</html>