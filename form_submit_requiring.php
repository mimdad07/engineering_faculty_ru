<?php 
 	require("connection.php");    
  
	$class_roll =  $_GET['class_roll'];
	$registration =  $_GET['registration'];
	$name =  $_GET['name'];
	$name_in_bangla =  $_GET['name_in_bangla'];
	$session =  $_GET['session'];
	$year_semister =  $_GET['year_semister'];
	$program =  $_GET['program'];
	$faculty =  $_GET['faculty'];
	$department =  $_GET['department'];
	$hall =  $_GET['hall'];
	$hall_att_res =  $_GET['hall_att_res'];
	$quota =  $_GET['quota'];
	
	$admission_roll =  $_GET['admission_roll'];
	$units =  $_GET['units'];
	$score =  $_GET['score'];
	$position =  $_GET['position'];	
			 
	$date_of_birth =  $_GET['date_of_birth'];
	$place_of_birth =  $_GET['place_of_birth'];
		
	$blood_group =  $_GET['blood_group'];
	$blood_group_pn =  $_GET['blood_group_pn'];
	$gender =  $_GET['gender'];
	  
	$cell_phone =  $_GET['cell_phone'];
	$e_mail =  $_GET['e_mail'];
	$nationalid =  $_GET['nationalid'];
	$passportno =  $_GET['passportno'];	 
	$driving =  $_GET['driving'];
	$religion =  $_GET['religion'];
	$indetification =  $_GET['indetification'];
	$height =  $_GET['height'];
			 
	$mothers_name =  $_GET['mothers_name'];
	$mothers_name_in_bangla  =  $_GET['mothers_name_in_bangla'];
	
	$fathers_name =  $_GET['fathers_name'];
	$fathers_name_in_bangla =  $_GET['fathers_name_in_bangla'];
	
	$guardian_name =  $_GET['guardian_name'];
	
	$p_address =  $_GET['p_address'];
	$p_post_office =  $_GET['p_post_office'];
	$p_post_code =  $_GET['p_post_code'];
	$p_upazilla =  $_GET['p_upazilla'];
	$p_disrtict =  $_GET['p_disrtict'];
	 
	$pr_address  =  $_GET['pr_address'];
	$pr_post_office =  $_GET['pr_post_office'];
	$pr_post_code =  $_GET['pr_post_code'];
	$pr_upazila =  $_GET['pr_upazila'];
	$pr_disrtict =  $_GET['pr_disrtict'];
	  
	$em_name =  $_GET['em_name'];
	$em_rel =  $_GET['em_rel'];
	$em_tel =  $_GET['em_tel'];
	 
	$ssc_inst =  $_GET['ssc_inst'];
	$hsc_inst =  $_GET['hsc_inst'];
	
	$ssc_subjects =  $_GET['ssc_subjects'];
	$hsc_subjects =  $_GET['hsc_subjects'];
	
	$hsc_board =  $_GET['hsc_board'];
	$hsc_roll =  $_GET['hsc_roll'];
	$hsc_pass =  $_GET['hsc_pass'];
	
	$ssc_board =  $_GET['ssc_board'];
	$ssc_roll =  $_GET['ssc_roll'];
	$ssc_pass =  $_GET['ssc_pass'];
	 
	$ssc_gpa =  $_GET['ssc_gpa'];
	$hsc_gpa =  $_GET['hsc_gpa'];
	
	$insert_or_update = $_GET['insert_or_update'];
	
	$query='';
	if( $insert_or_update =='insert_data' )
	{
		require( "cmd_insert_on_tbl_student_digital_information.php" );
	}
	else
	{
		require( "cmd_update_on_tbl_student_digital_information.php" );
	}
 
 
	$result=mysql_query($query ); 
 
?>


