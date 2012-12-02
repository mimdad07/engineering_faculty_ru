<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Search By Department</title>
    
    <!-- jQuery Libraries --> 
    <script src="js/jquery-1.7.js" type="text/javascript"></script> 
	<script src="js/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="javascripts/jquery.print.js"></script>
	<link rel="stylesheet" href="css/styles.css" />
</head>

<body class="main_body" >
    <section id="firstPage" data-role="page" > 
    
    <?php 
		require("connection.php"); 
		require("local_data.php");       
	 
	?> 
        
        <table class="tbl_search_by_dept_st_info" align="center" width="400" border="0" bgcolor="#F7F7F7"> 
            <tr> 
                <td class="td_custom_second" style=" width:100">Faculty:</td> 
                <td><select name="student_faculty" id = "student_faculty" onchange="showDepartments(this.value)" style="width:300px;text-align:center;">
                
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
                <td height="36" class="td_custom_second">Institute/Department:</td> 
                <td><select name="student_department" id = "student_department" onchange="showRollNameByDept(this.value)"  style="width:300px;text-align:center;">
                <option value="" > ---Select Department---</option>
                </select>
                </td>
            </tr> 
        </table> 
        
        
        
<!--  ----------------------  Table for displaying student's Information ---------------------  -->
		
        <div id="print_this_portion" >
        <table  align="center" width="750" border="0" >  
            <tr>  
                <td align="center" style=" padding-bottom:10px;" ><label id="lbl_department_name" style="font-size:20px; font-weight:bold; text-decoration:underline;">Department</label></td> 
            </tr> 
        </table>
        
        <table id="tbl_search_by_dept" class="tbl_search_by_dept" align="center" width="750"  border="1" cellpadding="1" cellspacing="0" >
           <tr bgcolor="#CCCCCC" > 
            <th> No. </th>
            <th> Exam Roll </th>
            <th> Name </th>
            <th> Position &nbsp;</th>
            <th> &nbsp;Score &nbsp;</th>
            <th> Mobile No </th>
          </tr>   
           
         <tr id="insert_before_row" hidden>
            <td  colspan="4"  style="padding-top:10px" ><hr size=1></td>
         </tr>
        </table>
        
        </div>        
        
        <table align="center" width="400" border="0">
        	<tr >
            <td align="center" ><input type="submit" id="btn_print_exam_role_name" value="Print"  class="btn_print" /></td>
         </tr>
        </table>
        

        
    </section>
    
<script type="text/javascript">
	$('#btn_print_exam_role_name').click(function() { 
		$('#print_this_portion').printElement(); 
	});
</script> 
 
</body>
</html>
