<?php

	/**
	 * @file   mdl_agence.php
	 * 
	 * @brief modèle de données associé à l'entité agence
	 */

	require_once(FOLDER_MODELE.'modele.php');

	/**
	 *
	 * propose un modèle de données correspondant à l'ihm agence
	 */
	class MdlAgence extends Modele {

		// 		public function __construct() {
		// 			parent::setNomTable('agence');
		// 		}
		
		/**
		 *
		 * propose la liste de toutes les agences
		 *
		 * @return mysqli statement
		 *
		 * @throws SqlException en cas d'échec
		 */
		public function findAgences() {
			$nSql = 'select idAgence, nomAgence, imageAgence '
					.'from Agence '
					.'order by nomAgence asc';
		
			if(!$nStmt= parent::getBdd()-> query($nSql)) {
				throw new SqlException(parent::getBdd()-> error, parent::getBdd()-> errno);
			} // if
			return $nStmt;
		} // function

		/**
		 * propose fiche agence identifiée par $pId
		 *
		 * @param integer $pId
		 *
		 * @return mysqli statement
		 */
		public function findAgenceById($pId) {
			$nSql = 'select nomAgence, adresseAgence, phoneAgence, mailAgence, horaireAgence '
					.'from Agence '
					.'where idAgence=?';
		
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
