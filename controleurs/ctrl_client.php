<?php

	/**
	 * 
	 * à réaliser
	 * 
	 * @file   ctrl_clien.php
	 * 
	 * @brief contrôleur associé à l'entité client
	 * 
	 * @todo [bob] s'inspirer du contrôleur ctrl_vehicule ??
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	
	require_once(FOLDER_MODELE.'mdl_client.php');
	require_once(FOLDER_VUE.'vue_client.php');
	
	/**
	 *
	 * controleur dédié à l'ihm client
	*/
	class CtrlClient {
	
		private $mdlClient;
		private $vueClient;
	
		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
				
			$this-> session= new Session();
			$this-> session= $pSession;
	
			$this-> mdlClient = new MdlClient();
				
			$this-> vueClient = new VueClient($pSession);
		} // constructeur
	
		/**
		 *
		 * associer modèle de données et vue pour l'ihm client
		 */
		public function afficher() {
			$this-> vueClient-> afficher();
		} // function
	
	} // class
?>