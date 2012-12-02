<?php
 
	require("connection.php");
  
	$roll = $_GET["roll"]; 
 	$unit = trim( $_GET["unit" ] );  
	
	$query_search = "select * from tbl_admission where exam_roll = '".$roll."' and unit='".$unit."'";
  
	$result = mysql_query($query_search); 
	
	$back =''; 
		
	$row = mysql_fetch_array($result);
	
	$back .= $row[ 'exam_roll' ] . '-pad-' . 
	
			$row[ 'hsc_board' ] . '-pad-' . 
			$row[ 'hsc_roll' ] . '-pad-' .  
			$row[ 'hsc_year' ] . '-pad-' .
			 
			$row[ 'ssc_board' ] . '-pad-' . 
			$row[ 'ssc_roll' ] . '-pad-' .  
			$row[ 'ssc_year' ] . '-pad-' .
			 
			$row[ 'ssc_regi' ] . '-pad-' . 
			$row[ 'ssc_group' ] . '-pad-' .  
			$row[ 'hsc_regno' ] . '-pad-' .
			  
			$row[ 'fullname' ] . '-pad-' . 
			$row[ 'fname' ] . '-pad-' .  
			$row[ 'mname' ] . '-pad-' .
			 
			$row[ 'ssc_name' ] . '-pad-' . 
			$row[ 'ssc_fname' ] . '-pad-' .  
			$row[ 'ssc_mname' ] . '-pad-' .
			 
			$row[ 'unit' ] . '-pad-' . 
			$row[ 'ssc_gpa_ex_four' ] . '-pad-' .  
			$row[ 'hsc_gpa_ex_four' ] . '-pad-' .
			 
			$row[ 'ssc_gpa' ] . '-pad-' . 
			$row[ 'hsc_gpa' ] . '-pad-' .  
			$row[ 'ssc_ltrgd' ] . '-pad-' . 
			$row[ 'hsc_ltrgd' ] . '-pad-' . 
			 
			$row[ 'quota' ] . '-pad-' . 
			$row[ 'hsc_fourth_gpa' ] . '-pad-' .  
			$row[ 'ssc_fourth_gpa' ] . '-pad-' . 
			$row[ 'ssc_ban_gpa' ] . '-pad-' . 			
		
			$row[ 'ssc_eng_gpa' ] . '-pad-' . 
			$row[ 'hsc_math_gpa' ] . '-pad-' .  
			$row[ 'hsc_chem_gpa' ] . '-pad-' . 
			$row[ 'hsc_phy_gpa' ]  . '-pad-' . 			
		
			$row[ 'hsc_bio_gpa' ] . '-pad-' . 
			$row[ 'hsc_ban_gpa' ] . '-pad-' .  
			$row[ 'hsc_eng_gpa' ] . '-pad-' . 
			$row[ 'hsc_stat_gpa' ] . '-pad-' . 		
		
			$row[ 'hsc_agri_gpa' ] . '-pad-' . 
			$row[ 'hsc_acc_gpa' ] . '-pad-' .  
			$row[ 'hsc_eco_gpa' ] . '-pad-' . 
			$row[ 'hsc_fourth_subject' ] . '-pad-' . 	
		
			$row[ 'ssc_fourth_subject' ] . '-pad-' . 		
			$row[ 'hsc_stud_group' ] . '-pad-' ;		 	
 		 
		 
		 
		 
		 
		 
		 
 	$ssc_subjects = $row[ 'ssc_ltrgd' ];
	$hsc_subjects = $row[ 'hsc_ltrgd' ];
	 
//     101:A ,107:A ,109:A+,145:A+,111:A+,136:A+,137:A+,138:A+,126:A+,
//     becomes
//     Ban, Eng, Math, SC, Islam, Phy, Che, Bio, H. Math,
	$slice_ssc_subjects = explode(",",$ssc_subjects );
  
	for($i=0; $i<count( $slice_ssc_subjects )-1; $i++)
	{ 
		$temp = explode(":",trim( $slice_ssc_subjects[$i ] ));
		$slice_ssc_subjects[$i]  =  $temp[0];                       // $slice_ssc_subjects[0] = '101' 
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
						 
	$ssc_subject_list = '';					 
	for($i=0; $i<count( $slice_ssc_subjects )-2; $i++)
		$ssc_subject_list .= $ssc_subject_code_array[ $slice_ssc_subjects[$i] ]	. ", ";
	$ssc_subject_list .= $ssc_subject_code_array[ $slice_ssc_subjects[ count($slice_ssc_subjects )-2 ] ] . ".";	
		
		
		
		
		
		
		
		  
//     101:A+,107:A ,127:A+,174:A+,176:A+,178:A-,
//     becomes
//     Ban, Eng, Math, Phy, Che, Bio,	
	$slice_hsc_subjects = explode(",",$hsc_subjects );
  
	for($i=0; $i<count( $slice_hsc_subjects )-1; $i++)
	{ 
		$temp = explode(":",trim( $slice_hsc_subjects[$i ] ));
		$slice_hsc_subjects[$i]  =  $temp[0];                       // $slice_hsc_subjects[0] = '101' 
	}
	 
	$hsc_subject_code_array = array(
 						"101" => "Ban",
 						"107" => "Eng",
 						"127" => "Math",
 						"174" => "Phy", 
 						"176" => "Che",
 						"178" => "Bio", 
 						 
 						 ); 
						 
	$hsc_subject_list = '';					 
	for($i=0; $i<count( $slice_hsc_subjects )-2; $i++)
		$hsc_subject_list .= $hsc_subject_code_array[ $slice_hsc_subjects[$i] ]	. ", ";
		
	$hsc_subject_list .= $hsc_subject_code_array[ $slice_hsc_subjects[ count($slice_hsc_subjects )-2 ] ] . ".";

 
	$back .=  $ssc_subject_list . '-pad-' . 
			  $hsc_subject_list;
		
	
	
	
	
	
	echo $back;
	   
	 
	mysql_close( $connection );

?>