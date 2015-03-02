<?php

	/**
	 * @file people.php
	 */

	/**
	 *
	 * permets de stocker les informations relatives à l'utilisateur
	 */
	class People{

		private $id;
		private $nom;
		private $prenom;
		private $mail;
		private $mdp;
		private $account;		// public, membre, admin
		
		/**
		 * 
		 * @return le numéro d'identification (clé primaire issue de la base de données)
		 */
		public function getId() { return $this-> id; } 							// getter
		/**
		 *
		 * @param integer $pId
		 */
		public function setId($pId) { $this-> id= $pId; } 						// setter

		/**
		 *
		 * @return string nom
		 */
		public function getNom() { return $this-> nom;	} 						// getter
		
		/**
		 *
		 * @param string $pNom
		 */
		public function setNom($pNom) {	$this-> nom= $pNom;	} 					// setter

		/**
		 *
		 * @return string prénom
		 */
		public function getPrenom() { return $this-> prenom; } 					// getter
		
		/**
		 *
		 * @param string $pPrenom
		 */
		public function setPrenom($pPrenom) { $this-> prenom= $pPrenom;	} 		// setter	

		/**
		 *
		 * @return string email
		 */
		public function getMail() {	return $this-> mail; } 						// getter
		
		/**
		 *
		 * @param string $pMail
		 */
		public function setMail($pMail) { $this-> mail= $pMail;	} 				// setter

		/**
		 *
		 * @return string mot de passe
		 */
		public function getMdp() { return $this-> mdp; } 						// getter
		
		/**
		 *
		 * @param string $pMdp
		 */
		public function setMdp($pMdp) { $this-> mdp= $pMdp;	} 					// setter

		/**
		 *
		 * @return string un des trois rôles parmis: public, membre, admin
		 */
		public function getAccount() { return $this-> account; } 				// getter
		
		/**
		 *
		 * @param string $pAccount
		 */
		public function setAccount($pAccount) { $this-> account= $pAccount; } 	// setter
		
	} // class
?>