<?php

	/**
	 * 
	 * à réaliser
	 * 
	 * @file   mdl_agence.php
	 * 
	 * @brief modèle de données associé à l'entité agence
	 * 
	 * @todo [bob] s'inspirer du contrôleur mdl_vehicule ??
	 */

	require_once(FOLDER_MODELE.'modele.php');

	/**
	 *
	 * propose un modèle de données correspondant à l'ihm client
	 */
	class MdlClient extends Modele {

		
// 		$stmt = $mysqli->prepare("INSERT INTO testtable VALUES (?,?,?)");
// 		// prepare() can fail because of syntax errors, missing privileges, ....
// 		if ( false===$stmt ) {
// 			// and since all the following operations need a valid/ready statement object
// 			// it doesn't make sense to go on
// 			// you might want to use a more sophisticated mechanism than die()
// 			// but's it's only an example
// 			die('prepare() failed: ' . htmlspecialchars($mysqli->error));
// 		}
		
// 			$rc = $stmt->bind_param('iii', $x, $y, $z);
// 			// bind_param() can fail because the number of parameter doesn't match the placeholders in the statement
// 			// or there's a type conflict(?), or ....
// 			if ( false===$rc ) {
// 				// again execute() is useless if you can't bind the parameters. Bail out somehow.
// 				die('bind_param() failed: ' . htmlspecialchars($stmt->error));
// 			}
		
// 			$rc = $stmt->execute();
// 			// execute() can fail for various reasons. And may it be as stupid as someone tripping over the network cable
// 			// 2006 "server gone away" is always an option
// 			if ( false===$rc ) {
// 				die('execute() failed: ' . htmlspecialchars($stmt->error));
// 			}
		
// 			$stmt->close();
		
	} // class
?>
