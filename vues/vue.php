<?php

	/**
	 * @file vue.php
	 *
	 * @brief Cette partie est dédiée uniquement à l’affichage. 
	 *
	 * La vue se contente d'afficher les données qui lui sont transmises par le controleur.
	 * On y retrouve essentiellement du code HTML mais aussi des boucles PHP.
	 */

	require_once(FOLDER_INCLUDE.'session.php');

	/**
	 *
	 * classe abstraite
	 */
	abstract class Vue {
		
		private $folderContenu;
		private $fichierPage;
		
		private $session;
		private $proprietaire;
		
		private $contenu;

		/**
		 *
		 * @param string $pContenu
		 * @param Session $pSession
		 */
		protected function __construct($pContenu, Session $pSession) {
			
			$this-> session= new Session();
			$this-> session= $pSession;
			
			$this-> proprietaire= new People();
			$this-> proprietaire= $pSession-> getProprietaire();
			
			$this-> folderContenu= FOLDER_VUE.$pContenu.'/';
			$this-> fichierPage= FOLDER_VUE.'page.php';
		}

		/**
		 *
		 * @return Session
		 */
		protected function getSession() { return $this-> session; }

		/**
		 *
		 * @return People
		 */
		protected function getProprietaire() { return $this-> proprietaire; }

		/**
		 *
		 * @return string chemin vers le fichier page.php
		 */
		protected function getFichierPage() { return $this-> fichierPage; }
		
		/**
		 *
		 * @return string chemin vers le répertoire associé à chaque contenu
		 */
		protected function getFolderContenu() { return $this-> folderContenu; }

		/**
		 *
		 * @param string $pContenu
		 */
		protected function setContenu($pContenu) { $this-> contenu= $pContenu; }

		/**
		 *
		 * nettoie une valeur insérée dans une page HTML.
		 * But: éviter les attaques XSS: http://fr.wikipedia.org/wiki/Cross-site_scripting
		 * 
		 * @param string $pValeur
		 *
		 * @return string valeur propre
		 */
		protected function nettoyer($pValeur) {
			return htmlspecialchars(htmlentities($pValeur), ENT_QUOTES, 'UTF-8', false); 
		}

		/**
		 *
		 * intègre les différents blocs de la trame dans la page
		 */
		protected function readPage() {
		
			// valeurs par défaut
			$nPageTagCompte= 'Espace client';

			$nAccount= $this-> proprietaire-> getAccount();
			if(($nAccount == 'membre') || ($nAccount == 'admin')){
				$nPageTagCompte= 'Déconnexion';
			}// if
		
			$nPageBlocContenu= $this-> contenu;
		
			require_once($this-> fichierPage);
		} // function
		
	} // class
?>