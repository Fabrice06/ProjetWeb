<?php

	/**
	 *
	 * @file ctrl_vehicule.php
	 * 
	 * @brief contrôleur associé à l'entité vehicule
	 * 
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_INCLUDE.'activite.php');
	
	require_once(FOLDER_MODELE.'mdl_vehicule.php');
	require_once(FOLDER_VUE.'vue_vehicule.php');

	/**
	 *
	 * controleur dédié à l'ihm vehicule
	 */
	class CtrlVehicule { 
		
		private $session;
		private $activite;
		
		private $mdlVehicule;
		private $vueVehicule;

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			
			$this-> session= new Session();
			$this-> session= $pSession;

			$this-> activite= new Activite();
			$this-> activite= $pSession-> getActivite();
			
			$this-> mdlVehicule = new MdlVehicule();
			
			$this-> vueVehicule = new VueVehicule($pSession);
		} // constructeur

		/**
		 *
		 * associer modèle de données et vue pour l'ihm vehicule
		 */
		public function afficher() {
			
			$nId= $this-> activite-> getId();
			if($nId == '') {
				$nStmt = $this-> mdlVehicule-> findVehicules();
				$this-> vueVehicule-> afficher($nStmt, 'inventaire.php');
				$nStmt-> free_result();

			} else {
				$nStmt = $this-> mdlVehicule-> findVehiculeById($nId);
				$this-> vueVehicule -> afficher($nStmt, 'fiche.php');
				$nStmt-> free_result();
			} // else
		} // function
		
	} // class
?>