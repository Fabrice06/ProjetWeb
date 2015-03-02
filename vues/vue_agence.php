<?php

	/**
	 * @file   vue_agence.php
	 * 
	 * @brief vue associée à l'entité agence
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 *
	 * propose une vue correspondant à l'ihm agence
	 */
	class VueAgence extends Vue {

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('agence', $pSession);
		} // constructor

		/**
		 *
		 * intègre le modèle de données dans l'ihm agence
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

			ob_start();
			require_once((parent::getFolderContenu()).'/contenu.php');
				
		return ob_get_clean();
		} // function
		
	} // class
?>