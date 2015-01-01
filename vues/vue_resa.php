<?php

	/**
	 * 
	 * à réaliser
	 * 
	 * @file   vue_resa.php
	 * 
	 * @brief vue associée à l'entité reservation
	 * 
	 * @todo [bob] s'inspirer du contrôleur vue_vehicule ??
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 *
	 * propose une vue correspondant à l'ihm reservation
	 */
	class VueResa extends Vue {

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('resa', $pSession);
		} // constructor

		/**
		 *
		 * intègre le modèle de données dans l'ihm reservation
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