<?php

	/**
	 *
	 * @file ctrl_erreur.php
	 *
	 * @brief contrôleur associé à l'entité erreur
	 *
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	require_once(FOLDER_INCLUDE.'log.php');
	
	require_once(FOLDER_VUE.'vue_erreur.php');

	/**
	 *
	 * controleur dédié à l'ihm erreur
	 */
	class CtrlErreur {
			
		private $vue;
		
		private $erreur;

		/**
		 *
		 * @param Session $pSession
		 * @param Exception $pException
		 */
		public function __construct(Session $pSession, Exception $pException) {

			$this-> vue= new VueErreur($pSession, $pException);
			$this-> erreur= $pException;
		} // constructeur

		/**
		 *
		 * associer modèle de données (si il existe !) et vue pour l'ihm erreur
		 */
		public function afficher() {
			
			$this-> vue-> afficher();
		} // function

		/**
		 *
		 * enregistre les infos de l'exception dans un fichier log
		 */
		public function enregistrerLog() {

			$nLogCode= $this-> erreur-> getCode();
			$nLogMessage= $this-> erreur-> getMessage();
			$nLogLine= $this-> erreur-> getLine();
			$nLogFile= $this-> erreur-> getFile();
				
			$nTrace= $this-> erreur-> getTrace();
			$nLogTrace= (empty($nTrace['0']['function'] ))? '': ('fonction '.$nTrace['0']['function']);

			$nLog = new Log(LOG_FILE);
			
				$nLog-> add('Erreur '.$nLogCode.': '.$nLogMessage);
				$nLog-> add(' > fichier '.$nLogFile);
				$nLog-> add(' > '.$nLogTrace);
				$nLog-> add(' > exception lancée de la ligne '.$nLogLine);

			$nLog= null; // appel destructeur (appel du commit)
		} // function
		
	} // class
?>