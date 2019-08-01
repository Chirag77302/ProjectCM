<?php

/*

*	File:			tet.php
*	By:			TMIT
*	Date:		
*
*	This script 
*
*
*=====================================
*/

{ 		//	Secure Connection Script
		include('../htconfig/dbConfig.php'); 
		$dbSuccess = false;
		$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password']);
		
		if ($dbConnected) {		
			$dbSelected = mysqli_select_db($dbConnected,$db['database']);
			if ($dbSelected) {
				$dbSuccess = true;
			} 	
		}
		//	END	Secure Connection Script
}

if ($dbSuccess) {
	
	echo "Success";
	
}

?>