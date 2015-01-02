<?php

	/**
	 *
	 * @file vue_vehicule.php
	 * 
	 * @brief vue associée à l'entité vehicule
	 * 
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_VUE.'vue.php');

	/**
	 *
	 * propose une vue correspondant à l'ihm vehicule
	 */
	class VueVehicule extends Vue {

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			parent::__construct('vehicule', $pSession);
		}

		/**
		 *
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
		 *
		 * intègre le modèle de données dans le bloc contenu
		 * 
		 * @param statement $pStmt
		 * @param string $pFichier
		 * 
		 * @return string du bloc contenu
		 */
		public function readContenu($pStmt, $pFichier) {
			
			// checkme [vince] code très moyen ! voir si on garde dans le futur
			if($pFichier == 'fiche.php') {

				if(!$pStmt-> bind_result($nContenuNom, $nContenuNbPlace, $nContenuClasse)) {
					throw new SqlException($nStmt-> error, $nStmt-> errno);
				} // if
			} // if
			
			ob_start();
			require_once((parent::getFolderContenu()).$pFichier);
		
		return ob_get_clean();
		} // function

	} // class
?>