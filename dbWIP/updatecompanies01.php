<?php
/*

*	File:		updatecompanies01.php
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
	
	
			// SQL to change country value from UK to United Kingdom 
			$company_SQLupdate = "UPDATE tCompany SET ";
			
			$company_SQLupdate .= "COUNTRY = 'United Kingdom' ";
			
			$company_SQLupdate .= "WHERE COUNTRY = 'UK' "; 
			
			if (mysqli_query($dbConnected,$company_SQLupdate))  {	
				echo "UPDATE tCompany.COUNTRY - SUCCESSFUL.<br /><br />";
			} else {
				echo "UPDATE tCompany.COUNTRY - FAILED.<br /><br />";
			}
					
	
			
}




?>