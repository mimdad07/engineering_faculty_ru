<?php
 
	require("connection.php");
  
	$districts =  $_GET['districts'];
	 
	$query_search = "select * from tbl_upazila_names where districts= '".$districts."'";
  
	$result = mysql_query($query_search); 
	
	$back ='';
	while($row = mysql_fetch_array($result)){
		$back .= $row[ 'upazilas' ];
	}
	 
	echo $back; 
	 
	mysql_close( $connection );

?>