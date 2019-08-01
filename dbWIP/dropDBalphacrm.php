<?php
/*

*	File:		dropDBalphacrm.php
*	By:		Subash
*	Date:		2019-07-27
*
*	This script *
*
*
*=====================================
*/


{ // Connect and Test MySQL and specific DB (return $dbSuccess = T/F)
				
			$hostname = "localhost";
			$username = "root";
			$password = "";
			
			$databaseName = "alphacrm";

			$dbConnected = @mysqli_connect($hostname, $username, $password);
			$dbSelected = @mysqli_select_db($dbConnected,$databaseName);

			$dbSuccess = true;
			if ($dbConnected) {
				if (!$dbSelected) {
					echo "DB connection FAILED<br /><br />";
					$dbSuccess = false;
				}		
			} else {
				echo "MySQL connection FAILED<br /><br />";
				$dbSuccess = false;
			}
}  

//	 Execute code ONLY if connections were successful 	
if ($dbSuccess) {
	
		$dbName = "alphacrm";
		$drop_SQL = "DROP DATABASE ".$dbName;
		
		if (mysqli_query($dbConnected,$drop_SQL))  {	
			echo "'DROP DATABASE ".$dbName."' -  Successful.";
		} else {
			echo "'DROP DATABASE ".$dbName."' - Failed.";
		}
			
}






?>