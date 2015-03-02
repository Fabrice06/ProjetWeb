<?php

	/** 
	 * @file   ctrl_agence.php
	 * 
	 * @brief contrôleur associé à l'entité agence
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_INCLUDE.'activite.php');
	
	require_once(FOLDER_MODELE.'mdl_agence.php');
	require_once(FOLDER_VUE.'vue_agence.php');
	
	/**
	 *
	 * controleur dédié à l'ihm agence
	*/
	class CtrlAgence {

		private $session;
		private $activite;
		
		private $mdlAgence;
		private $vueAgence;
	
		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
				
			$this-> session= new Session();
			$this-> session= $pSession;

			$this-> activite= new Activite();
			$this-> activite= $pSession-> getActivite();
			
			$this-> mdlAgence = new MdlAgence();
				
			$this-> vueAgence = new VueAgence($pSession);
		} // constructeur
	
		/**
		 *
		 * associer modèle de données et vue pour l'ihm agence
		 */
		public function afficher() {

			$nId= $this-> activite-> getId();
			if($nId == '') {
				$nStmt = $this-> mdlAgence-> findAgences();
				$this-> vueAgence-> afficher($nStmt, 'inventaire.php');
				$nStmt-> free_result();
			
			} else {
				$nStmt = $this-> mdlAgence-> findAgenceById($nId);
				$this-> vueAgence -> afficher($nStmt, 'fiche.php');
				$nStmt-> free_result();
			} // else
		} // function
	
	} // class
?>