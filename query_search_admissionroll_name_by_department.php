<?php
 
	require("connection.php");
  
	$department = $_GET["department"];  
	
	$query_search = "select admission_roll, name, position, score, cell_phone from tbl_student_digital_information where department = '" . $department . "' and status = 'Admitted'  order by admission_roll ASC";
 
	$result = mysql_query($query_search); 
	
	$back ='';
	while($row = mysql_fetch_array($result)){
		
		$back .= 	$row[ 'admission_roll' ] . '-pad-' .
					$row[ 'name' ] . '-pad-' . 
					$row[ 'position' ] . '-pad-' .
					$row[ 'score' ] . '-pad-' .  
  					$row[ 'cell_phone' ] . '-next-'; 
  					
	}
	 
	echo $back; 
	 
	mysql_close( $connection );

?>