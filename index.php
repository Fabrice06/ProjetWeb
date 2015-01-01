<?php

	//=========================================================================================
	// objectifs:
	// 		=> REPONDRE AU SUJET WEB DE BASE
	//		=> penser objet
	//		=> mettre en place des concepts modulables pour être réutilisés sans trop d'effort 
	//			dans les autres projets PHP ou JAVA
	//
	// outils:
	//		=> utilisation de la phpDoc qui est proche de la javaDoc
	//=========================================================================================

	/**
	 * 
	 * @file   index.php
	 * 
	 * @brief entrée du site (utilisation du concept de page unique)
	 * 
	 * @author vince
	 */

	// déclaration des variables de configuration
	require_once('includes/config.php');

	require_once(FOLDER_INCLUDE.'exception.php');
	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_INCLUDE.'activite.php');
	require_once(FOLDER_CONTROLEUR.'controleur.php');

	$nSession= new Session();
		
		$nActivite= new Activite();
		$nActivite= $nSession-> getActivite();
			$nActivite-> setControleur((isset($_GET['controleur']))? $_GET['controleur'] : 'accueil');
			$nActivite-> setAction((isset($_POST['action']))? $_POST['action'] : '');
			
			$nActivite-> setId((isset($_GET['id']))? $_GET['id'] : '');
	
		$nControleur= new Controleur($nSession);
			$nControleur-> router();
			
		$nControleur= null; 	// appel explicite du destructeur
	$nSession= null; 			// appel explicite du destructeur

?>