<?php

	/**
	 * 
	 * à réaliser
	 * 
	 * @file   ctrl_service.php
	 * 
	 * @brief contrôleur associé à l'entité service
	 * 
	 * @todo [bob] s'inspirer du contrôleur ctrl_vehicule ??
	 */

	require_once(FOLDER_INCLUDE.'session.php');

	require_once(FOLDER_MODELE.'mdl_service.php');
	require_once(FOLDER_VUE.'vue_service.php');

	/**
	 *
	 * controleur dédié à l'ihm service
	 */
	class CtrlService { 

		private $mdlService;
		private $vueService;

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			
			$this-> session= new Session();
			$this-> session= $pSession;

			$this-> mdlService = new MdlService();
			
			$this-> vueService = new VueService($pSession);
		} // constructeur

		/**
		 *
		 * associer modèle de données et vue pour l'ihm service
		 */
		public function afficher() {
			$this-> vueService-> afficher();
		} // function
		
	} // class
?>