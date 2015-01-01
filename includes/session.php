<?php

	/**
	 *
	 * @file session.php
	 *
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'activite.php');
	require_once(FOLDER_INCLUDE.'people.php');

	/**
	 *
	 * permets de stocker les informations relatives à la session (people et activite)
	 */
	class Session {

		private $activite;
		private $proprietaire;
		private $isValid;
		private $isValidMail;
		private $isValidMdp;
		private $isValidLog;
		
		/**
		 *
		 * recense les données issues de l'objet SESSION pour alimenter le propriétaire et son activité
		 */
		public function __construct() {
			
			session_start();
			
			$this-> activite= new Activite();
			$this-> proprietaire= new People();
			
			$nAccount= (isset($_SESSION['peopleAccount']))? $_SESSION['peopleAccount'] : 'public';
			$this-> proprietaire -> setAccount($nAccount);
			
			switch($nAccount){
				case 'membre':
				case 'admin':
					$this-> proprietaire-> setId((isset($_SESSION['peopleId']))? $_SESSION['peopleId'] : '');
					$this-> proprietaire-> setNom((isset($_SESSION['peopleNom']))? $_SESSION['peopleNom'] : '');
					$this-> proprietaire-> setPrenom((isset($_SESSION['peoplePrenom']))? $_SESSION['peoplePrenom'] : '');
					
					break;
					
				default:
					$this-> proprietaire-> setMail((isset($_SESSION['peopleMail']))? $_SESSION['peopleMail'] : '');
					$this-> proprietaire-> setMdp((isset($_SESSION['peopleMdp']))? $_SESSION['peopleMdp'] : '');
					
					$this-> isValidLog= (isset($_SESSION['isValidLog']))? $_SESSION['isValidLog'] : false;
					$this-> isValidMail= (isset($_SESSION['isValidMail']))? $_SESSION['isValidMail'] : false;
					$this-> isValidMdp= (isset($_SESSION['isValidMdp']))? $_SESSION['isValidMdp'] : false;
			} // switch

		} // constructeur

		/**
		 * 
		 * enregistre les informations du propriétaire et de son activité vers l'objet SESSION
		 * 
		 * @param booléen $pIsValid (valeur ppar défaut: false)
		 */
		public function store($pIsValid= false) {
			$this-> isValid= $pIsValid;
			
			$nPeople=  new People();
			$nPeople= $this-> proprietaire;

			if($pIsValid){

				$_SESSION['peopleId']= $nPeople-> getId();
				$_SESSION['peopleNom']= $nPeople-> getNom();
				$_SESSION['peoplePrenom']= $nPeople-> getPrenom();
				
				$_SESSION['peopleMail']= '';
				$_SESSION['peopleMdp']= '';
				
				$_SESSION['peopleAccount']= $nPeople-> getAccount();
				
				$_SESSION['isValidLog']= false;
				$_SESSION['isValidMail']= false;
				$_SESSION['isValidMdp']= false;

			} else {

				$_SESSION['peopleId']= '';
				$_SESSION['peopleNom']= '';
				$_SESSION['peoplePrenom']= '';

				$_SESSION['peopleMail']= $nPeople-> getMail();
				$_SESSION['peopleMdp']= $nPeople-> getMdp();
				
				$_SESSION['peopleAccount']= 'public';
				
				$_SESSION['isValidLog']= $this-> isValidLog;
				$_SESSION['isValidMail']= $this-> isValidMail;
				$_SESSION['isValidMdp']= $this-> isValidMdp;
			} // else
		} // function

		/**
		 * 
		 * tester le format du mail et du mot de passe
		 * 
		 * @return booléen $isValidLog
		 */
		public function isValidLog() {
			$nMail= (isset($_POST['mail']))? $_POST['mail'] : '';
			$this-> proprietaire-> setMail($nMail);

			$nRegex= '#^[a-zA-Z]{1,}@[a-zA-Z0-9]{1,}\.[a-zA-Z]{2,3}$#';
			$this-> isValidMail= (preg_match($nRegex, $nMail) == 1); // retourner un booléen et pas une valeur numérique

			$nMdp= (isset($_POST['mdp']))? $_POST['mdp'] : '';
			$this -> proprietaire-> setMdp($nMdp);

			$nRegex= '#^[0-9]{2}[a-zA-Z]{6}$#';
			$this-> isValidMdp= (preg_match($nRegex, $nMdp) == 1); // retourner un booléen et pas une valeur numérique
			
			$this-> IsValidLog= ($this-> isValidMail && $this-> isValidMdp);
			
			return $this-> IsValidLog;
		} // function


		/**
		 *
		 * @return booléen: true, si le mail et le mot de passe correspondent à un utilisateur unique
		 */
		public function getIsValid() { return $this-> isValid; } 							// getter
		
		/**
		 *
		 * @param booléen $pIsValid
		 */
		public function setIsValid($pIsValid) { $this-> isValid= $pIsValid; } 				// setter

		/**
		 *
		 * @return Activite
		 */
		public function getActivite() { return $this-> activite; } 							// getter
		// public function setActivite($pActivite) { $this-> activite= $pActivite; } 			// setter

		/**
		 *
		 * @return People
		 */
		public function getProprietaire() { return $this-> proprietaire;	} 				// getter
		
		//public function setProprietaire($pPeople) { $this-> proprietaire= $pPeople; } 		// setter

		/**
		 *
		 * @return booléen: true, si le mail et le mot de passe correspondent au format prédéfini
		 */
		public function getIsValidLog() { return $this-> isValidLog; } 						// getter

		/**
		 *
		 * @return booléen: true, si le mail corresponds au format prédéfini
		 */
		public function getIsValidMail() { return $this-> isValidMail; } 					// getter

		/**
		 *
		 * @return booléen: true, si le mot de passe corresponds au format prédéfini
		 */
		public function getIsValidMdp() { return $this-> isValidMdp; } 						// getter
		
	} // class

// todo [vince] arborescence MVC ??? attente cours web sur session

// <!-- arborescence MVC à mettre en place -->
// <!-- Un dossier public pour tout membre non enregistré (i.e. le mec qui tombe sur ton site au hasard et les bots) -->
// <!-- Un dossier pour les membres enregistrés (càd simple membre, modo, newser, membre de l'equipe, statut particulier lambda, etc -->
// <!-- Un dossier pour les actions des admins -->

// <!-- / -->
// <!-- /config/ -->
// <!-- /controleurs/ -->
// <!--         public/ -->
// <!--                 news.php -->
// <!--                 ... -->
// <!--         membre/ -->
// <!--                 profile.php -->
// <!--                 ... -->
// <!--         admin/ -->
// <!--                 exploser_le_serveur.php         -->
// <!--                 ... -->
// <!-- /css/ -->
// <!-- /lib/ -->
// <!-- /modeles/ -->
// <!--         public/ -->
// <!--                 news.php -->
// <!--                 ... -->
// <!--         membre/ -->
// <!--                 profile.php -->
// <!--                 ... -->
// <!--         admin/ -->
// <!--                 exploser_le_serveur.php         -->
// <!--                 ... -->
// <!-- /vues/ -->
// <!--         public/ -->
// <!--                 news.html -->
// <!--                 ... -->
// <!--         membre/ -->
// <!--                 profile.html -->
// <!--                 ... -->
// <!--         admin/ -->
// <!--                 exploser_le_serveur.html         -->
// <!--                 ... -->
// <!-- /index.php -->

?>