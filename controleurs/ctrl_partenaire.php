<?php

	/**
	 * @file   ctrl_partenaire.php
	 * 
	 * @brief  contrôleur associé à l'entité partenaire
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	
	require_once(FOLDER_MODELE.'mdl_partenaire.php');
	require_once(FOLDER_VUE.'vue_partenaire.php');
	
	/**
	 *
	 * controleur dédié à l'ihm partenaire
	*/
	class CtrlPartenaire {
	
		private $mdlPartenaire;
		private $vuePartenaire;
	
		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
				
			$this-> session= new Session();
			$this-> session= $pSession;
	
			$this-> mdlPartenaire = new MdlPartenaire();
				
			$this-> vuePartenaire = new VuePartenaire($pSession);
		} // constructeur
	
		/**
		 *
		 * associer modèle de données et vue pour l'ihm Partenaire
		 */
		public function afficher() {
			$this-> vuePartenaire-> afficher();
		} // function
	
	} // class
?>