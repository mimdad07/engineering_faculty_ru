
<table class="tbl_registration_form" align="center" width="815" border="0" style="padding-left:15px;" >
  <tr>
    <td  class="style8" colspan="2">
    	<div align="center"><a href="home.php"><img src="images/logo.jpg" alt=" RU logo" name="logo" width="200" height="207" class="style6" id="logo" 
                    style="height: 80px; width: 80px" align="middle" /></a>
      </div> 
    </td>
  </tr>
    
  <tr>
    <td align="center" valign="top" class="style7"  colspan="2"><span id="ru"><strong class="style4" id="ru_university">University of Rajshahi</strong></span></td>
  </tr>
   
  <tr>
    <td align="center" class="style2"  colspan="2"><strong>Admission Form</strong></td>
  </tr>
  
  <tr>
       <td  colspan="2" align="center">
           <p align="center" class="attention_tag">&nbsp;FILL UP THE FORM YOURSELF. USE ENGLISH BLOCK LETTERS THROUGHOUT EXCEPT </p>
           <p class="attention_tag"> BANGLA/NATIVE SCRIPT IN SELECTED PLACES. AVOID OVER WRITING. DO NOT FOLD THE FORM</p> 
          <p align="center" class="attention_tag"><em>Read carefully before you start writing</em></p>
       </td>
  </tr>
    
   
    <tr>  
        <td width="401" class="td_custom_first">  
            <table class="tbl_addmission_info" width="100%" border="0" bgcolor="#F7F7F7"  ">
              <tr>
                <td colspan="2" align="left" class="td_search_by" style="text-decoration: underline; padding-bottom: 15px; font-size: 20px;">Query Admission Information:</td> 
              </tr>
              <div>
              <tr>
                <td class="td_class_roll_no" >Unit:</td>
                <td class="td_class_roll_no" >
                <select name="student_units" id = "student_units" style="text-align:center; width:130px;">
                   <option value="" selected="selected" > ----Select Unit---- </option>
                    <?php
                      
                      for( $i =0; $i< count($unitss_array); $i++ )
                      {
                        echo '<option value = "' . $unitss_array[$i] . '">' . $unitss_array[$i] . '</option>';
                      }
                    ?>
                </select>
                
                </td>
              </tr>
              
              <tr>
                <td class="td_class_roll_no">Admission Roll:</td>
                <td class="td_registration_roll_no">
                <input name="student_admission_roll_no" type="text" id="student_admission_roll_no" style="width:123px" maxlength="5"/> 
                <input type="submit" id="student_admission_roll_search" value="Search" />
                </td>
              </tr>
              
              <tr>
                <td>
                Score:
                </td>
                <td ><input name="student_admission_score" type="text" id="student_admission_score" style="width:123px" maxlength="5"/></td>
              </tr>
              
               <tr>
                <td>
                Position:
                </td>
                <td ><input name="student_admission_position" type="text" id="student_admission_position" style="width:123px" maxlength="5"/></td>
              </tr>
              
              <td>
              Admission Status :
                </td>
                <td ><label id="lbl_student_status"  style="width:123px" > </label></td>
              </tr>
              
            </table> 
        </td>
        	<td width="381"><embed id="embedflash" src="camcanvas.swf" quality="high" width="320" height="240" /></td> 
  </tr>
           
          
          <tr>  
          	<td align="right" style="padding-right:10px;">
            <button onclick="captureFromWebcam()">Take Photo</button>   </td> 
            <td><canvas style="border:1px solid yellow"  id="display_photo" width="320" height="240"></canvas></td>
  </tr>
          
          <tr>  
          	<td >&nbsp;</td> 
            <td><input type="checkbox" name="check_take_and_update_photo" id="check_take_and_update_photo">Update Photo and Print</td>
          </tr>
          
          <tr>  
          	<td style="font-size:20px; text-decoration:underline;">  <label for="name"><span id="format_tilte"><strong>1.Basic information:</strong></span><br /></label>  </td>  
          </tr>
          
          
          <tr> 
             <td height="31" class="td_class_roll_no" >
                Roll No:
<input name="student_class_roll_no" type="text" id="student_class_roll_no" style="width:250px" value="" maxlength="10"/>
    		 </td>
             <td colspan="2">
                Registration No :<input name="student_registration_no" type="text" id="student_registration_no" style="width:259px" value="" maxlength="4" /> 
             </td>
  </tr>
          
          <tr> 
            <td height="35" colspan="2" class="td_custom_second">
            Name:&nbsp;  
            <input type="text"  name="student_name" id="student_name" value="" style="width:723px"/></td>
          </tr>
          
           <tr> 
            <td height="30" colspan="2" class="td_custom_second">
            Name(<span class="small">in Bangla/inactive script</span>):
<input type="text"  name="student_name_in_ban" id="student_name_in_ban" value="" style="width:589px"/></td>
          </tr>
            
           <tr>
             <td height="31" colspan="2" align="left" class="td_custom_first" >Session:
<select name="student_session" id = "student_session" style="width:130px; text-align:center;">
        <option value="2012 - 13"  > 2012 - 13 </option>
		 <?php
					  
                      for( $i =0; $i< count($sessions_array); $i++ )
                      {
                        echo '<option value = "' . $sessions_array[$i] . '">' . $sessions_array[$i] . '</option>';
                      }
                    ?>
        </select>
               
             &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
             Year/Semister :
             <select name="student_year_semister" id = "student_year_semister" style="width:129px; text-align:center;">
              <option value="1st" > 1st </option>
					<?php
					
					  $class_sem = "1st, 2nd, 3rd, 4th, 5th, 6th, 7th, 8th" ;
					  $class_sem = explode( ", ", $class_sem );
					  
                      for( $i =0; $i< count($class_sem); $i++ )
                      {
                        echo '<option value = ' . $class_sem[$i] . '>' . $class_sem[$i] . '</option>';
                      }
                    ?>
               </select>
              
           &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp; &nbsp;</strong>&nbsp;
            Program:
            <select name="student_program" id = "student_program" style="width:135px; text-align:center;"> 
              <option value = "B.Sc." >B.Sc.</option>
              <option value = "B.Sc.">B.Sc</option>
              <option value = "M.Sc.">M.Sc</option>
              <option value = "M.Phil.">M.Phil</option>
              <option value = "PhD">PhD</option>
             </select></td>
  </tr>
   
   
   		
        <tr> 
        <td class="td_custom_second" colspan="2">Faculty:<select name="student_faculty" id = "student_faculty" onchange="showDepartments(this.value)" style="width:445px; text-align:center;">
        
           <option value="" > ---Select Faculty---</option>
            <?php
                  for( $i =0; $i< count($faculties_array); $i++ )
                  {
                    echo '<option value = "' . $faculties_array[$i] . '">' . $faculties_array[$i] . '</option>';
                  }
                ?>
        </select>
          </td>
      </tr>
   
   
       <tr>  
          <td height="36" colspan="2" class="td_custom_second">Institute/Department:<select name="student_department" id = "student_department" style="width:361px; text-align:center;">
               <option value="" > ---Select Department---</option>
            </select>
          </td>
      </tr>
   
       <tr> 
              <td height="33" colspan="2" class="td_custom_second">
                 Hall Name:
<select name="student_hall" id = "student_hall" style="width:420px; text-align:center;" >
        <option value="" > ---Select Hall---</option>
		 <?php
                      for( $i =0; $i< count($halls_array); $i++ )
                      {
                        echo '<option value = "' . $halls_array[$i] . '">' . $halls_array[$i] . '</option>';
                      }
                    ?>
        </select>
               &nbsp;&nbsp;   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="radio" name="student_hall_attached_resident" value="Attached" /> Attached 
                <input type="radio" name="student_hall_attached_resident" value="Resident" /> Resident 
              </td>
  </tr>
   
   	 <tr>  
          <td colspan="2" valign="top" class="td_custom_second"> 
          		<label for="quota" >Quota:</label>
          		&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" name="student_quota" value="Freedom Fighter" id="student_freedom" />
               
               Freedom Fighter
               
               <input type="radio" name="student_quota" value="Ethnic Monority" id="student_ethnic" />
               
               Ethnic Monority  
               
               <input type="radio" name="student_quota" value="Disabled" id="student_disabled" />           
               Disabled
               
                &nbsp;&nbsp;
               <input type="radio" name="student_quota" value="Ward" id="student_ward" />
                Ward
         </td>
  </tr>
   	 <tr>
   	   <td class="td_custom_second" colspan="2">&nbsp;</td>
  </tr>
    
    
    
<!------------------------------------------Personal information     ----------------------------  -->
    
    
   		<tr>  
          	<td style="font-size:20px; text-decoration:underline;"> <span id="format_tilte">2.Personal information:</span><br /> </td>  
        </tr>
        
         <tr> 
            <td class="td_custom_second" >Date of Birth(<span id="small">dd-mm-yyyy</span>):<input type="text" name="student_date_of_birth" id="student_date_of_birth"  value="" style="width:204px"/></td>
         
            <td class="td_custom_second" >Place of Birth(<span id="small">District & Country</span>):<input type="text"  name="student_place_of_birth" id="student_place_of_birth" value="" style="width:189px"/></td>
  </tr>
        
        
           <tr> 
              <td height="33" colspan="2" class="td_custom_second">Blood Group :
<select name="student_blood_group" id = "student_blood_group" width="200" style="text-align:center;">
        <option value = "Group" >Group</option>
        <option value = "A">A</option>
        <option value = "B">B</option>
        <option value = "AB">AB</option>
        <option value = "O">O</option>      
        </select>
                
                <input type="radio" name="student_blood_group_pos_neg" value="Positive" /> Positive 
                <input type="radio" name="student_blood_group_pos_neg" value="Negative" /> 
                Negative 
                
                
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; 
                Gender:
                <input type="radio" name="student_gender" value="Male" /> Male
                <input type="radio" name="student_gender" value="Female" /> 
                Female 
                
&nbsp;&nbsp;               Nationality: &nbsp;Bangladeshi
              </td> 
          </tr>
           
          
           <tr> 
            <td class="td_custom_second">  
            
             Phone/Cell No:<input type="tel"  name="student_cell_phone_no" id="student_cell_phone_no" value="" style="width:257px"/></td>
            <td align="left" class="td_custom_second">E-mail(<span id="small2">if any</span>):
             <input type="email"  name="student_e_mail" id="student_e_mail" value="" style="width:280px"/></td>
          </tr>
          
          
          <tr> 
            <td height="31" >  
            
                National ID(<span class="small">if any</span>):
<input type="text"  name="student_national_id" id="student_national_id" value="" style="width:230px"/>
                
            </td>
                <td >
            Valid Passport No(<span class="small">if any</span>):<input type="text"  name="student_passport_no" id="student_passport_no" value="" style="width:207px"/></td>
            <td width="4"></td>
          </tr>
          
          
          
          
          
          
           <tr> 
            <td >  
            
                Driving License No(<span id="small">if any)</span>:
<input type="text"  name="student_driving_license_no" id="student_driving_license_no" value="" style="width:180px"/>  
             </td >  
                  <td >   
               Religion (<span id="small">optional</span>):                    <select name="student_religion" id = "student_religion"style="width:251px; text-align:center;">
                 <option value = "" >---Select---</option>
                 <option value = "Islam">Islam</option>
                 <option value = "Hinduism">Hinduism</option>
                 <option value = "Christian">Christian</option>
                 <option value = "Buddhist">Buddhist</option>
                 <option value = "Others">Others</option> 
           	  </select>
             </td>
          </tr>
          
           <tr> 
            <td height="33">  
                Personal Identification Mark:<strong>
<input type="text"  name="student_personal_indetification" id="student_personal_indetification" value="" style="width:163px"/>
                </strong>
             </td> 
                <td> 
                
               Height(<span class="small">in cm</span>):<strong>
               <input type="text"  name="student_height" id="student_height" value="" style="width:276px"/>
             </strong></td>
          </tr>
          
          
          
          
          <tr> 
            <td class="td_custom_second" colspan="2">
              Mother's Name:<input type="text" name="student_mothers_name" id="student_mothers_name" value="" style="width:670px"/></td>      
  </tr>
              
              
           <tr> 
            <td height="32" colspan="2" >
              Mother's Name(<span class="small">in Bangla/native script</span>):
              <input type="text" name="student_mothers_name_indetail" id="student_mothers_name_indetail" value="" style="width:538px"/></td>       </tr>
          
           <tr> 
            <td colspan="2" >
            Father's Name:<input type="text"  name="student_fathers_name" id="student_fathers_name" value="" style="width:676px"/></td>
          </tr>
          
          <tr> 
            <td height="33" colspan="2" >
           Father's Name(<span class="small">in Bangla/native script</span>):<input type="text"  name="student_fathers_name_indetail" id="student_fathers_name_indetail" value="" style="width:548px"/></td>
          </tr>
          
           <tr> 
            <td class="td_custom_second" colspan="2">
            	Gurdian's Name & Relationship(<span class="small">in absence of parents</span>):
                <input type="text"  name="student_guardian_name" id="student_guardian_name" value="" style="width:439px"/></td>
          </tr>
           <tr>
             <td class="td_custom_second" colspan="2">&nbsp;</td>
           </tr>
          
          
<!------------------------------------------Permanent  Address     ----------------------------  -->
              </tr>
           
          
           <tr> 
    
   		<tr>  
          	<td style="font-size:20px; text-decoration:underline;"> <span id="format_tilte">3.Permanent  Address:</span><br /> </td>  
        </tr>
        
        
        <tr> 
            <td class="td_custom_second" colspan="2" >
             House,Road,Village/Locality:<input type="text"  name="student_permanent_address_house_road_vill" id="student_permanent_address_house_road_vill" value="" style="width:582px"/></td>
  </tr>
           
           
            <tr>  
 				<td height="30" > 
                Post Office:
<input type="text"  name="student_permanent_post_office" id="student_permanent_post_office" value="" style="width:200px"/> 
                </td >
                <td >
             
                Post/ZIP Code:<input type="text"  name="student_permanent_post_code" id="student_permanent_post_code" value="" style="width:269px"/>  
                </td>
			</tr> 
 			<tr> 
                <td>
                
                PS/Upazila:
			 
                <input type="text"  name="student_permanent_upazilla" id="student_permanent_upazilla" value="" style="width:200px"/> 
                </td>
                    <td>
                District :<select name="student_permanent_district" id = "student_permanent_district" onchange="showUpazilas(this.value, '1')" style="width:314px; text-align:center; " >
                  <option value="">---Select District---</option>
                  <?php
                      for( $i =0; $i< count($distict_list_array); $i++ )
                      {
                        echo '<option value = "' . $distict_list_array[$i] . '">' . $distict_list_array[$i] . '</option>';
                      }
                    ?>
                </select>
                </td>
          	</tr>
 			<tr>
 			  <td>&nbsp;</td>
 			  <td>&nbsp;</td>
  </tr>

           

<!------------------------------------------Present  Address     ----------------------------  -->
    
    
   		<tr>  
          	<td style="font-size:20px; text-decoration:underline;"> <span id="format_tilte">4.Present  Address:</span><br /> </td>  
        </tr>
        
        
        <tr> 
            <td class="td_custom_second" colspan="2">
             House,Road,Village/Locality:              <input type="text"  name="student_present_address_house_road_vill" id="student_present_address_house_road_vill" value="" style="width:578px"/></td>
  </tr>
           
           
            <tr>  
 				<td height="30"> 
                	
 <!--                   Country:  <input type="text" name="student_country"  />    -->
 				 Post Office:
<input type="text"  name="student_present_post_office" id="student_present_post_office" value="" style="width:200px"/>
 				 <strong> 
             </td>
             <td>
                Post/ZIP Code: 
                <input type="text"  name="student_present_post_code" id="student_present_post_code" value="" style="width:265px"/></tr> 
 			<tr> 
                <td >
               
                PS/Upazila:
				  
                <input type="text"  name="student_present_upazila" id="student_present_upazila" value="" style="width:200px"/>
                </td >
                <td >
                 District :<select name="student_present_district" id = "student_present_district" onchange="showUpazilas(this.value, '0')" style="width:315px; text-align:center;">
                   <option value="">---Select District---</option>
                   <?php
                      for( $i =0; $i< count($distict_list_array); $i++ )
                      {
                        echo '<option value = "' . $distict_list_array[$i] . '">' . $distict_list_array[$i] . '</option>';
                      }
                    ?>
                </select>
                
                </td>
          	</tr>
 			<tr>
 			  <td >&nbsp;</td >
 			  <td >&nbsp;</td>
  </tr>      
              

<!------------------------------------------Emergency  Address     ----------------------------  -->
    
    
   		<tr>  
          	<td style="font-size:20px; text-decoration:underline;"> <span id="format_tilte">5.Emergency Contact:</span><br /> </td>  
        </tr>
        
         <tr> 
            <td class="td_custom_second" colspan="2" >
            Name & Address:<input type="text"  name="contact_imergency_name" id="student_contact_imergency_name" value="" style="width:657px"/></td>
  </tr>
           
          <tr> 
            <td>
            Relationship:
<input type="text"  name="contact_imergency_relation" id="student_contact_imergency_relation" value="" style="width:195px"/>
          
          </td>
          <td>
            Phone/Cell No:<input type="text"  name="contact_imergency_phone_no" id="student_contact_imergency_phone_no" value="" style="width:268px"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          
<!------------------------------------------Previous Academic Information   ----------------------------  -->
    
    
   		<tr>  
          	<td style="font-size:20px; text-decoration:underline;"> <strong>6. Previous Academic Information:</strong></td>  
        </tr>
        
        
        
        <tr> 
            <td class="td_custom_second" colspan="2" >
            Institute( HSC ):<input type="text"  name="student_hsc_institute" id="student_hsc_institute" value="" style="width:665px"/> 
            </td>
        </tr> 
        
        <tr> 
            <td height="30" colspan="2" class="td_custom_second" >
            Institute( SSC ):            
              <strong>
              <input type="text"  name="student_ssc_institute" id="student_ssc_institute" value="" style="width:665px"/>
            </strong></td>
        </tr>    
        
        
        
        <tr> 
            <td class="td_custom_second" colspan="2" >
            Subjects( HSC ):<input type="text"  name="student_hsc_subjects" id="student_hsc_subjects" value="" style="width:664px"/> 
            </td>
        </tr> 
        
        <tr> 
            <td height="28" colspan="2" class="td_custom_second" >
            Subjects( SSC ):<input type="text"  name="student_ssc_subjects" id="student_ssc_subjects" value="" style="width:666px"/> 
            </td>
        </tr>      
        
         <tr>
            <td class="td_custom_first">&nbsp; </td>
            <td class="td_custom_second" ><label id="hidden_data" hidden="true" ></label></td>
  </tr>    

</table>


<script>
   
   var received='';
    var red='';
   
	$("#student_admission_roll_no").change(function () 
	{ 
		received='';
		  
		var admissionRoll = $("#student_admission_roll_no").val();
		var stUnit =  $("#student_units").val(); 
	
		var ajax = new XMLHttpRequest();	 
		ajax.onreadystatechange = function() 
		{ 
			if (ajax.readyState == 4) 
			{
				if (ajax.status == 200) 
				{
					//-----------------------------------       Update goes here -----------------------------
			 
					received = ajax.responseText; 
					var informations = received.split( '-pad-' );
					 
					$("#student_name").val( informations[10] ); 
					$("#student_fathers_name").val( informations[11] );
					$("#student_mothers_name").val( informations[12] ); 
					$("#student_ssc_gpa").val( informations[19] );
					$("#student_hsc_gpa").val( informations[20] ); 
                    
                    $("#student_ssc_subjects").val( informations[41] );
					$("#student_hsc_subjects").val( informations[42] ); 
					
					$("#hidden_data").text( received ); 
					 
				}
			} 
		}
		
		var send_roll = 'roll=' + admissionRoll;
		var send_unit = '&unit=' + stUnit; 
		 
		ajax.open("GET", sscHscInformation + send_roll + send_unit, true);
		ajax.send(null);
	 	 
	});	
	 
	 
	function admission_form_print_preview()
	{

		var data =  $("#hidden_data").text();
		var split_data = data.split( '-pad-' );
		
		var name = 'name=' +  $("#student_name").val()  + '&'  ; 
 
		var session = 'session=' +  $("#student_session").val()  + '&'  ; 
		var year_semister = 'year_semister=' +  $("#student_year_semister").val()  + '&'  ; 
		var program  = 'program=' +  $("#student_program").val()  + '&'  ; 
		var faculty = 'faculty=' +  $("#student_faculty").val()  + '&'  ; 
		var department = 'department=' +  $("#student_department").val()  + '&'  ; 
 
		var admission_roll = 'admission_roll=' +  $("#student_admission_roll_no").val()  + '&'  ; 
		var units = 'units=' +  $("#student_units").val()  + '&'  ; 
		var score = 'score=' +  $("#student_admission_score").val()  + '&'  ; 
		var position = 'position=' +  $("#student_admission_position").val()  + '&'  ; 
 
		var mothers_name  = 'mothers_name=' +  $("#student_mothers_name").val()  + '&'  ; 
		var fathers_name = 'fathers_name=' +  $("#student_fathers_name").val()  + '&'  ; 
		
		var hsc_board = 'hsc_board=' +  split_data[1]  + '&'  ; 
		var hsc_roll = 'hsc_roll=' +  split_data[2]  + '&'  ; 
		var hsc_pass = 'hsc_pass=' +  split_data[3]  + '&'  ; 
		
		var ssc_board = 'ssc_board=' +  split_data[4]  + '&'  ; 
		var ssc_roll = 'ssc_roll=' +  split_data[5]  + '&'  ; 
		var ssc_pass = 'ssc_pass=' +  split_data[6]  + '&'  ; 
        
        var ssc_subjects = 'ssc_subjects=' +  $("#student_ssc_subjects").val()  + '&'  ; 
		var hsc_subjects = 'hsc_subjects=' +  $("#student_hsc_subjects").val()  + '&'  ; 

		var ssc_gpa = 'ssc_gpa=' +  split_data[19]  + '&'  ; 
		var hsc_gpa = 'hsc_gpa=' +   split_data[20];
        
        
		  		
		var send_data = name +  session + year_semister +  program + faculty + department +  
						admission_roll + units  + score + position  + 
						mothers_name +  fathers_name +  
						hsc_board  + hsc_roll +  hsc_pass + 
                        ssc_board + ssc_roll + ssc_pass +  
                        ssc_subjects + hsc_subjects +
                        ssc_gpa + hsc_gpa ;
 	 
						 
		window.location = site_url + 'form_first.php?' + send_data; 
		
	}
	
	
	
	
	function student_action_send_form_data()
	{
		insert_or_update( 'insert_data' );
	 
	}
	 
	function insert_or_update( operation )
	{	 
	   //save  canvas image.	 
		photoName = $("#student_units").val() + '-' + $("#student_admission_roll_no").val() + '.png&';  
		var canvasPhoto = document.getElementById("display_photo");		
		var canvasData = photoName + canvasPhoto.toDataURL("image/png");
		 
		var ajax = new XMLHttpRequest();
		ajax.open("POST", 'save_photo.php', false);
		ajax.setRequestHeader('Content-Type', 'application/upload'); 
		ajax.send(canvasData ); 
		 
		var data =  $("#hidden_data").text();
		var split_data = data.split( '-pad-' );
		
		//collect field informations.
		var class_roll = 'class_roll=' + $("#student_class_roll_no").val()  + '&'  ; 
		var registration = 'registration=' + $("#student_registration_no").val()  + '&'  ; 
		var name = 'name=' +  $("#student_name").val()  + '&'  ; 
		var name_in_bangla = 'name_in_bangla=' +  $("#student_name_in_ban").val()  + '&'  ; 
		var session = 'session=' +  $("#student_session").val()  + '&'  ; 
		var year_semister = 'year_semister=' +  $("#student_year_semister").val()  + '&'  ; 
		var program  = 'program=' +  $("#student_program").val()  + '&'  ; 
		var faculty = 'faculty=' +  $("#student_faculty").val()  + '&'  ; 
		var department = 'department=' +  $("#student_department").val()  + '&'  ; 
		var hall = 'hall=' +  $("#student_hall").val()  + '&'  ; 
		var hall_att_res = 'hall_att_res=' +  $('input[name=student_hall_attached_resident]:checked').val()  + '&'  ; 
		var quota = 'quota=' +  $('input[name=student_quota]:checked').val()  + '&'  ; 

		var admission_roll = 'admission_roll=' +  $("#student_admission_roll_no").val()  + '&'  ; 
		var units = 'units=' +  $("#student_units").val()  + '&'  ; 
		var score = 'score=' +  $("#student_admission_score").val()  + '&'  ; 
		var position = 'position=' +  $("#student_admission_position").val()  + '&'  ; 
			 	
	
		var date_of_birth = 'date_of_birth=' +  $("#student_date_of_birth").val()  + '&'  ; 
		var place_of_birth = 'place_of_birth=' +  $("#student_place_of_birth").val()  + '&'  ; 
			
		var blood_group = 'blood_group=' +  $("#student_blood_group").val()  + '&'  ; 
		var blood_group_pn = 'blood_group_pn=' +  $('input[name=student_blood_group_pos_neg]:checked').val()  + '&'  ; 
		var gender = 'gender=' +  $('input[name=student_gender]:checked').val()  + '&'  ; 
		  
		var cell_phone = 'cell_phone=' +  $("#student_cell_phone_no").val()  + '&'  ; 
		var e_mail  = 'e_mail=' +  $("#student_e_mail").val()  + '&'  ; 
		var nationalid = 'nationalid=' +  $("#student_national_id").val()  + '&'  ; 
		var passportno  = 'passportno=' +  $("#student_passport_no").val()  + '&'  ; 		 
		var driving = 'driving=' +  $("#student_driving_license_no").val()  + '&'  ; 	 
		var religion  = 'religion=' +  $("#student_religion").val()  + '&'  ; 
		var indetification  = 'indetification=' +  $("#student_personal_indetification").val()  + '&'  ; 		
		var height  = 'height=' +  $("#student_height").val()  + '&'  ; 	
				 
		var mothers_name  = 'mothers_name=' +  $("#student_mothers_name").val()  + '&'  ; 
		var mothers_name_in_bangla  = 'mothers_name_in_bangla=' +  $("#student_mothers_name_indetail").val()  + '&'  ; 

		var fathers_name = 'fathers_name=' +  $("#student_fathers_name").val()  + '&'  ; 
		var fathers_name_in_bangla = 'fathers_name_in_bangla=' +  $("#student_fathers_name_indetail").val()  + '&'  ; 
		
		var guardian_name  = 'guardian_name=' +  $("#student_guardian_name").val()  + '&'  ; 
		
		var p_address  = 'p_address=' +  $("#student_permanent_address_house_road_vill").val()  + '&'  ; 
		var p_post_office = 'p_post_office=' +  $("#student_permanent_post_office").val()  + '&'  ; 
		var p_post_code = 'p_post_code=' +  $("#student_permanent_post_code").val()  + '&'  ; 
		var p_upazilla = 'p_upazilla=' +  $("#student_permanent_upazilla").val()  + '&'  ; 
		var p_disrtict = 'p_disrtict=' +  $("#student_permanent_district").val()  + '&'  ; 
		
	
		var pr_address = 'pr_address=' +  $("#student_present_address_house_road_vill").val()  + '&'  ; 
		var pr_post_office = 'pr_post_office=' +  $("#student_present_post_office").val()  + '&'  ; 
		var pr_post_code = 'pr_post_code=' +  $("#student_present_post_code").val()  + '&'  ; 
		var pr_upazila = 'pr_upazila=' +  $("#student_present_upazila").val()  + '&'  ; 
		var pr_disrtict = 'pr_disrtict=' +  $("#student_present_district").val()  + '&'  ; 
		 

		var em_name = 'em_name=' +  $("#student_contact_imergency_name").val()  + '&'  ; 
		var em_rel = 'em_rel=' +  $("#student_contact_imergency_relation").val()  + '&'  ; 
		var em_tel = 'em_tel=' +  $("#student_contact_imergency_phone_no").val()  + '&'  ; 


		var ssc_inst = 'ssc_inst=' +  $("#student_ssc_institute").val()  + '&'  ; 
		var hsc_inst = 'hsc_inst=' +  $("#student_hsc_institute").val()  + '&'  ; 
		
		var ssc_subjects = 'ssc_subjects=' +  $("#student_ssc_subjects").val()  + '&'  ; 
		var hsc_subjects = 'hsc_subjects=' +  $("#student_hsc_subjects").val()  + '&'  ; 
        
        
		var hsc_board = 'hsc_board=' +  split_data[1]  + '&'  ; 
		var hsc_roll = 'hsc_roll=' +  split_data[2]  + '&'  ; 
		var hsc_pass = 'hsc_pass=' +  split_data[3]  + '&'  ; 
		
		var ssc_board = 'ssc_board=' +  split_data[4]  + '&'  ; 
		var ssc_roll = 'ssc_roll=' +  split_data[5]  + '&'  ; 
		var ssc_pass = 'ssc_pass=' +  split_data[6]  + '&'  ; 

		var ssc_gpa = 'ssc_gpa=' +  split_data[19]  + '&'  ; 
		var hsc_gpa = 'hsc_gpa=' +   split_data[20];
		var insert_or_update = '&insert_or_update=' + operation;
		 
		var send_data =  class_roll + registration + name + name_in_bangla +  session + year_semister +
						 program + faculty + department + hall + hall_att_res + quota +  
						 admission_roll + units + score + position  +
								
					
						 date_of_birth + place_of_birth + blood_group +  blood_group_pn +  gender +
 						 cell_phone + e_mail + nationalid + passportno +  driving + religion + indetification + height +
						 mothers_name +  mothers_name_in_bangla +
						 fathers_name +  fathers_name_in_bangla + guardian_name +
						 p_address + p_post_office  + p_post_code + p_upazilla +  p_disrtict +
						 pr_address +  pr_post_office +  pr_post_code +  pr_upazila +  pr_disrtict +
						 
						 em_name + em_rel + em_tel +				
						 ssc_inst +  hsc_inst + ssc_subjects + hsc_subjects +
						 hsc_board  + hsc_roll +  hsc_pass + ssc_board + ssc_roll + ssc_pass +  ssc_gpa + hsc_gpa +
						 insert_or_update ;
	
 
		window.location=  site_url + 'form_last.php?' + send_data ;
  	}
	
	function student_action_update_form_data() 
	{
		//collect field informations.
		var class_roll = 'class_roll=' + $("#student_class_roll_no").val()  + '&'  ; 
		var registration = 'registration=' + $("#student_registration_no").val()  + '&'  ; 
		var name = 'name=' +  $("#student_name").val()  + '&'  ; 
		var name_in_bangla = 'name_in_bangla=' +  $("#student_name_in_ban").val()  + '&'  ; 
		var session = 'session=' +  $("#student_session").val()  + '&'  ; 
		var year_semister = 'year_semister=' +  $("#student_year_semister").val()  + '&'  ; 
		var program  = 'program=' +  $("#student_program").val()  + '&'  ; 
		var faculty = 'faculty=' +  $("#student_faculty").val()  + '&'  ; 
		var department = 'department=' +  $("#student_department").val()  + '&'  ; 
		var hall = 'hall=' +  $("#student_hall").val()  + '&'  ; 
		var hall_att_res = 'hall_att_res=' +  $('input[name=student_hall_attached_resident]:checked').val()  + '&'  ; 
		var quota = 'quota=' +  $('input[name=student_quota]:checked').val()  + '&'  ; 

		var admission_roll = 'admission_roll=' +  $("#student_admission_roll_no").val()  + '&'  ; 
		var units = 'units=' +  $("#student_units").val()  + '&'  ; 
		var score = 'score=' +  $("#student_admission_score").val()  + '&'  ; 
		var position = 'position=' +  $("#student_admission_position").val()  + '&'  ; 
			 	
	
		var date_of_birth = 'date_of_birth=' +  $("#student_date_of_birth").val()  + '&'  ; 
		var place_of_birth = 'place_of_birth=' +  $("#student_place_of_birth").val()  + '&'  ; 
			
		var blood_group = 'blood_group=' +  $("#student_blood_group").val()  + '&'  ; 
		var blood_group_pn = 'blood_group_pn=' +  $('input[name=student_blood_group_pos_neg]:checked').val()  + '&'  ; 
		var gender = 'gender=' +  $('input[name=student_gender]:checked').val()  + '&'  ; 
		  
		var cell_phone = 'cell_phone=' +  $("#student_cell_phone_no").val()  + '&'  ; 
		var e_mail  = 'e_mail=' +  $("#student_e_mail").val()  + '&'  ; 
		var nationalid = 'nationalid=' +  $("#student_national_id").val()  + '&'  ; 
		var passportno  = 'passportno=' +  $("#student_passport_no").val()  + '&'  ; 		 
		var driving = 'driving=' +  $("#student_driving_license_no").val()  + '&'  ; 	 
		var religion  = 'religion=' +  $("#student_religion").val()  + '&'  ; 
		var indetification  = 'indetification=' +  $("#student_personal_indetification").val()  + '&'  ; 		
		var height  = 'height=' +  $("#student_height").val()  + '&'  ; 	
				 
		var mothers_name  = 'mothers_name=' +  $("#student_mothers_name").val()  + '&'  ; 
		var mothers_name_in_bangla  = 'mothers_name_in_bangla=' +  $("#student_mothers_name_indetail").val()  + '&'  ; 

		var fathers_name = 'fathers_name=' +  $("#student_fathers_name").val()  + '&'  ; 
		var fathers_name_in_bangla = 'fathers_name_in_bangla=' +  $("#student_fathers_name_indetail").val()  + '&'  ; 
		
		var guardian_name  = 'guardian_name=' +  $("#student_guardian_name").val()  + '&'  ; 
		
		var p_address  = 'p_address=' +  $("#student_permanent_address_house_road_vill").val()  + '&'  ; 
		var p_post_office = 'p_post_office=' +  $("#student_permanent_post_office").val()  + '&'  ; 
		var p_post_code = 'p_post_code=' +  $("#student_permanent_post_code").val()  + '&'  ; 
		var p_upazilla = 'p_upazilla=' +  $("#student_permanent_upazilla").val()  + '&'  ; 
		var p_disrtict = 'p_disrtict=' +  $("#student_permanent_district").val()  + '&'  ; 
		
		var pr_address = 'pr_address=' +  $("#student_present_address_house_road_vill").val()  + '&'  ; 
		var pr_post_office = 'pr_post_office=' +  $("#student_present_post_office").val()  + '&'  ; 
		var pr_post_code = 'pr_post_code=' +  $("#student_present_post_code").val()  + '&'  ; 
		var pr_upazila = 'pr_upazila=' +  $("#student_present_upazila").val()  + '&'  ; 
		var pr_disrtict = 'pr_disrtict=' +  $("#student_present_district").val()  + '&'  ; 

		var em_name = 'em_name=' +  $("#student_contact_imergency_name").val()  + '&'  ; 
		var em_rel = 'em_rel=' +  $("#student_contact_imergency_relation").val()  + '&'  ; 
		var em_tel = 'em_tel=' +  $("#student_contact_imergency_phone_no").val()  + '&'  ; 

		var ssc_inst = 'ssc_inst=' +  $("#student_ssc_institute").val()  + '&'  ; 
		var hsc_inst = 'hsc_inst=' +  $("#student_hsc_institute").val()  + '&'  ; 
		
		var ssc_subjects = 'ssc_subjects=' +  $("#student_ssc_subjects").val()  + '&'  ; 
		var hsc_subjects = 'hsc_subjects=' +  $("#student_hsc_subjects").val();  

		
		var send_data =  class_roll + registration + name + name_in_bangla +  session + year_semister +
							 program + faculty + department + hall + hall_att_res + quota +  
							 admission_roll + units + score + position  +
									 
							 date_of_birth + place_of_birth + blood_group +  blood_group_pn +  gender +
							 cell_phone + e_mail + nationalid + passportno +  driving + religion + indetification + height +
							 mothers_name +  mothers_name_in_bangla +
							 fathers_name +  fathers_name_in_bangla + guardian_name +
							 p_address + p_post_office  + p_post_code + p_upazilla +  p_disrtict +
							 pr_address +  pr_post_office +  pr_post_code +  pr_upazila +  pr_disrtict +
							 
							 em_name + em_rel + em_tel +				
							 ssc_inst +  hsc_inst + ssc_subjects + hsc_subjects;
							 
							 
		//requesting for update data as well as update photo and print document
		if( $('#check_take_and_update_photo').attr('checked'))
		{
			insert_or_update( 'update_data' );
		}
		else
		{  
			$.post(  site_url + updateDigitalInformations + send_data );  
		}
		

	} 
	
	$("#student_admission_roll_search").click(function () 
	{ 
 				
				 
		var admissionRoll = $("#student_admission_roll_no").val();
		var stUnit =  $("#student_units").val(); 
		
		var send_roll = 'admission_roll=' + admissionRoll; 
		var send_unit = '&units=' + stUnit; 
		
		showPhoto( 'photos/' + stUnit + '-' + admissionRoll ); 
		
		var ajax = new XMLHttpRequest();	 
		ajax.onreadystatechange = function() 
		{ 
			if (ajax.readyState == 4) 
			{
				if (ajax.status == 200) 
				{
					//-----------------------------------       Update goes here -----------------------------
			 
					var received = ajax.responseText; 
					var informations = received.split( '-pad-' );
					 
                    //put field informations.
                    $("#student_class_roll_no").val( informations[0] );
                    $("#student_registration_no").val( informations[1] );
                    $("#student_name").val( informations[2] );
                    $("#student_name_in_ban").val( informations[3] );
                    $("#student_session").val( informations[4] );
                    $("#student_year_semister").val( informations[5] );
                    $("#student_program").val( informations[6] );
                    $("#student_faculty").val( informations[7] );
                    
                    $('#student_department').html('');				
                    $("#student_department").append('<option value="' +informations[8] + '">' + informations[8] +'</option>');
                    
                    $("#student_department").val( informations[8] );
                    $("#student_hall").val( informations[9] );
                    $(":radio[value=" +informations[10] + "]").attr('checked',true);
                    $(":radio[value='" +informations[11] + "']").attr('checked',true);
                     
            
                    $("#student_admission_roll_no").val( informations[12] );
                    $("#student_units").val( informations[13] );
                    $("#student_admission_score").val( informations[14] );
                    $("#student_admission_position").val( informations[15] );
                
                    $("#student_date_of_birth").val( informations[16] );
                    $("#student_place_of_birth").val( informations[17] );
                        
                    $("#student_blood_group").val( informations[18] );
                    $(":radio[value=" +informations[19] + "]").attr('checked',true);  
                     $(":radio[value=" +informations[20] + "]").attr('checked',true);  
                    $("#student_cell_phone_no").val( informations[21] );
                    $("#student_e_mail").val( informations[22] );
                    $("#student_national_id").val( informations[23] );
                    $("#student_passport_no").val( informations[24] );
                    $("#student_driving_license_no").val( informations[25] );
                    $("#student_religion").val( informations[26] );
                    $("#student_personal_indetification").val( informations[27] );
                    $("#student_height").val( informations[28] );
                             
                    $("#student_mothers_name").val( informations[29] );
                    $("#student_mothers_name_indetail").val( informations[30] );
            
                    $("#student_fathers_name").val( informations[31] );
                    $("#student_fathers_name_indetail").val( informations[32] );
                    
                    $("#student_guardian_name").val( informations[33] );
                    
                    $("#student_permanent_address_house_road_vill").val( informations[34] );
                    $("#student_permanent_post_office").val( informations[35] );
                    $("#student_permanent_post_code").val( informations[36] ); 
                    $("#student_permanent_upazilla").val( informations[37] );
                    $("#student_permanent_district").val( informations[38] );
                      
                    $("#student_present_address_house_road_vill").val( informations[39] );
                    $("#student_present_post_office").val( informations[40] );
                    $("#student_present_post_code").val( informations[41] ); 
                    
                    $("#student_present_upazila").val( informations[42] );
                    $("#student_present_district").val( informations[43] );
                     
                    $("#student_contact_imergency_name").val( informations[44] );
                    $("#student_contact_imergency_relation").val( informations[45] );
                    $("#student_contact_imergency_phone_no").val( informations[46] );
            
                    $("#student_ssc_institute").val( informations[47] );
                    $("#student_hsc_institute").val( informations[48] );
                    
                    $("#student_ssc_subjects").val( informations[49] );
                    $("#student_hsc_subjects").val( informations[50] );
                    $("#lbl_student_status").text( informations[59] );
                
                  
 					
				}
			} 
		}  

		ajax.open("GET", searchByAdmissionRoll + send_roll + send_unit, true);
		ajax.send(null);
		 
		//retrive admission datas by using ajax
		 
		var ad_received='';

	
		var ajax_admission = new XMLHttpRequest();	 
		ajax_admission.onreadystatechange = function() 
		{ 
			if (ajax_admission.readyState == 4) 
			{
				if (ajax_admission.status == 200) 
				{ 
					ad_received = ajax_admission.responseText;  
 					$("#hidden_data").text( ad_received ); 
				}
			} 
		}
		
		var send_roll = 'roll=' + admissionRoll;
		var send_unit = '&unit=' + stUnit; 
		 
		ajax_admission.open("GET", sscHscInformation + send_roll + send_unit, true);
		ajax_admission.send(null);
		  
	});	

	
</script>     
       
