<?php

	/**
	 * @file vue_erreur.php
	 * 
	 * @brief vue associée à l'entité erreur
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 *
	 * propose une vue correspondant à l'ihm erreur
	 */
	class VueErreur extends Vue {
		
		private $erreur;
		
		/**
		 *
		 * @param Session $pSession
		 * @param Exception $pException
		 */
		public function __construct(Session $pSession, Exception $pException) {
			parent::__construct('erreur', $pSession);

			$this-> erreur= $pException;
		} // constructor

		/**
		 *
		 * intègre le modèle de données dans l'ihm erreur
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
			
			// utiles ?
			//$nContenuErreur= $this-> erreur-> __toString();
			//$nContenuTrace= $this-> erreur-> getTraceAsString();
			
			$nContenuCode= $this-> erreur-> getCode();
			$nContenuMessage= $this-> erreur-> getMessage();
			$nContenuFile= $this-> erreur-> getFile();
			$nContenuLine= $this-> erreur-> getLine();
			
			$nTrace= $this-> erreur-> getTrace();
			$nContenuTrace= (empty($nTrace['0']['function'] ))? '': ('fonction '.$nTrace['0']['function']);
			
			ob_start();
			require_once((parent::getFolderContenu()).'/contenu.php');
				
		return ob_get_clean();
		} // function
		
	} // class
?>