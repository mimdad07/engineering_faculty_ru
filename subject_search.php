<?php
 
/* 
 
	$hostname ="localhost";
	$database ="tbl_admission";
	$username ="root";
	$password ="";
	
	$connection = mysql_connect($hostname, $username, $password)
	or
	trigger_error(mysql_error(),E_USER_ERROR);
	
	mysql_query( "use db_student_digital_info" );
	
	$query_search = "select ssc_subjects from tbl_student_digital_information where admission_roll  = '01580'";
  
	$result = mysql_query($query_search,$connection); 
	$row = mysql_fetch_array($result);
	
	//echo $row[ 'ssc_subjects' ];
	
	mysql_close( $connection );
	
	
*/	
	
	// apply algorithm for slicing subject from original string
	
	$ssc_subjects = "101:A ,107:A ,109:A+,145:A+,111:A+,136:A+,137:A+,126:A+,138:A+";
   
	$slice_subjects = explode(",",$ssc_subjects );
 
	for($i=0; $i<count( $slice_subjects ); $i++)
	{ 
		$temp = explode(":",trim( $slice_subjects[$i ] ));
		$slice_subjects[$i]  =  $temp[0];
	}
  
	$ssc_subject_code_array = array(
							"101" => "Ban",
							"107" => "Eng",
							"109" => "Math",
							"145" => "SC",
							"111" => "Islam",
							"136" => "Phy", 
							"137" => "Che",
							"138" => "Bio", 
							"126" => "H. Math"
						); 
						 
						 
	for($i=0; $i<count( $slice_subjects ); $i++)
	  echo 		$ssc_subject_code_array[ $slice_subjects[$i] ]	. " ";	


/*
echo "</br>";


$hsc_subject_result = "101:A+,107:A+,127:A+,174:A+,176:A+,178:A+";


$len = substr_count($ssc_subject_result,",");
	 
	$slice_subjects = explode(",",trim( $hsc_subject_result ));


for($i=0; $i<count( $slice_subjects ); $i++)
{ 
    $temp = explode(":",trim( $slice_subjects[$i ] ));
    $slice_subjects[$i]  =  $temp[0];
}
 
 
 $hsc_code_and_result = array(
 						"101" => "Ban",
 						"107" => "Eng",
 						"127" => "Math",
 						"174" => "Phy", 
 						"176" => "Che",
 						"178" => "Bio", 
 						 
 						 ); 
						 
						 
for($i=0; $i<count( $slice_subjects ); $i++)
  echo 		$hsc_code_and_result[ $slice_subjects[$i] ]	. " ";	

	
	
	*/
?>