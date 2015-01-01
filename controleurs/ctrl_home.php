<?php

	/**
	 *
	 * @file ctrl_home.php
	 * 
	 * @brief contrôleur associé à l'entité home
	 *
	 * @author vince
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	
	require_once(FOLDER_VUE.'vue_home.php');

	/**
	 *
	 * controleur dédié à l'ihm home
	 */
	class CtrlHome {
			
		private $vue;

		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
			
			$this-> vue= new VueHome($pSession);
		} // constructeur

		/**
		 *
		 * associer modèle de données (si il existe !) et vue pour l'ihm home
		 */
		public function afficher() {
			$this-> vue-> afficher();
		} // function
		
	} // class
?>