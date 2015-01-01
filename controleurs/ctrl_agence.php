<?php

	/**
	 * 
	 * à réaliser
	 * 
	 * @file   ctrl_agence.php
	 * 
	 * @brief contrôleur associé à l'entité agence
	 * 
	 * @todo [bob] s'inspirer du contrôleur ctrl_vehicule ??
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	
	require_once(FOLDER_MODELE.'mdl_agence.php');
	require_once(FOLDER_VUE.'vue_agence.php');
	
	/**
	 *
	 * controleur dédié à l'ihm agence
	*/
	class CtrlAgence {
	
		private $mdlAgence;
		private $vueAgence;
	
		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
				
			$this-> session= new Session();
			$this-> session= $pSession;
	
			$this-> mdlAgence = new MdlAgence();
				
			$this-> vueAgence = new VueAgence($pSession);
		} // constructeur
	
		/**
		 *
		 * associer modèle de données et vue pour l'ihm agence
		 */
		public function afficher() {
			$this-> vueAgence-> afficher();
		} // function
	
	} // class
?>