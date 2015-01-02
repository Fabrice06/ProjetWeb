<?php

	/**
	 * 
	 * @file controleur.php
	 * 
	 * @brief C'est un intermédiaire entre le modèle et la vue.
	 * 
	 * Le contrôleur va demander au modèle les données, les analyser, prendre une décision
	 * puis fournir les données à afficher via la vue.
	 * 
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'activite.php');	
	require_once(FOLDER_INCLUDE.'session.php');
	
	require_once(FOLDER_CONTROLEUR.'ctrl_agence.php');
	require_once(FOLDER_CONTROLEUR.'ctrl_client.php');
	require_once(FOLDER_CONTROLEUR.'ctrl_connexion.php');
	require_once(FOLDER_CONTROLEUR.'ctrl_erreur.php');
	require_once(FOLDER_CONTROLEUR.'ctrl_home.php');
	require_once(FOLDER_CONTROLEUR.'ctrl_resa.php');
	require_once(FOLDER_CONTROLEUR.'ctrl_service.php');
	require_once(FOLDER_CONTROLEUR.'ctrl_vehicule.php');

	/**
	 *
	 * controleur générique
	 */
	class Controleur { 

		private $session;

		private $activite;
		
		/**
		 * 
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			$this-> session= new Session();
			$this-> session= $pSession;
			
			$this-> activite= new Activite();
			$this-> activite= $pSession-> getActivite();
		} // constructeur

		/**
		 * 
		 * sélection d'un controleur spécifique
		 */
		public function router($pControleur= '') {

			$nControleur= (empty($pControleur))? $this-> activite-> getControleur() : $pControleur;
			switch ($nControleur) {

				case 'agence':
					$nControleur= 'CtrlAgence';
					break;					

				case 'client':
					$nControleur= 'CtrlClient';
					break;
						
				case 'connexion':
					$nControleur= 'CtrlConnexion';
					break;

				case 'resa':
					$nControleur= 'CtrlResa';
					break;

				case 'service':
					$nControleur= 'CtrlService';
					break;
					
				case 'vehicule':
					$nControleur= 'CtrlVehicule';
					break;
		
				default:
					$nControleur= 'CtrlHome';
			} // switch
		
			$nCtrlObjet= new $nControleur($this-> session);
			
				try {
					$nCtrlObjet-> afficher();
					
				} catch (Exception $pException) {

					$nCtrlObjet= null;
					
					$nCtrlObjet= new CtrlErreur($this-> session, $pException);
					
					if(APP_MODE == 'proj') {
						$nCtrlObjet-> afficher();
						
					} else {
						$nCtrlObjet-> enregistrerLog();
						
						$this-> router('home');
					} // else
					
				} // catch
				
			$nCtrlObjet= null;
	
		} // function		
	} // class
?>