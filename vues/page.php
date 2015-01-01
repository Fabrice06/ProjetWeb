<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <link rel="stylesheet"  media="screen" type="text/css" href="<?= FOLDER_CSS.'five.css' ?>" />

	    <title><?= $titrePage ?></title>
	    
	</head>
	
	<body>
		<header id="banner" class="body">
			<h1><a href="<?= HREF_HOME ?>">Ben voyons ! <strong>élu produit de l'année</strong></a></h1>
		 
			<nav><ul>
				<li><a href="<?= HREF_HOME ?>">Accueil</a></li>
				<li><a href="<?= HREF_RESERVATION ?>">Réserver</a></li>
				<li><a href="<?= HREF_AGENCE ?>">Agences</a></li>
				<li><a href="<?= HREF_VEHICULE ?>">Véhicules</a></li>
				<li><a href="<?= HREF_SERVICE ?>">Services</a></li>
				<li><a href="<?= HREF_COMPTE ?>"><?= $nPageTagCompte ?></a></li>
			</ul></nav>
		 
		</header><!-- /#banner -->
		
		<aside id="featured" class="body"><article>
			<figure>
				<img src="images/temp/sm-logo.gif" alt="Smashing Magazine" />
			</figure>
			<hgroup>
		 
				<h2>Featured Article</h2>
				<h3><a href="#">HTML5 in Smashing Magazine!</a></h3>
			</hgroup>
			<p>Discover how to use Graceful Degradation and Progressive Enhancement techniques to achieve an outstanding, cross-browser <a href="http://dev.w3.org/html5/spec/Overview.html" rel="external">HTML5</a> and <a href="http://www.w3.org/TR/css3-roadmap/" rel="external">CSS3</a> website today!</p>
		 
		</article></aside><!-- /#featured -->

		<section id="content" class="body">
			<?= $nPageBlocContenu ?>
		</section><!-- /#content -->

		<section id="extras" class="body">
		
			<div class="blogroll">
				<h2>blogroll</h2>
				<ul>
		 
					<li><a href="#" rel="external">HTML5 Doctor</a></li>
					<li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
					<li><a href="#" rel="external">Smashing Magazine</a></li>
		 
					<li><a href="#" rel="external">W3C</a></li>
					<li><a href="#" rel="external">Wordpress</a></li>
					<li><a href="#" rel="external">Wikipedia</a></li>
		 
					<li><a href="#" rel="external">HTML5 Doctor</a></li>
					<li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
					<li><a href="#" rel="external">Smashing Magazine</a></li>
		 
					<li><a href="#" rel="external">W3C</a></li>
					<li><a href="#" rel="external">Wordpress</a></li>
					<li><a href="#" rel="external">Wikipedia</a></li>
		 
					<li><a href="#" rel="external">HTML5 Doctor</a></li>
					<li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
					<li><a href="#" rel="external">Smashing Magazine</a></li>
		 
					<li><a href="#" rel="external">W3C</a></li>
					<li><a href="#" rel="external">Wordpress</a></li>
					<li><a href="#" rel="external">Wikipedia</a></li>
		 
				</ul>
			</div><!-- /.blogroll -->
 
			<div class="social">
				<h2>social</h2>
				<ul>
		 
					<li><a href="http://delicious.com/enrique_ramirez" rel="me">delicious</a></li>
					<li><a href="http://digg.com/users/enriqueramirez" rel="me">digg</a></li>
					<li><a href="http://facebook.com/enrique.ramirez.velez" rel="me">facebook</a></li>
		 
					<li><a href="http://www.lastfm.es/user/enrique-ramirez" rel="me">last.fm</a></li>
					<li><a href="http://website.com/feed/" rel="alternate">rss</a></li>
					<li><a href="http://twitter.com/enrique_ramirez" rel="me">twitter</a></li>
		 
				</ul>
			</div><!-- /.social -->
		</section><!-- /#extras -->

		<footer id="contentinfo" class="body">
			<address id="about" class="vcard body">
				<span class="primary">
					<strong><a href="#" class="fn url">Smashing Magazine</a></strong>
		 
					<span class="role">Amazing Magazine</span>
				</span><!-- /.primary -->
				
				<img src="images/avatar.gif" alt="Smashing Magazine Logo" class="photo" />
				<span class="bio">Smashing Magazine is a website and blog that offers resources and advice to web developers and web designers. It was founded by Sven Lennartz and Vitaly Friedman.</span>
		 
			</address><!-- /#about -->
			<p>2005-2009 <a href="http://smashingmagazine.com">Smashing Magazine</a>.</p>
		</footer><!-- /#contentinfo -->
		
	</body>
</html>