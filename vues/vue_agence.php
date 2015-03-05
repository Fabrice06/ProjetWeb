<?php

	/**
	 * @file   vue_agence.php
	 * 
	 * @brief vue associée à l'entité agence
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 * propose une vue correspondant à l'ihm agence
	 */
	class VueAgence extends Vue {

		/**
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('agence', $pSession);
		} // constructor

		/**
		 * intègre le modèle de données dans l'ihm agence
		 *
		 * @param statement $pStmt
		 * @param string $pFichier
		 */
		public function afficher($pStmt, $pFichier) {

			parent::setContenu($this-> readContenu($pStmt, $pFichier));
			$this-> readPage();
		} // function

		/**
		 * intègre le modèle de données dans le bloc contenu
		 * 
		 * @param statement $pStmt
		 * @param string $pFichier
		 * 
		 * @return string du bloc contenu
		 */
		public function readContenu($pStmt, $pFichier) {
			
			$nAccount= parent::getProprietaire()-> getAccount();
			
			if($pFichier == 'fiche.php') {
				
				if(!$pStmt-> bind_result($nContenuNom, $nContenuAdresse, $nContenuPhone, $nContenuMail, $nContenuHoraire)) {
					throw new SqlException($nStmt-> error, $nStmt-> errno);
				} // if
			} // if
			
			ob_start();
			require_once((parent::getFolderContenu()).$nAccount.'/'.$pFichier);
		
		return ob_get_clean();
		} // function
		
	} // class
?>