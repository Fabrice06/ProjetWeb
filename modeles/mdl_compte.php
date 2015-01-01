<?php

	/**
	 *
	 * @file mdl_compte.php
	 * 
	 * @brief modèle de données associé à l'entité compte
	 *
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'people.php');
	
	require_once(FOLDER_MODELE.'modele.php');

	/**
	 *
	 * propose un modèle de données correspondant à l'ihm compte
	 */
	class MdlCompte extends Modele {

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
			
			$nSql = 'select id, nom, prenom, compte '
					.'from people '
						.'where mail=? and mdp=?';
// todo [vince] faire un essai pour valider le fonctionnement du try
			try {
				$nStmt= parent::getBdd()-> prepare($nSql);
				
				$nMail= $pPeople-> getMail();
				$nMdp= $pPeople-> getMdp();
				
				$nStmt-> bind_param('ss', $nMail, $nMdp);
				
				$nStmt-> execute();

				$nStmt-> store_result();
				$nRows= $nStmt-> num_rows;

				if($nRows == 1) {
					$nStmt-> bind_result($nId, $nNom, $nPrenom, $nAccount);

					while ($nStmt-> fetch()) {
						$pPeople-> setId($nId);
						$pPeople-> setNom($nNom);
						$pPeople-> setPrenom($nPrenom);
						$pPeople-> setAccount($nAccount);
					} // while
				} // if
				$nStmt-> free_result();
				
			} catch (Exception $e) {
				echo 'erreur getPeopleByMailByMdp '. $nStmt-> errno. '  '. $nStmt-> error;
			} // catch
		} // function
		
	} // class
?>