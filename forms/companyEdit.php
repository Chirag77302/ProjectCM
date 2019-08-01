<?php
/*

*	File:			companyEdit.php
*	By:			TMIT
*	Date:		2010-06-01
*
*	This script defines an HTML form using a dropdown
* 		to select which company to edit.
*
*
*=====================================
*/

{ 		//	Secure Connection Script
		include('../../htconfig/dbConfig.php'); 
		$dbSuccess = false;
		$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password']);
		
		if ($dbConnected) {		
			$dbSelected = mysqli_select_db($dbConnected,$db['database']);
			if ($dbSelected) {
				$dbSuccess = true;
			} else {
				echo "DB Selection FAILed";
			}
		} else {
				echo "MySQL Connection FAILed";
		}
		//	END	Secure Connection Script
}

if ($dbSuccess) {
		
		$postFormName = "companyEditForm.php";
		include_once('../includes/coDropDown.php');	

}

echo "<br /><hr /><br />";


echo '<a href="../index.php">Quit - to homepage</a>';


?>