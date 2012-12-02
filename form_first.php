<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php 
 require("form_begin_requiring.php");     
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admission form</title>
<script type="text/javascript" src="javascripts/jquery.print.js"></script>
 
<style type="text/css">
.attention_tag1 strong em {
	font-size: 11px;
}
.attention_tag {
	font-size: 11px;
}
#ru #ru_university {
	font-size: x-large;
}
</style>
</head>


<div align="center" id="print_details">
<body onload="window.print()">
<table width="800" align="center" cellpadding="1" cellspacing="2">
  <tr>
    <td colspan="3" align="center"><a href="home.php"><img src="images/logo.jpg" alt=" RU logo" name="logo" width="200" height="207" class="style6" id="logo" 
                    style="height: 80px; width: 80px" align="middle" /></a>&nbsp;</td>
  </tr>
  <tr>
    <td height="36" colspan="3" align="center"><span id="ru"><strong id="ru_university">University of Rajshahi</strong></span>&nbsp;</td>
  </tr>
  <tr>
    <td height="38" colspan="3" align="center"> <strong>Admission Form</strong>&nbsp;</td>
  </tr>
  <tr>
    <td height="35" colspan="3" align="center"><span class="attention_tag">FILL UP THE FORM YOURSELF. USE ENGLISH BLOCK LETTERS THROUGHOUT EXCEPT
      </span>      <p class="attention_tag"> 
    BANGLA/NATIVE SCRIPT IN SELECTED PLACES. AVOID OVER WRITING. DO NOT FOLD THE FORM.</p></td>
  </tr>
  <tr>
    <td height="24" colspan="3" align="center"><span class="attention_tag1"><strong><em>Read carefully before you start writing.</em></strong></span></td>
  </tr>
  
  <tr>
	<td height="26">Unit: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong> <?php echo $units; ?></strong></td>
	<td height="26">&nbsp;</td>
	<td height="26">Score: <strong> <?php echo $score; ?></strong></td>
  </tr>
   <tr>
	<td height="26">Admission Roll: &nbsp; <strong><?php echo $admission_roll; ?></strong></td>
	<td height="26">&nbsp;</td>
	<td height="26">Position: <strong><?php echo $position; ?></strong></td>
  </tr>
   <tr>
     <td height="21">&nbsp;</td>
     <td height="21">&nbsp;</td>
     <td height="21">&nbsp;</td>
  </tr>
  <tr>
    <td height="28" colspan="3"><strong>1. Basic information:</strong></td>
  </tr>
  <tr>
    <td height="26" colspan="3">Name: &nbsp;  <strong><?php echo $name; ?> </strong></td>
  </tr>
  <tr>
    <td height="26" colspan="3"><label for="bangla_name">Name(<span class="small1">in Bangla/native script</span>):___________________________________________________________________________</label></td>
  </tr>
  <tr>
     <td height="26">Session: &nbsp; <strong><?php echo $session; ?> </strong></td>
    <td height="26">Year/Semester: &nbsp; <strong><?php echo $year_semister; ?> </strong> </td>
    <td width="221" height="26">Program:&nbsp; <strong><?php echo $program; ?> </strong></td>
  </tr>
  <tr>
    <td height="22" colspan="3">Department/Institute: &nbsp; <strong><?php echo $department; ?> </strong> </td>
  </tr>
  <tr>
    <td height="29" colspan="3"><label for="faculty" >Faculty:&nbsp; <strong><?php echo $faculty; ?> </strong></label></td>
  </tr>
  <tr>
    <td height="24" colspan="3">Quota:</label>
     
       
      <input type="checkbox" name="" value="" id="freedom" />
       Freedom Fighter
       <input type="checkbox" name="" value="" id="ethnic" />
       Ethnic Monority  
       <input type="checkbox" name="" value="" id="disabled" />
       Disabled
       <input type="checkbox" name="" value="" id="ward" />
        Ward&nbsp;</td>
  </tr>
  <tr>
    <td height="24" colspan="3"><strong>2. Personal information:</strong></td>
  </tr>
  <tr>
    <td width="295" height="31"><label for="birthday" >Date of Birth(<span id="small">dd-mm-yyyy</span>):______________</label></td>
    <td colspan="2">Place of Birth(<span id="small2">District &amp; Country</span>):__________________________________</td>
  </tr>
  <tr>
    <td height="27" colspan="3">Blood Group: 
        <input type="checkbox" name="" value="" id="group_a" />A:
       <input type="checkbox" name="" value="" id="group_b" />B:  
       <input type="checkbox" name="" value="" id="group_ab" />AB:
       <input type="checkbox" name="" value="" id="group_o" />O:
       <input type="radio" name="blood_group" value="radio" id="positive" />Positive
       <input type="radio" name="blood_group" value="radio" id="negative" />Negative
    </td>
  </tr>
  <tr>
    <td height="30">Gender: <label>
         <input type="radio" name="RadioGroup1" value="radio" id="male" />
         Male</label>

       <label>
         <input type="radio" name="RadioGroup1" value="radio" id="female" />
         Female</label></td>
    <td colspan="2">Nationality:____________________________________________________</td>
  </tr>
  <tr>
    <td height="31"><label for="cellphone" >Phone/Cell No:</label>
      ________________________</td>
    <td colspan="2"><label for="email" >E-mail(<span id="small3">if any</span>):__________________________________________________</label></td>
  </tr>
  <tr>
    <td height="33">National ID(<span class="small1">if any</span>):_____________________</td>
    <td colspan="2">Valid Passport No(<span class="small1">if any</span>):________________________________________</td>
  </tr>
  <tr>
    <td height="34"><label for="drivinglicense" >Driving License No(<span id="small4"><span id="small3">if any</span>)</span>:_______________</label></td>
    <td colspan="2"><label for="religion" > Religion(<span id="small3">optional</span>):_______________________________________________</label></td>
  </tr>
  <tr>
    <td height="27" colspan="2"><label for="personal_im" >Personal Identification Mark:______________________________________________</label></td>
    <td>Height(<span class="small1">in cm</span>):________________</td>
  </tr>
  <tr>
    <td height="23" colspan="3"><label for="mother_name" >Mother's Name:&nbsp; <strong><?php echo $mothers_name; ?> </strong></label></td>
  </tr>
  <tr>
    <td height="34" colspan="3"><label for="mather_bangla" >Mother's Name(<span class="small1">in Bangla/native script</span>):_____________________________________________________________________</label></td>
  </tr>
  <tr>
    <td height="22" colspan="3"><label for="father_name" >Father's Name:&nbsp; <strong><?php echo $fathers_name; ?> </strong></label></td>
  </tr>
  <tr>
    <td height="28" colspan="3"><label for="father_bangla" >Father's Name(<span class="small1">in Bangla/native script</span>):_____________________________________________________________________</label></td>
  </tr>
  <tr>
    <td colspan="3"><label for="gurdian_name" >Guardian's Name &amp; Relationship(<span class="small1">in absence of parents</span>):________________________________________________________</label></td>
  </tr>
  <tr>
    <td height="30"><strong>3. Permanent Address:</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="29" colspan="3">House,Road,Village/Locality:_____________________________________________________________________________</td>
  </tr>
  <tr>
    <td height="29">Post Office:___________________________</td>
    <td align="left">Post/ZIP Code: _____________________</td>
    <td>PS/Upazila:__________________</td>
  </tr>
  <tr>
    <td height="34">District/Region:_________________________</td>
    <td colspan="2" align="left">Country:________________________________________________________</td>
  </tr>
  <tr>
    <td height="21" colspan="3"><strong>4. Present Address:</strong></td>
  </tr>
  <tr>
    <td colspan="3">House,Road,Village/Locality:_____________________________________________________________________________</td>
  </tr>
  <tr>
    <td colspan="3">____________________________________________________________________________________________________</td>
  </tr>
  <tr>
    <td height="32">Post Office:___________________________</td>
    <td width="266" align="left">Post/ZIP Code: _____________________</td>
    <td>PS/Upazila:__________________</td>
  </tr>
  <tr>
    <td><label for="persent_district_region" >District/Region:_________________________</label></td>
    <td colspan="2" align="left"><label for="persent_country" >Country:________________________________________________________</label></td>
  </tr>
  <tr>
    <td><strong>5. Emergency Contact:</strong></td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="36" colspan="3"><label for="em_name_address" >Name &amp; Address:______________________________________________________________________________________</label></td>
  </tr>
  <tr>
    <td height="32" colspan="3">____________________________________________________________________________________________________</td>
  </tr>
  <tr>
    <td><label for="em_relationship" >Relationship:___________________________</label></td>
    <td colspan="2"><label for="em_phone" >Phone/Cell No:__________________________________________________</label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

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
    <td height="44" align="center"> HSC&nbsp; <?php echo $hsc_roll; ?></td>
    <td align="center">_ _ _ _ _ _ _ _ _ _ _</td>
    <td align="center"><?php echo $hsc_board; ?></td>
    <td align="center"> <?php echo $hsc_pass; ?></td>
    <td align="center"> <?php echo $hsc_subjects; ?></td>
    <td align="center">-</td>
    <td align="center"> <?php echo $hsc_gpa; ?></td>
  </tr>
  <tr>
    <td height="44" align="center"> SSC&nbsp; <?php echo $ssc_roll; ?></td>
    <td align="center">_ _ _ _ _ _ _ _ _ _ _</td>
    <td align="center"><?php echo $ssc_board; ?></td>
    <td align="center"> <?php echo $ssc_pass; ?></td>
    <td align="center"> <?php echo $ssc_subjects; ?></td>
    <td align="center">-</td>
    <td align="center"> <?php echo $ssc_gpa; ?></td>
  </tr>
  <tr>
    <td height="46" align="center">-</td>
    <td align="center">_ _ _ _ _ _ _ _ _ _ _</td>
    <td align="center">-</td>
    <td align="center">-</td>
    <td align="center">_ _ _ _ _ _ _ _ _ _ _</td>
    <td align="center">-</td>
    <td align="center">-</td>
  </tr>
  <tr>
    <td height="46" align="center" lign="center">-</td>
    <td align="center">_ _ _ _ _ _ _ _ _ _ _</td>
    <td align="center">-</td>
    <td align="center">-</td>
    <td align="center">_ _ _ _ _ _ _ _ _ _ _</td>
    <td align="center">-</td>
    <td align="center">-</td>
  </tr>
</table>
<table width="800" align="center" cellpadding="1" cellspacing="2">
  <tr>
    <td height="30" align="center" id="declaration"><strong>DECLARATION</strong></td>
  </tr>
  <tr>
    <td height="58"><em>I hereby declare that the above information is true. I shall abide by the rules and regulations set by the University. I shall accept any decision by the University if I am accused of any violation of the University's rules and regulations.</em></td>
  </tr>
</table>
<table width="800" border="1" align="center" cellspacing="0">
  <tr>
    <td width="280" align="center"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>____________________________________</p>    Signature of Father /Mother/ Guardian in case candidate is under 18 years of age</td>
    <td width="160" align="center" valign="bottom"><p>__________________</p>
    <p>Signature of Candidate</p></td>
    <td width="138" align="center">Photo</td>
    <td width="135" align="center" valign="bottom">Clear left thumb impression*</td>
  </tr>
</table>
<table width="800" align="center">
  <tr>
    <td height="24" colspan="3" align="right"><em id="attention">Please pay special attention to this part as it will be scanned for future reference</em></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="3" align="left">--------------------------------------------------------<em><strong>This part is for office use only</strong></em>-----------------------------------------------------</td>
  </tr>
  <tr align="center">
    <td width="299" align="left">Approved for Admission</td>
    <td width="232">Approved for Admission</td>
    <td width="253" align="right">Approved for Admission</td>
  </tr>
  <tr>
    <td height="35" align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="29" align="left">__________________________</td>
    <td align="center">_____________________________</td>
    <td align="right">__________________________</td>
  </tr>
  <tr align="center" valign="top">
    <td height="51" align="left">Chairman/Director's Signature &amp; Official Seal</td>
    <td>Dean's Signature &amp; Official Seal</td>
    <td align="right">Hall Provost's Signature &amp; Official Seal</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2">Hall:______________________________________________________________</td>
    <td align="right">
    <input name="attached" type="checkbox" value="" id="attached" />
   Attached
    <input name="resident" type="checkbox" value="" id="resident"/>
   Resident
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="bottom">---------------------------------------------------------------------------------------------------------------------------------------------------- </td>
  </tr>
  <tr>
    <td height="29" align="left">Verified at Registrar's Office</td>
    <td>&nbsp;</td>
    <td align="right">Admit the Candidate</td>
  </tr>
  <tr>
    <td height="45" align="left" valign="bottom">___________________________</td>
    <td>&nbsp;</td>
    <td align="right" valign="bottom">_______________________________</td>
  </tr>
  <tr>
    <td align="left">Signature &amp; Official Seal</td>
    <td>&nbsp;</td>
    <td align="right">Registrar's Signature &amp; Official Seal</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <td><strong>Student ID No:</strong></td>
    <td>&nbsp;</td>
    <td> <strong>Registration No:</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="48" colspan="3" valign="bottom">---------------------------------------------------------------------------------------------------------------------------------------------------- </td>
  </tr>
  <tr>
    <td><span id="fotter_small">Admission Serial No:</span></td>
    <td align="center"><span id="fotter_small">Admission Date</span></td>
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
    <td height="51" valign="top">Name and Signature of Data Entry Operator</td>
    <td height="40" align="center" valign="top"><p>Information Correctly Digitized </p>
    <p>Signature of the Student</p></td>
    <td align="right" valign="top">*In case of left hand disability use any fingure</td>
  </tr>
</table>

</div>    
</body>
</html>