<?php

	/**
	 *
	 * @file config.php
	 *
	 * @author vince
	 */
	
	// step d'avancement du développement proj(et) ou prod(uction)
	// proj: les exceptions sont affichées directement sur le browser
	// checkme [vince] confirmer cette politique de gestion face à l'utilisateur final
	// prod: affichage de la page home et production d'un fichier de log
		define('APP_MODE', 				'proj');
		define('LOG_FILE', 				'LocVoiture_log.txt');

	// base de données
		define('DB_SERVER', 			'localhost');
		define('DB_USER', 				'root');
		define('DB_PASSWORD', 			'root');
		define('DB_NAME', 				'LocVoiture');
		define('DB_PORT', 				8889);
		
		
	// arborescence du projet
		define('FOLDER_CSS',     		'style/');
		define('FOLDER_IMG',     		'images/');
		define('FOLDER_INCLUDE', 		'includes/');
		define('FOLDER_MODELE',  		'modeles/');
		define('FOLDER_VUE',     		'vues/');
		define('FOLDER_CONTROLEUR',		'controleurs/');
		
			
	// navigation du site
		define('HREF_HOME',				'index.php?controleur=home');
		
		define('HREF_AGENCE',			'index.php?controleur=agence');
		define('HREF_COMPTE',			'index.php?controleur=compte');
		define('HREF_RESERVATION',		'index.php?controleur=resa');
		define('HREF_SERVICE',    		'index.php?controleur=service');
		define('HREF_VEHICULE',    		'index.php?controleur=vehicule');
		
?>