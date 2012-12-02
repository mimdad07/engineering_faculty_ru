<?php
 
	require("connection.php");
  
	$admission_roll = $_GET["admission_roll"]; 
	$units = $_GET["units"];
	
	$query_search = "select * from tbl_student_digital_information where admission_roll  = '".$admission_roll."' and units='" .$units . "'";
  
	$result = mysql_query($query_search); 
	
	$back ='';
	while($row = mysql_fetch_array($result)){
		
		$back .= 	$row[ 'class_roll' ] . '-pad-' . 
					$row[ 'registration' ] . '-pad-' . 
					$row[ 'name' ] . '-pad-' . 
					$row[ 'name_in_bangla' ] . '-pad-' . 
					$row[ 'session' ] . '-pad-' . 
					$row[ 'year_semister' ] . '-pad-' . 
					$row[ 'program' ] . '-pad-' . 
					$row[ 'faculty' ] . '-pad-' . 
					$row[ 'department' ] . '-pad-' .  
					$row[ 'hall' ] . '-pad-' . 
					$row[ 'hall_att_res' ] . '-pad-' . 
					$row[ 'quota' ] . '-pad-' . 
					
  					$row[ 'admission_roll' ] . '-pad-' . 
  					$row[ 'units' ] . '-pad-' . 
					$row[ 'score' ] . '-pad-' . 
					$row[ 'position' ] . '-pad-' . 	
									
					$row[ 'date_of_birth' ] . '-pad-' . 
					$row[ 'place_of_birth' ] . '-pad-' . 
					
					$row[ 'blood_group' ] . '-pad-' . 
					$row[ 'blood_group_pn' ] . '-pad-' . 
					$row[ 'gender' ] . '-pad-' . 
					$row[ 'cell_phone' ] . '-pad-' .   
					$row[ 'e_mail' ] . '-pad-' . 		
					$row[ 'nationalid' ] . '-pad-' . 
					$row[ 'passportno' ] . '-pad-' . 
					$row[ 'driving' ] . '-pad-' . 
					$row[ 'religion' ] . '-pad-' . 
					$row[ 'indetification' ] . '-pad-' . 
					$row[ 'height' ] . '-pad-' . 
  					
					$row[ 'mothers_name' ] . '-pad-' . 
					$row[ 'mothers_name_in_bangla' ] . '-pad-' . 
					$row[ 'fathers_name' ] . '-pad-' . 					
					$row[ 'fathers_name_in_bangla' ] . '-pad-' . 
					$row[ 'guardian_name' ] . '-pad-' . 
				
					$row[ 'p_address' ] . '-pad-' . 
					$row[ 'p_post_office' ] . '-pad-' . 
					$row[ 'p_post_code' ] . '-pad-' . 
					$row[ 'p_upazilla' ] . '-pad-' . 
   					$row[ 'p_disrtict' ]  . '-pad-' . 
	 
					$row[ 'pr_address' ] . '-pad-' . 
					$row[ 'pr_post_office' ] . '-pad-' . 
					$row[ 'pr_post_code' ] . '-pad-' . 
					$row[ 'pr_upazila' ] . '-pad-' . 
   					$row[ 'pr_disrtict' ]  . '-pad-' . 
 
					$row[ 'em_name' ] . '-pad-' . 
					$row[ 'em_rel' ] . '-pad-' . 
					$row[ 'em_tel' ] . '-pad-' . 					
					$row[ 'ssc_inst' ] . '-pad-' . 
					$row[ 'hsc_inst' ] . '-pad-' . 
 
					$row[ 'ssc_subjects' ] . '-pad-' . 
					$row[ 'hsc_subjects' ] . '-pad-' . 
					$row[ 'ssc_board' ] . '-pad-' . 
					$row[ 'ssc_pass' ] . '-pad-' . 
   					$row[ 'ssc_roll' ] . '-pad-' .
	  				
					$row[ 'hsc_board' ] . '-pad-' . 
					$row[ 'hsc_roll' ] . '-pad-' . 
					$row[ 'hsc_pass' ] . '-pad-' . 
					$row[ 'ssc_gpa' ] . '-pad-' . 
					$row[ 'hsc_gpa' ] . '-pad-' . 
   					$row[ 'status' ] ;
 			
	}
	 
	echo $back; 
	 
	mysql_close( $connection );

?>