 <?php
 
	session_start();
	
	if ( !isset($_SESSION['user_or_admin_for_admission_system'])) 
	{
		header('Location: ../index.php');
	}
	else if ( $_SESSION['status_for_admission_system'] == 'User') 
	{
		header('Location: ../index.php');
	} 
	
	require('../connection.php');
	require("../local_data.php");   
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
     <!-- jQuery Libraries --> 
    <script src="js/jquery-1.7.js" type="text/javascript"></script>   
    <script src="js/admin_script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/styless.css" />
     
</head>


<body class="main_body" background="../images/dept_background.png" >
 	<input type="button" class="btn_logout" value="Logout" onClick="action_logout();">

<?php
if( isset($_POST[ 'action' ]) && $_POST[ 'action' ] =='adduser' )
{
    $username = $_POST[ 'username' ] ;
	$password = $_POST[ 'password' ] ;
	$faculty =  $_POST[ 'faculty' ] ;
	$department = $_POST[ 'department' ] ;
	$status = $_POST[ 'status' ] ; 
	
	if( $username != '' || $password != '' )
	{
		$insert_query = "insert into tbl_login( username, password, faculty, department, status ) values( "  . 
		
				"'{$username}', "  .
				"'{$password}', "  .
				"'{$faculty}', "  .
				"'{$department}', "  . 
				"'{$status}'"  .
				")";
				
		$result=mysql_query($insert_query );
	}
}

if( isset($_POST[ 'action' ]) && $_POST[ 'action' ] =='edituser' )
{
	$id = $_POST[ 'id' ] ;
    $username = $_POST[ 'username' ] ;
	$password = $_POST[ 'password' ] ;
	$faculty =  $_POST[ 'faculty' ] ;
	$department = $_POST[ 'department' ] ;
	$status = $_POST[ 'status' ] ; 
	
	if( $username != '' || $password != '' )
	{
		$query_update = " update tbl_login". 
		
					" set ".
			
					" username= '$username', ".
					" password = '$password', ".
					" faculty = '$faculty', ".
					" department = '$department', ".
					" status = '$status' ".
					" where ".
					" _id = '$id' " ; 
		
				
		$result=mysql_query($query_update );
	}
}

if( isset($_POST[ 'action' ]) && $_POST[ 'action' ] =='deleteuser' )
{
	$id = $_POST[ 'id' ] ;
	$delete_query = "delete from tbl_login where _id='{$id}' ";
	$result=mysql_query($delete_query);
}
?>


 
<?php 
	$login_info = mysql_query("SELECT * FROM tbl_login" );
?>


<table class="tbl_registration_form" align="center" width="815" border="0" style="padding-left:15px;" >  

 	<tr>  
		<td style="font-weight:bold; font-size:22px; padding-top:10px; padding-bottom:20px;" align="center" >Admin Panel</td>  
	</tr> 
 	
	<tr>  
		<td style="font-weight:bold">Add Admin/User</td>  
	</tr>    
    
    <tr>
        <td>
            <table class="tbl_addmission_info"  align="left" width="400" cellspacing="0"  bgcolor="#F2F2F2"  >
                <tr> 
                    <td> Username: </td>
                    <td> <input type="text" id="txt_add_username" style="width:250px" value=""/> </td>
                </tr> 
                
                 <tr> 
                    <td> Password: </td>
                    <td> <input type="text" id="txt_add_password" style="width:250px" value=""/> </td>
                </tr> 
                 
                 <tr> 
                <td>Faculty:</td> 
                <td><select name="student_faculty" id = "slct_add_faculty" onchange="showDepartments(this.value)" style="width:255px;text-align:center;">
                
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
                <td>Department:</td> 
                <td><select id = "slct_add_department" style="width:255px;text-align:center;">
                <option value="" > ---Select Department---</option>
                </select>
                </td>
            </tr>  
            
            
			<tr> 
                <td> Status: </td>
                <td>
                    <select id = "slct_add_status"  style="width:255px;text-align:center;">
                    <option value="" > ---Select Status---</option>
                    <option value = "Admin" >Admin</option>
                    <option value = "User">User</option> 
                    </select>
                </td>
			</tr>  
            
             <tr> 
             	<td></td> 
                <td> 
                    <input type="submit" id="btn_update_info" value="Update" hidden="true"/>
                	<input type="submit" id="btn_add_admin_or_user" value="Submit" />
                </td>  
            </tr> 
                    
            </table>
        </td>
     </tr>
     
	<tr>  
		<td style="font-weight:bold; padding-top:20px;">Admin List</td>  
	</tr>    
    
 	<tr>
    	<td>
         <table align="center" width="750"  border="1" cellpadding="1" cellspacing="0" >
           <tr> 
            <th> No. </th>
            <th> Username </th>
            <th> Password </th>
            <th> Faculty</th>
            <th> Department</th> 
            <th> Action</th> 
          </tr>   
          
          <?php
		   $count=1;
		  	while( $row=mysql_fetch_array($login_info))
			{
				if( $row[ 'status' ] == 'Admin' )
				{  
					echo '<tr id="row_'. $row[ "_id" ] .'" style="text-align:center;">'; 
					echo '<td class="Admin" >' . $count++ . '</td>';
					echo '<td>' . $row[ "username" ] . '</td>'; 
					echo '<td>' . $row[ "password" ] . '</td>'; 
					echo '<td>' . $row[ "faculty" ] . '</td>'; 
					echo '<td>' . $row[ "department" ] . '</td>'; 
					echo '<td>' .
						 	'<input type="submit" id="edit_'. $row[ "_id" ] .'" value="Edit"  class="btn_edit_delete"/>' .
							'<input type="submit" id="delete_'. $row[ "_id" ] .'" value="Delete"  class="btn_edit_delete" />' .
						  '</td>'; 
					
					echo '</tr>'; 
            
				}
			}
		  ?>
         </table>
       </td>
     </tr>
 	
    <tr>  
		<td style="font-weight:bold; padding-top:20px;">User List</td>  
	</tr>
 
 	<tr>
    	<td>
         <table align="center" width="750"  border="1" cellpadding="1" cellspacing="0" >
           <tr bgcolor="#CCCCCC" > 
            <th> No. </th>
            <th> Username </th>
            <th> Password </th>
            <th> Faculty</th>
            <th> Department</th> 
            <th> Action</th> 
          </tr>   
          
          <?php
		   mysql_data_seek($login_info,0); 
		   $count=1;
		  	while( $row=mysql_fetch_array($login_info))
			{
				if( $row[ 'status' ] == 'User' )
				{  
					echo '<tr id="row_'. $row[ "_id" ] .'" style="text-align:center;">'; 
					echo '<td  class="User" >' . $count++ . '</td>';
					echo '<td>' . $row[ "username" ] . '</td>'; 
					echo '<td>' . $row[ "password" ] . '</td>'; 
					echo '<td>' . $row[ "faculty" ] . '</td>'; 
					echo '<td>' . $row[ "department" ] . '</td>'; 
					echo '<td>' .
						 	'<input type="submit" id="edit_'. $row[ "_id" ] .'" value="Edit" class="btn_edit_delete"/>' .
							'<input type="submit" id="delete_'. $row[ "_id" ] .'" value="Delete" class="btn_edit_delete" />' .
						  '</td>'; 
					
					echo '</tr>'; 
            
				}
			}
		  ?>
         </table>
       </td>
     </tr>
</table>

<script>

	var edit_row_id='';
	$("#btn_add_admin_or_user").click(function () 
	{ 
		var username = $("#txt_add_username").val();
		var password = $("#txt_add_password").val();     
		var faculty = $("#slct_add_faculty").val();  
		var department = $("#slct_add_department").val();
		var status = $("#slct_add_status").val();
		
	    if( username != "" || password!="" )
		{	 
			post("admin.php", {
				username:username,
				password:password,
				faculty:faculty,
				department:department,
				status:status,
				action:"adduser"
			})
			}
	
		});
		
	$("#btn_update_info").click(function () 
	{
		$("#btn_update_info").hide();
		
		
		var username = $("#txt_add_username").val();
		var password = $("#txt_add_password").val();     
		var faculty = $("#slct_add_faculty").val();  
		var department = $("#slct_add_department").val();
		var status = $("#slct_add_status").val();
		
	    if( username != "" || password!="" )
		{	 
			post("admin.php", {
				id:edit_row_id,
				username:username,
				password:password,
				faculty:faculty,
				department:department,
				status:status,
				action:"edituser"
			})
			}
	
		});

 
	//find which edit or delete button has been clicked.
	$("input.btn_edit_delete").live("click", function() 
	{
		var btn_id = $(this).attr("id");
		var btn_type   = btn_id.substring( 0, btn_id.lastIndexOf( '_' )  );	                     //finding increment or decrement type
		var btn_number = btn_id.substring(btn_id.lastIndexOf( '_' )+1 , btn_id.length  );        // number of the button
		
		//if edit button pressed
		if( btn_type == 'edit' )
		{
			$("#btn_update_info").show();
			edit_row_id = btn_number; 
			var row_id = "row_" + btn_number; 
			var username = $("#" +row_id+ " td:nth-child(2)").text();
			var password = $("#" +row_id+ " td:nth-child(3)").text();  
			var faculty = $("#" +row_id+ " td:nth-child(4)").text(); 
			var department = $("#" +row_id+ " td:nth-child(5)").text();   
    		var status = $("#" +row_id+ " td:nth-child(1)").attr( "class" ); 
			
			$("#txt_add_username").val( username );
			$("#txt_add_password").val( password ); 
			$("#slct_add_faculty").val( faculty );
			$("#slct_add_department").val( department );
			$("#slct_add_department").html('');
			$("#slct_add_department").append('<option value="' + department + '">' + department +'</option>' );
			$("#slct_add_status").val( status );
		}
		//if delete button pressed
		if( btn_type == 'delete' )
		{
			post("admin.php", {
				id:btn_number,
				action:"deleteuser"
			}) 
		} 
	
	});
	

</script>       
       	
</body>
</html>