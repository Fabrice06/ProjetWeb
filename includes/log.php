<?php

	/**
	 *
	 * @file log.php
	 *
	 * @brief création d'un fichier log
	 *
	 * @author vince
	 */

	/**
	 *
	 * réalise l'export des erreurs dans un fichier de log
	 */
	class Log{

		private $file;
		private $flag;
		private $deco;
		private $eol;
		private $contenu;

		/**
		 *
		 * @param string $pFile
		 * @param string $pFlag
		 * @param string $pEol
		 */
		public function __construct($pFile, $pFlag= FILE_APPEND, $pEol= '\n') {
	
			$this-> file= $pFile;
			$this-> flag= $pFlag;
			$this-> deco= '***********************************************';
			$this-> eol= $pEol;
			$this-> contenu= '';
		} // constructeur

		/**
		 *
		 * déclenche l'enregistrement de toutes les infos dans le fichier de log
		 */
		public function __destruct() {
			$this-> commit();
		} // destructeur

		/**
		 *
		 * charge dans un string la concaténation des infos de log
		 */
		public function add($pContenu= '') {
			if(!empty($pContenu)){
				$this-> contenu = $this-> contenu.$pContenu.$this-> eol;
			} // if
		} // function

		/**
		 *
		 * enregistre toutes les infos de log
		 */
		private function commit() {
			if(!empty($this-> contenu)) {
				$nContenu= $this-> eol.'log du '.date('D j M Y, g:i a').$this-> eol.$this-> eol;
				$nContenu= $nContenu.$this-> contenu.$this-> deco.$this-> eol;
				
				file_put_contents($this-> file, $nContenu, $this-> flag);
			} // if
		} // function

	} // class
?>