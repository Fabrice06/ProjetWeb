<?php

	/**
	 *
	 * @file mdl_vehicule.php
	 * 
	 * @brief modèle de données associé à l'entité vehicule
	 *
	 * @author vince
	 */

	require_once(FOLDER_MODELE.'modele.php');

	/**
	 *
	 * propose un modèle de données correspondant à l'ihm vehicule
	 */
	class MdlVehicule extends Modele {

// 		public function __construct() {
// 			parent::setNomTable('voiture');
// 		}

		/**
		 *
		 * propose la liste de tous les vehicules
		 * 
		 * @return mysqli statement
		 * 
		 * @throws SqlException en cas d'échec
		 */
		public function findVehicules() {
			$nSql = 'select id, snom '
					.'from voiture '
					.'order by nom asc';

			if(!$nStmt= parent::getBdd()-> query($nSql)) {
				throw new SqlException(parent::getBdd()-> error, parent::getBdd()-> errno);
			} // if
		return $nStmt;
		} // function

		/**
		 *
		 * propose nom, classe, nbplace du vehicule identifié par $pId
		 *
		 * @param integer $pId
		 * 
		 * @return mysqli statement
		 */
		public function findVehiculeById($pId) {
			$nSql = 'select nom, classe, nbplace '
					.'from voiture '
					.'where id=?';
// todo [vince] mettre en place lea gestion des exceptions
// 			try {
				$nStmt= parent::getBdd()-> prepare($nSql);

				$nStmt-> bind_param('i', $pId);
			
				$nStmt-> execute();

// 			} catch (Exception $e) {
// 				echo 'erreur findVehiculeById '. $nStmt-> errno. '  '. $nStmt-> error;
// 			} // catch
		return $nStmt;
		} // function
		
	} // class
?>
