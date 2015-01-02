<?php

	/**
	 *
	 * @file vue_connexion.php
	 * 
	 * @brief vue associée à l'entité compte
	 *
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 *
	 * propose une vue correspondant à l'ihm connexion
	 */
	class VueConnexion extends Vue {

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('connexion', $pSession);
		}

		/**
		 *
		 * intègre le modèle de données dans l'ihm connexion
		 */
		public function afficher() {

			parent::setContenu($this-> readContenu());
			parent::readPage();
		} // function

		/**
		 *
		 * intègre le modèle de données dans le bloc contenu
		 *
		 * @return string du bloc contenu
		 */
		public function readContenu() {

			// valeur par défaut
			$nContenuValueMail= '';
			$nContenuValueMdp=  '';
			$nContenuMsgMail= '';
			$nContenuMsgMdp= '';
			$nContenuMsgAccount= '';
				
			$nAccount= parent::getProprietaire()-> getAccount();
			if($nAccount == 'public'){
				
				// attribution des messages
				if($this-> getSession()-> getActivite()-> getAction() == 'valider'){
					$nContenuValueMail= parent::getProprietaire()-> getMail();
					$nContenuValueMdp=  parent::getProprietaire()-> getMdp();
					if(!parent::getSession()-> getIsValidMail()) $nContenuMsgMail= ' Arg ... pb de mail';
					if(!parent::getSession()-> getIsValidMdp()) $nContenuMsgMdp= ' Arg ... pb de mdp';
					if(parent::getSession()-> getIsValidLog() != parent::getSession()-> getIsValid()) $nContenuMsgAccount= ' Arg ... pb de log';
				} // if
			} // if 
				
			ob_start();
			require_once((parent::getFolderContenu()).'formulaire.php');
		
		return ob_get_clean();
		} // function
		
	} // class
?>