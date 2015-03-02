<?php

	/**
	 * @file exception.php
	 *
	 * @brief héritage de la classe Exception
	 */

	/**
	 *
	 * classe Exception étendue pour gérer les erreurs de connexion avec la base de données
	 */
	class BddException extends Exception {
	} // class

	/**
	 *
	 * classe Exception étendue pour gérer les erreurs d'échange avec la base de données
	 */
	class SqlException extends Exception {
	} // class

?>