<?php

	/**
	 *
	 * @file vue_home.php
	 * 
	 * @brief vue associée à l'entité home
	 *
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 *
	 * propose une vue correspondant à l'ihm home
	 */
	class VueHome extends Vue {

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('home', $pSession);
		} // constructor

		/**
		 *
		 * intègre le modèle de données dans l'ihm home
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
			$nContenuPrenom= '';
			
			$nAccount= parent::getProprietaire()-> getAccount();
			if(($nAccount == 'membre') || ($nAccount == 'admin')){
				$nContenuPrenom= parent::getProprietaire()-> getPrenom();
			}
			
			ob_start();
			require_once((parent::getFolderContenu()).$nAccount.'/contenu.php');
				
		return ob_get_clean();
		} // function
		
	} // class
?>