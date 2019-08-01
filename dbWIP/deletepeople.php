<?php
/*

*	File:		deletepeople.php
*	By:		Subash
*	Date:		
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
	
			
	$people_SQLdelete = "DELETE FROM tPerson WHERE LastName = 'Bloggs'"; 
	
	if (mysqli_query($dbConnected,$people_SQLdelete))  {	
		echo "DELETE tPerson  - SUCCESSFUL.<br /><br />";
	} else {
		echo "DELETE tPerson  - FAILED.<br /><br />";
	}
			
	
	$people_SQLdelete = "DELETE FROM tPerson WHERE CompanyID > '200'"; 
	
	if (mysqli_query($dbConnected,$people_SQLdelete))  {	
		echo "DELETE tPerson  - SUCCESSFUL.<br /><br />";
	} else {
		echo "DELETE tPerson  - FAILED.<br /><br />";
	}
			

			
}




?>