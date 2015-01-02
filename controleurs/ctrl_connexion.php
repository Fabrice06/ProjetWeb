<?php

	/**
	 * 
	 * @file   ctrl_connexion.php
	 * 
	 * @brief contrôleur associé à l'entité connexion
	 * 
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_INCLUDE.'people.php');
	require_once(FOLDER_INCLUDE.'activite.php');
	
	require_once(FOLDER_MODELE.'mdl_connexion.php');
	require_once(FOLDER_VUE.'vue_connexion.php');
	require_once(FOLDER_VUE.'vue_home.php');

	/**
	 *
	 * controleur dédié à l'ihm connexion
	 */
	class CtrlConnexion {

		private $vue;
		private $modele;
		private $session;
		private $activite;
		private $proprietaire;

		/**
		 * 
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			$this-> session= new Session();
			$this-> session= $pSession;
			
			$this-> activite= new Activite();
			$this-> activite= $pSession-> getActivite();

			$this-> proprietaire= new People();
			$this-> proprietaire= $pSession-> getProprietaire();
			
			$this-> modele= new MdlConnexion();
		} // constructeur

		/**
		 *
		 * associer modèle de données et vue pour l'ihm compte
		 */
		public function afficher(){
			
			// dans tous les cas
			$this-> session-> setIsValid(false);

			$nAccount= $this-> proprietaire-> getAccount();
			if(($nAccount == 'membre') || ($nAccount == 'admin')) { // déconnexion
				$this-> proprietaire-> setAccount('public');
				$this-> session-> store(false);
				
				// todo [vince] décider de la logique compte ou accueil pour l'affichage membre
				$this-> vue= new VueHome($this-> session);
				$this-> vue-> afficher();
				
			} else {
				// utilisé ici pour remplacer une série de ifelse imbriqués
				while(true){
	
					if($this-> activite-> getAction() == 'valider') {
					
						if($this-> session-> isValidLog()) {
	
							$this-> modele-> getPeopleByMailByMdp($this-> proprietaire);
							
							$this-> session-> store(true);
							
							// todo [vince] décider de la logique compte ou accueil pour l'affichage membre
							$this-> vue= new VueHome($this-> session);
							$this-> vue-> afficher();
	
							// sortie du while: on échappe l'affichage de la vue connexion
							break;
						} // if
					} // if
						
					// tous les else
					$this-> vue = new VueConnexion($this-> session);
					$this-> vue-> afficher();
					
				break;
				} // while
			} // else
		} // function

	} // class
?>