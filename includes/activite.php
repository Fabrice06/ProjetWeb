<?php

	/**
	 *
	 * @file activite.php
	 *
	 * @author vince
	 */
	
	/**
	 *
	 * permets de stocker les informations relatives à l'activité liée à une session
	 */
	class Activite{

		private $controleur;
		private $action;
		private $Id;

		/**
		 *
		 * @return string nom du controleur
		 */
		public function getControleur() { return $this-> controleur; } 						// getter
		
		/**
		 *
		 * @param string $pControleur
		 */
		public function setControleur($pControleur) { $this-> controleur= $pControleur;	} 	// setter

		/**
		 *
		 * @return string nom de l'action
		 */
		public function getAction() { return $this-> action; } 								// getter

		/**
		 *
		 * @param string $pAction
		 */
		public function setAction($pAction) { $this-> action= $pAction;	} 					// setter

		/**
		 *
		 * @return string (??) identifiant de l'objet à afficher
		 */
		public function getId() { return $this-> id; } 										// getter

		/**
		 *
		 * @param string (??) $pId
		 */
		public function setId($pId) { $this-> id= $pId;	} 									// setter

	} // class
?>