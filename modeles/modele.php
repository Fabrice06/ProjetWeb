<?php

	/**
	 * @file modele.php
	 *
	 * @brief Cette partie gère les données métier.
	 *
	 * Son rôle est d’aller récupérer les informations 'brutes' dans la base de données,
	 * de les organiser et de les assembler pour qu’elles puissent être traitées par le contrôleur.
	 */

	/**
	 *
	 * réalise la connexion à la base de données
	 */
	abstract class Modele {
		
		// Objet partagé par toutes les instances des classes dérivée
		private $bdd;
		
		protected $nomTable; // attente ???
		
		/**
		 *
		 * déclenche la fermeture de la connexion
		 */
		public function __destruct() {
			$this-> closeBdd();
		} // destructor

		/**
		 *
		 * si aucune connexion n'est active, une nouvelle est créée
		 * 
		 * @return objet mysqli connexion
		 * 
		 * @throws BddException en cas d'échec de connexion
		 */
		public function getBdd() {
			if ($this-> bdd == null) {
				$this-> bdd= new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
				
				if($this-> bdd-> connect_errno > 0){
					throw new BddException($this-> bdd-> connect_error, $this-> bdd-> connect_errno);
				} // if
			} // if
		return $this-> bdd;
		} // function

		/**
		 *
		 * ferme la connexion (si elle est active ??)
		 */
		private function closeBdd() {
				mysqli_close($this-> bdd);
		} // function

		/**
		 *
		 * en attente ???
		 */
		protected function setNomTable($pNomTable) {
			$this-> nomTable= $pNomTable;
		}

	} // class
?>