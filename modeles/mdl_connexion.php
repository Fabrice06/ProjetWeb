<?php

	/**
	 *
	 * @file mdl_connexion.php
	 * 
	 * @brief modèle de données associé à l'entité connexion
	 */

	require_once(FOLDER_INCLUDE.'people.php');
	
	require_once(FOLDER_MODELE.'modele.php');

	/**
	 *
	 * propose un modèle de données correspondant à l'ihm compte
	 */
	class MdlConnexion extends Modele {

		// 		public function __construct() {
		// 			parent::setNomTable('xxxxxxx');
		// 		}

		/**
		 *
		 * alimente id, nom, prenom et compte de l'instance $pPeople passée en paramètre
		 *
		 * @param People $pPeople
		 */
		public function getPeopleByMailByMdp(People $pPeople) {
			
			$nSql = 'select id, nom, sprenom, compte '
					.'from people '
						.'where mail=? and mdp=?';

			if(!$nStmt= parent::getBdd()-> prepare($nSql)) {
				throw new SqlException(parent::getBdd()-> error, parent::getBdd()-> errno);
			}
				
			$nMail= $pPeople-> getMail();
			$nMdp= $pPeople-> getMdp();

			if(!$nStmt-> bind_param('ss', $nMail, $nMdp)) {
				throw new SqlException($nStmt-> error, $nStmt-> errno);
			}
			
			if(!$nStmt-> execute()) {
				throw new SqlException($nStmt-> error, $nStmt-> errno);
			}

			// ici seulement pour avoir le nombre de ligne
			$nStmt-> store_result();
			$nRows= $nStmt-> num_rows;

			if($nRows == 1) {
				if(!$nStmt-> bind_result($nId, $nNom, $nPrenom, $nAccount)) {
					throw new SqlException($nStmt-> error, $nStmt-> errno);
				}

				while ($nStmt-> fetch()) {
					$pPeople-> setId($nId);
					$pPeople-> setNom($nNom);
					$pPeople-> setPrenom($nPrenom);
					$pPeople-> setAccount($nAccount);
				} // while
			} // if
			$nStmt-> free_result();

		} // function
		
	} // class
?>