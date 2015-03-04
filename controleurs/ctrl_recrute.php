<?php

	/**
	 * @file   ctrl_recrute.php
	 * 
	 * @brief  contrôleur associé à l'entité recrute
	 */

	require_once(FOLDER_INCLUDE.'session.php');
	
	require_once(FOLDER_MODELE.'mdl_recrute.php');
	require_once(FOLDER_VUE.'vue_recrute.php');
	
	/**
	 *
	 * controleur dédié à l'ihm recrute
	*/
	class CtrlRecrute {
	
		private $mdlRecrute;
		private $vueRecrute;
	
		/**
		 *
		 * @param Session $pSession
		 */
		public function __construct(Session $pSession) {
				
			$this-> session= new Session();
			$this-> session= $pSession;
	
			$this-> mdlRecrute = new MdlRecrute();
				
			$this-> vueRecrute = new VueRecrute($pSession);
		} // constructeur
	
		/**
		 *
		 * associer modèle de données et vue pour l'ihm reservation
		 */
		public function afficher() {
			$this-> vueRecrute-> afficher();
		} // function
	
	} // class
?>