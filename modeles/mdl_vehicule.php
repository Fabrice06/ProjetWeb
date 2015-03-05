<?php

	/**
	 * @file mdl_vehicule.php
	 * 
	 * @brief modèle de données associé à l'entité vehicule
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
			$nSql = 'select idVehicule, nomVehicule, imageVehicule '
					.'from Vehicule '
					.'order by nomVehicule asc';

			if(!$nStmt= parent::getBdd()-> query($nSql)) {
				throw new SqlException(parent::getBdd()-> error, parent::getBdd()-> errno);
			} // if
		return $nStmt;
		} // function

		/**
		 * propose fiche voiture identifiée par son $pId
		 *
		 * @param integer $pId
		 * 
		 * @return mysqli statement
		 */
		public function findVehiculeById($pId) {
			$nSql = 'select nomVehicule, descriptionVehicule, nbPlacesVehicule, motorisationVehicule, prixVehicule '
					.'from Vehicule '
					.'where idVehicule=?';

			if(!$nStmt= parent::getBdd()-> prepare($nSql)) {
				throw new SqlException(parent::getBdd()-> error, parent::getBdd()-> errno);
			}

			if(!$nStmt-> bind_param('i', $pId)) {
				throw new SqlException($nStmt-> error, $nStmt-> errno);
			}
		
			if(!$nStmt-> execute()) {
				throw new SqlException($nStmt-> error, $nStmt-> errno);
			}
		return $nStmt;
		} // function
		
	} // class
?>
