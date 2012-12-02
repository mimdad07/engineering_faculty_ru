<?php 
 	require("connection.php");    
   
	$admission_roll =  $_GET['admission_roll'];
	$units =  $_GET['units'];
	$session =  $_GET['session'];
	 
	$query = " update tbl_student_digital_information". 

			" set ".
			" status = 'Withdrawn'".
			
			" where ".

			" admission_roll = '$admission_roll' and " .
			" units = '$units' and " .
			" session = '$session' " ; 			

 	$query_exec = mysql_query( $query ) or die(mysql_error());
	mysql_close( $connection );

?>

 