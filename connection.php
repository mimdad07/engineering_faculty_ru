<?php

	$hostname ="localhost";
	$database ="db_student_digital_info";
	$username ="root";
	$password ="";
	
	$connection = mysql_connect($hostname, $username, $password)
	or
	trigger_error(mysql_error(),E_USER_ERROR);
	
	mysql_query( "use db_student_digital_info" );

?>