<?php

	/**
	 * @file vue_vehicule.php
	 * 
	 * @brief vue associée à l'entité vehicule
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 * propose une vue correspondant à l'ihm vehicule
	 */
	class VueVehicule extends Vue {

		/**
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('vehicule', $pSession);
		}

		/**
		 * intègre le modèle de données dans l'ihm vehicule
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

				if(!$pStmt-> bind_result($nContenuNom, $nContenuDescription, $nContenuNbPlace, $nContenuMotorisation, $nContenuPrix)) {
					throw new SqlException($nStmt-> error, $nStmt-> errno);
				} // if
			} // if
			
			ob_start();
			require_once((parent::getFolderContenu()).$nAccount.'/'.$pFichier);
		
		return ob_get_clean();
		} // function
		
// 		public function readContenu() {
				
// 			// valeur par défaut
// 			$nContenuPrenom= '';
				
// 			$nAccount= parent::getProprietaire()-> getAccount();
// 			if(($nAccount == 'membre') || ($nAccount == 'admin')){
// 				$nContenuPrenom= parent::getProprietaire()-> getPrenom();
// 			}
				
// 			ob_start();
// 			require_once((parent::getFolderContenu()).$nAccount.'/contenu.php');
		
// 			return ob_get_clean();
// 		} // function
		
		

	} // class
?>