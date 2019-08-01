<?php
/*

*	File:			twoPageModelOutput.php
*	By:			TMIT
*	Date:		2010-06-01
*
*	This script collects data from twoPageModelForm.php
*	and processes it
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
	

	

		
	
	$personFirstName = $_POST["personFirstName"];
	$personLastName = $_POST["personLastName"];

	echo "The name you entered was: ".$personFirstName." ".$personLastName;




	


}

echo "<br /><hr /><br />";

echo '<a href="twoPageModelForm.php">Go Back</a>';


?>