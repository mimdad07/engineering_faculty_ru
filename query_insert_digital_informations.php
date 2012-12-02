<?php
 
	require("connection.php");
   
	
	$student_class_roll_no = mysql_real_escape_string($_REQUEST['student_class_roll_no']);
	$student_registration_no = mysql_real_escape_string($_REQUEST['student_registration_no']);
	$student_faculty = mysql_real_escape_string($_REQUEST['student_faculty']);
	$student_department = mysql_real_escape_string($_REQUEST['student_department']);
	$student_session = mysql_real_escape_string($_REQUEST['student_session']);
	$student_class_semister = mysql_real_escape_string($_REQUEST['student_class_semister']);
	$student_degree = mysql_real_escape_string($_REQUEST['student_degree']);
	$student_hall = mysql_real_escape_string($_REQUEST['student_hall']);
	$student_hall_attached_resident = mysql_real_escape_string($_REQUEST['student_hall_attached_resident']);
	$student_admission_roll_no = mysql_real_escape_string($_REQUEST['student_admission_roll_no']);
	$student_name = mysql_real_escape_string($_REQUEST['student_name']);
	$student_fathers_name = mysql_real_escape_string($_REQUEST['student_fathers_name']);
	$student_mothers_name = mysql_real_escape_string($_REQUEST['student_mothers_name']);
	$student_ssc_gpa = mysql_real_escape_string($_REQUEST['student_ssc_gpa']);
	$student_hsc_gpa = mysql_real_escape_string($_REQUEST['student_hsc_gpa']);
	$student_date_of_birth = mysql_real_escape_string($_REQUEST['student_date_of_birth']);
	$student_blood_group = mysql_real_escape_string($_REQUEST['student_blood_group']);
	$student_blood_group_pos_neg = mysql_real_escape_string($_REQUEST['student_blood_group_pos_neg']);
	
	$student_place_of_birth = mysql_real_escape_string($_REQUEST['student_place_of_birth']);
	$student_religion=  mysql_real_escape_string($_REQUEST['student_religion']);
	$student_gender = mysql_real_escape_string($_REQUEST['student_gender']);
	$student_height = mysql_real_escape_string($_REQUEST['student_height']);
	$student_cell_phone_no = mysql_real_escape_string($_REQUEST['student_cell_phone_no']);
	$student_e_mail = mysql_real_escape_string($_REQUEST['student_e_mail']);
	$student_national_id = mysql_real_escape_string($_REQUEST['student_national_id']);
	$student_passport_no = mysql_real_escape_string($_REQUEST['student_passport_no']);
	$student_driving_license_no = mysql_real_escape_string($_REQUEST['student_driving_license_no']);
	$student_personal_indetification = mysql_real_escape_string($_REQUEST['student_personal_indetification']);
	$student_guardian_name = mysql_real_escape_string($_REQUEST['student_guardian_name']);
	
	$student_permanent_address_house_road_vill = mysql_real_escape_string($_REQUEST['student_permanent_address_house_road_vill']);
	$student_permanent_post_office = mysql_real_escape_string($_REQUEST['student_permanent_post_office']);
	$student_permanent_post_code = mysql_real_escape_string($_REQUEST['student_permanent_post_code']);
	$student_permanent_upazilla = mysql_real_escape_string($_REQUEST['student_permanent_upazilla']);
	$student_permanent_disrtict = mysql_real_escape_string($_REQUEST['student_permanent_disrtict']);
	
	$student_present_address_house_road_vill = mysql_real_escape_string($_REQUEST['student_present_address_house_road_vill']);
	$student_present_post_office = mysql_real_escape_string($_REQUEST['student_present_post_office']);
	$student_present_post_code = mysql_real_escape_string($_REQUEST['student_present_post_code']);
	$student_present_upazila = mysql_real_escape_string($_REQUEST['student_present_upazila']);
	$student_present_disrtict = mysql_real_escape_string($_REQUEST['student_present_disrtict']);
	
 
 	$query= "insert into tbl_student_digital_information values( "  . 
	
			"'{$student_class_roll_no}', "  .
			"'{$student_registration_no}', "  .
			"'{$student_faculty}', "  .
			"'{$student_department}', "  .
			"'{$student_session}', "  . 
 			"'{$student_class_semister}', "  .
			"'{$student_degree}', "  .
			"'{$student_hall}', "  .
			"'{$student_hall_attached_resident}', "  .
			"'{$student_admission_roll_no}', "  .
 			"'{$student_name}', "  .
			"'{$student_fathers_name}', "  .
			"'{$student_mothers_name}', "  .
			"'{$student_ssc_gpa}', "  .
			"'{$student_hsc_gpa}', "  .
			"'{$student_date_of_birth}', "  .
			"'{$student_blood_group}', "  .
			"'{$student_blood_group_pos_neg}', "  .
			
			
			"'{$student_place_of_birth}', "  .
			"'{$student_religion}', "  .
			"'{$student_gender}', "  .
			"'{$student_height}', "  .
			"'{$student_cell_phone_no}', "  .
			"'{$student_e_mail}', "  .
			"'{$student_national_id}', "  .
			"'{$student_passport_no}', "  .
			"'{$student_driving_license_no}', "  .
			"'{$student_personal_indetification}', "  .
			"'{$student_guardian_name}', "  .
			 
			 
			"'{$student_permanent_address_house_road_vill}', "  .
			"'{$student_permanent_post_office}', "  .
			"'{$student_permanent_post_code}', "  .
			"'{$student_permanent_upazilla}', "  .
			"'{$student_permanent_disrtict}', "  .
			
			
			"'{$student_present_address_house_road_vill}', "  .
			"'{$student_present_post_office}', "  .
			"'{$student_present_post_code}', "  .
			"'{$student_present_upazila}', "  .
			"'{$student_present_disrtict}'"  .
			
			")";
  
	$result=mysql_query($query );
  
?>