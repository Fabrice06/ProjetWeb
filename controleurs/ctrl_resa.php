<?php

	/**
	 * @file   ctrl_resa.php
	 * 
	 * @brief  contrôleur associé à l'entité reservation
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	
	require_once(FOLDER_MODELE.'mdl_resa.php');
	require_once(FOLDER_VUE.'vue_resa.php');
	
	/**
	 *
	 * controleur dédié à l'ihm reservation
	*/
	class CtrlResa {
	
		private $mdlResa;
		private $vueResa;
	
		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
				
			$this-> session= new Session();
			$this-> session= $pSession;
	
			$this-> mdlResa = new MdlResa();
				
			$this-> vueResa = new VueResa($pSession);
		} // constructeur
	
		/**
		 *
		 * associer modèle de données et vue pour l'ihm reservation
		 */
		public function afficher() {
			$this-> vueResa-> afficher();
		} // function
	
	} // class
?>