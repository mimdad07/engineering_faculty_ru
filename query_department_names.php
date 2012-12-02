<?php
 
	require("connection.php");
  
	$faculty =  $_GET['faculty'];
	 
	$query_search = "select * from tbl_faculty_dept where faculty  = '".$faculty."'";
  
	$result = mysql_query($query_search); 
	
	$back ='';
	while($row = mysql_fetch_array($result)){
		$back .= $row[ 'departments' ];
	}
	 
	echo $back; 
	 
	mysql_close( $connection );

?>