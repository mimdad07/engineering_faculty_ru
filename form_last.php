<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php 
 require("form_submit_requiring.php");     
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admission form</title>
<script type="text/javascript" src="javascripts/jquery.print.js"></script>
 <!-- jQuery Libraries --> 
<script src="js/jquery-1.7.js" type="text/javascript"></script>  	 
<script src="js/script.js" type="text/javascript"></script>
 

<style type="text/css">
body {
	margin-left: 1px;
	margin-top: 1px;
	margin-right: 1px;
	margin-bottom: 1px;
	background-color: #FFF;
}
#ru #ru_university {
	font-size: x-large;
}
.attention_tag {
	font-size: 11px;
	font-weight: bold;
	letter-spacing: normal;
	line-height: .5em;
}
.attention_tag1 {	font-size: 11px;
	font-weight: bold;
}
.small {
	font-size: x-small;
}
#small {	font-size: small;
}
#small {	font-size: x-small;
}
#small {	font-size: x-small;
}
#small {	font-size: x-small;
}
#small2 {
	font-size: x-small;
}
#small3 {
	font-size: x-small;
}
.small1 {	font-size: x-small;
}
.small1 {	font-size: x-small;
}
#small3 {
	font-size: x-small;
}
#small3 {
	font-size: x-small;
}
#listselect {
	text-align: left;
}
#fotter_small td {
	font-size: small;
}
#table_head {
	font-size: 12px;
}
#declaration strong {
	text-decoration: underline;
}
</style>
</head>



<div align="center" id="print_details">
<body onload="window.print()" bgcolor="#CCCCCC">
<table width="800" border="0" align="center" cellpadding="1" cellspacing="2">
  <tr>
    <td colspan="3" align="center"><a href="home.php"><img src="images/logo.jpg" alt=" RU logo" name="logo" width="200" height="207" class="style6" id="logo" 
                    style="height: 80px; width: 80px" align="middle" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td height="35" colspan="3" align="center"><span id="ru"><strong id="ru_university">University of Rajshahi</strong></span>&nbsp;</td>
  </tr>
  <tr>
    <td height="37" colspan="3" align="center"> <strong>Admission Form</strong>&nbsp;</td>
  </tr>
  <tr>
    <td height="35" colspan="3" align="center"><span class="attention_tag">&nbsp;FILL UP THE FORM YOURSELF. USE ENGLISH BLOCK LETTERS THROUGHOUT EXCEPT
        <p> 
    BANGLA/NATIVE SCRIPT IN SELECTED PLACES. AVOID OVER WRITING. DO NOT FOLD THE FORM. </p></span></td>
  </tr>
  <tr>
    <td height="28" colspan="3" align="center"><span class="attention_tag1"><strong><em>Read carefully before you start writing.</em></strong></span></td>
  </tr>
  <tr>
    <td height="28" align="left">Unit:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $units ; ?></td>
    <td height="28" align="left">&nbsp;</td>
    <td height="28" align="left">Score: <?php echo $score ; ?></td>
  </tr>
  <tr>
    <td height="29" align="left">Admission Roll:  &nbsp; <?php echo $admission_roll ; ?></td>
    <td height="29" align="left">&nbsp;</td>
    <td height="29" align="left">Position: <?php echo $position ; ?></td>
  </tr>
  <tr>
    <td height="21" align="left">&nbsp;</td>
    <td height="21" align="left">&nbsp;</td>
    <td height="21" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="3"><strong>1. Basic information:</strong></td>
  </tr>
  <tr>
    <td height="21" colspan="3">Name: &nbsp; <?php echo $name; ?></td>
  </tr>
  <tr>
    <td height="25" colspan="3"><label for="bangla_name">Name(<span class="small1">in Bangla/native script</span>)&nbsp; <?php echo $name_in_bangla; ?></label></td>
  </tr>
  <tr>
    <td height="34">Session: &nbsp;<?php echo $session; ?></td>
    <td height="34">Year/Semester: &nbsp;<?php echo $year_semister; ?> </td>
    <td width="221" height="34">Program:&nbsp;<?php echo $program; ?></td>
  </tr>
  <tr>
    <td height="25" colspan="3">Department/Institute: &nbsp;<?php echo $department; ?> </td>
  </tr>
  <tr>
    <td height="28" colspan="3"><label for="faculty" >Faculty:&nbsp;<?php echo $faculty; ?></label></td>
  </tr>
  <tr>
    <td height="26" colspan="3">Quota:</label>
     
       
      <input type="checkbox" name="" value="" id="freedom"
       <?php if($quota == "Freedom Fighter"){echo " CHECKED";}?> />  Freedom Fighter
       <input type="checkbox" name="" value="" id="ethnic" 
        <?php if($quota == "Ethnic Monority"){echo " CHECKED";}?> />Ethnic Monority  
       <input type="checkbox" name="" value="" id="disabled"
        <?php if($quota == "Disabled"){echo " CHECKED";}?> />  Disabled
       <input type="checkbox" name="" value="" id="ward"
        <?php if($quota == "Ward"){echo " CHECKED";}?> /> Ward&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>2. Personal information:</strong></td>
  </tr>
  <tr>
    <td width="295" height="36"><label for="birthday" >Date of Birth(<span id="small">dd-mm-yyyy</span>):&nbsp;<?php echo $date_of_birth; ?> </label></td>
    <td colspan="2">Place of Birth(<span id="small2">District &amp; Country</span>): &nbsp;<?php echo $place_of_birth; ?>  </td>
  </tr>
  <tr>
    <td height="30" colspan="3">Blood Group: 
       <input type="checkbox" name="" value="" id="group_a"
       <?php if($blood_group == "A"){echo " CHECKED";}?> />A:
       
       <input type="checkbox" name="" value="" id="group_b" 
        <?php if($blood_group == "B"){echo " CHECKED";}?>/>B:  
       <input type="checkbox" name="" value="" id="group_ab"
        <?php if($blood_group == "AB"){echo " CHECKED";}?> />AB:
       <input type="checkbox" name="" value="" id="group_o"
        <?php if($blood_group == "O"){echo " CHECKED";}?> />O:
       
       <input type="radio" name="blood_group" value="Positive" id="positive" 
       <?php if($blood_group_pn == "Positive"){echo " CHECKED";}?>/>Positive
       
       <input type="radio" name="blood_group" value="Negative" id="negative"
       <?php if($blood_group_pn == "Negative"){echo " CHECKED";}?> />Negative
       </td>
  </tr>
  <tr>
    <td height="42">Gender: <label>
         <input type="radio" name="RadioGroup1" value="radio" id="male"
         <?php if($gender == "Male"){echo " CHECKED";}?>  />
         Male</label>

       <label>
         <input type="radio" name="RadioGroup1" value="radio" id="female"
         <?php if($gender == "Female"){echo " CHECKED";}?>  />
         Female</label></td>
    <td colspan="2">Nationality:&nbsp; Bangladeshi</td>
  </tr>
  <tr>
    <td height="29"><label for="cellphone" >Phone/Cell No:</label>
     &nbsp;<?php echo $cell_phone; ?> </td>
    <td colspan="2"><label for="email" >E-mail(<span id="small3">if any</span>): &nbsp;<?php echo $e_mail; ?></label></td>
  </tr>
  <tr>
    <td height="34">National ID(<span class="small1">if any</span>):&nbsp;<?php echo $nationalid; ?></td>
    <td colspan="2">Valid Passport No(<span class="small1">if any</span>): &nbsp;<?php echo $passportno; ?> </td>
  </tr>
  <tr>
    <td height="27"><label for="drivinglicense" >Driving License No(<span id="small4"><span id="small3">if any</span>)</span>: &nbsp;<?php echo $driving; ?></label></td>
    <td colspan="2"><label for="religion" > Religion(<span id="small3">optional</span>):&nbsp;<?php echo $religion; ?></label></td>
  </tr>
  <tr>
    <td height="32" colspan="2"><label for="personal_im" >Personal Identification Mark:&nbsp;<?php echo $indetification; ?></label></td>
    <td>Height(<span class="small1">in cm</span>):&nbsp;<?php echo $height; ?></td>
  </tr>
  <tr>
    <td height="25" colspan="3"><label for="mother_name" >Mother's Name:&nbsp;<?php echo $mothers_name; ?></label></td>
  </tr>
  <tr>
    <td height="29" colspan="3"><label for="mather_bangla" >Mother's Name(<span class="small1">in Bangla/native script</span>):&nbsp;<?php echo $mothers_name_in_bangla; ?></label></td>
  </tr>
  <tr>
    <td height="25" colspan="3"><label for="father_name" >Father's Name:&nbsp;<?php echo $fathers_name; ?></label></td>
  </tr>
  <tr>
    <td height="30" colspan="3"><label for="father_bangla" >Father's Name(<span class="small1">in Bangla/native script</span>):&nbsp;<?php echo $fathers_name_in_bangla; ?></label></td>
  </tr>
  <tr>
    <td height="33" colspan="3"><label for="gurdian_name" >Guardian's Name &amp; Relationship(<span class="small1">in absence of parents</span>):&nbsp;<?php echo $guardian_name; ?></label></td>
  </tr>
  <tr>
    <td height="29"><strong>3. Permanent Address:</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26" colspan="3">House,Road,Village/Locality:&nbsp;<?php echo $p_address; ?></td>
  </tr>
  <tr>
    <td height="35">Post Office: <?php echo $p_post_office; ?> </td>
    <td align="left">Post/ZIP Code: <?php echo $p_post_code; ?></td>
    <td align="left">PS/Upazila:&nbsp;<?php echo $p_upazilla; ?></td>
  </tr>
  <tr>
    <td height="28">District/Region:&nbsp; <?php echo $p_disrtict; ?></td>
    <td colspan="2" align="left">Country:&nbsp; Bangladesh</td>
  </tr>
  <tr>
    <td height="25" colspan="3"><strong>4. Present Address:</strong></td>
  </tr>
  <tr>
    <td height="27" colspan="3">House,Road,Village/Locality:&nbsp;<?php echo $pr_address; ?></td>
  </tr>
 
  <tr>
    <td height="34">Post Office:&nbsp; <?php echo $pr_post_office; ?> </td>
    <td width="266" align="left">Post/ZIP Code:&nbsp; <?php echo $pr_post_code; ?></td>
    <td align="left">PS/Upazila: &nbsp; <?php echo $pr_upazila; ?></td>
  </tr>
  <tr>
    <td><label for="persent_district_region" >District/Region:&nbsp; <?php echo $pr_disrtict; ?></label></td>
    <td colspan="2" align="left"><label for="persent_country" >Country:&nbsp; Bangladesh</label></td>
  </tr>
  <tr>
    <td height="32"><strong>5. Emergency Contact:</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="3"><label for="em_name_address" >Name &amp; Address: &nbsp; <?php echo $em_name; ?></label></td>
  </tr>

  <tr>
    <td><label for="em_relationship" >Relationship: &nbsp; <?php echo $em_rel; ?></label></td>
    <td colspan="2"><label for="em_phone" >Phone/Cell No:&nbsp; <?php echo $em_tel; ?></label></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="800" align="center">
  <tr>
    <td align="left"><strong>6. Previous Academic Information(</strong><span id="small5">start from recent</span><strong>):</strong></td>
  </tr>
</table>
<table width="805" border="1" align="center" cellpadding="1" cellspacing="0">
  <tr align="center" id="table_head">
    <td width="99"><strong>Exam &amp; Roll</strong></td>
    <td width="182"><strong>Institute/Department</strong></td>
    <td width="114"><strong>Board/University</strong></td>
    <td width="75"><strong>Passing year</strong></td>
    <td width="145"><strong>Subjects Taken</strong></td>
    <td width="51"><strong>Results</strong></td>
    <td width="93"><strong>Total Marks/ CGPA</strong></td>
  </tr>
  <tr>
    <td height="44" align="center" valign="middle"> HSC&nbsp; <?php echo $hsc_roll; ?></td>
    <td align="center" valign="middle"> <?php echo $hsc_inst; ?></td>
    <td align="center" valign="middle"><?php echo $hsc_board; ?></td>
    <td align="center" valign="middle"> <?php echo $hsc_pass; ?></td>
    <td align="center" valign="middle"> <?php echo $hsc_subjects; ?></td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle"> <?php echo $hsc_gpa; ?></td>
  </tr>
  <tr>
    <td height="44" align="center" valign="middle"> SSC&nbsp; <?php echo $ssc_roll; ?></td>
    <td align="center" valign="middle"><?php echo $ssc_inst; ?></td>
    <td align="center" valign="middle"><?php echo $ssc_board; ?></td>
    <td align="center" valign="middle"> <?php echo $ssc_pass; ?></td>
    <td align="center" valign="middle"> <?php echo $ssc_subjects; ?></td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle"> <?php echo $ssc_gpa; ?></td>
  </tr>
  <tr>
    <td height="46" align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="46" align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
</table>
<table width="805" align="center" cellpadding="1" cellspacing="2" wdth="800">
  <tr>
    <td align="center" id="declaration"><strong>DECLARATION</strong></td>
  </tr>
  <tr>
    <td height="51" align="center"><em>I hereby declare that the above information is true. I shall abide by the rules and regulations set by the University. I shall accept any decision by the University if I am accused of any violation of the University's rules and regulations.</em></td>
  </tr>
</table>
<table width="800" border="1" bordercolor="#000000" align="center" cellspacing="0">
  <tr>
    <td width="280" align="center" valign="bottom"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p> ________________________________</p>    Signature of Father /Mother/ Guardian in case candidate is under 18 years of age</td>
    <td width="160" align="center" valign="bottom"><p>__________________</p>
    <p>Signature of Candidate</p></td>
    <td width="200" align="center">Show photo
    <img src= "<?php echo 'photos/' . $session . '_'   . $units . '_' . $admission_roll.'.png' ;?>" alt="<?php echo $admission_roll.'.png' ;?>" name="logo"  class="style6" id="logo" style="height: 170px; width: 200px; margin-top:-20px;" align="middle" /></td>
    <td width="135" align="center" valign="bottom">Clear left thumb impression*</td>
  </tr>
</table>
<table width="800" align="center">
  <tr>
    <td colspan="3" align="right"><em id="attention">Please pay special attention to this part as it will be scanned for future reference</em></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="3" align="left">---------------------------------------------<em><strong>This part is for office use only</strong></em>--------------------------------------------------</td>
  </tr>
  <tr align="center">
    <td width="298" align="left">Approved for Admission</td>
    <td width="233">Approved for Admission</td>
    <td width="253" align="right">Approved for Admission</td>
  </tr>
  <tr>
    <td height="35" align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="29" align="left">__________________________________</td>
    <td align="center">_____________________________</td>
    <td align="right">__________________________</td>
  </tr>
  <tr align="center" valign="top">
    <td align="left">Chairman/Director's Signature &amp; Official Seal</td>
    <td>Dean's Signature &amp; Official Seal</td>
    <td align="right">Hall Provost's Signature &amp; Official Seal</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Hall:&nbsp; <?php echo $hall; ?></td>
    <td align="right">
    <input name="attached" type="checkbox" value="" id="attached"
     <?php if($hall_att_res == "Attached"){echo " CHECKED";}?> /> Attached
    <input name="resident" type="checkbox" value="" id="resident"
     <?php if($hall_att_res == "Resident"){echo " CHECKED";}?> /> Resident
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="bottom">------------------------------------------------------------------------------------------------------------------------------ </td>
  </tr>
  <tr>
    <td align="left">Verified at Registrar's Office</td>
    <td>&nbsp;</td>
    <td align="right">Admit the Canditade</td>
  </tr>
  <tr>
    <td height="45" align="left" valign="bottom">___________________________</td>
    <td>&nbsp;</td>
    <td align="right" valign="bottom">___________________________</td>
  </tr>
  <tr>
    <td align="left">Signature &amp; Official Seal</td>
    <td>&nbsp;</td>
    <td align="right">Registrar's Signature &amp; Official Seal</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td><strong>Student ID No:&nbsp; <?php echo $class_roll; ?></strong></td>
    <td>&nbsp;</td>
    <td> <strong>Registration No:&nbsp; <?php echo $registration; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" valign="bottom">----------------------------------------------------------------------------------------------------------------------------------- </td>
  </tr>
  <tr>
    <td><span id="fotter_small">Admission Serial No:&nbsp; <?php echo $admission_roll; ?></span></td>
    <td align="center"><span id="fotter_small">Admission Date:</span></td>
    <td align="right"><span id="fotter_small">Signature &amp; Official Seal of Bank</span></td>
  </tr>
  <tr>
    <td height="45"><span id="fotter_small">Comments:</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom">___________________________</td>
    <td align="center" valign="bottom">___________________________</td>
    <td>&nbsp;</td>
  </tr>
  <tr id="fotter_small">
    <td height="32" valign="top">Name and Signature of Data Entry Operator</td>
    <td align="center" valign="top"><p>Information Correctly Digitized</p>
    <p> Signature of the Student</p></td>
    <td align="right" valign="top">*In case of left hand disability use any fingure</td>
  </tr>
</table>
</div>    
</body>
</html>