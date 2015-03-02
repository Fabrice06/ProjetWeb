<?php

	/**
	 * @file   vue_client.php
	 * 
	 * @brief vue associée à l'entité agence
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 *
	 * propose une vue correspondant à l'ihm client
	 */
	class VueClient extends Vue {

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('client', $pSession);
		} // constructor

		/**
		 *
		 * intègre le modèle de données dans l'ihm client
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
			require_once((parent::getFolderContenu()).'/formulaire.php');
				
		return ob_get_clean();
		} // function
		
	} // class
?>