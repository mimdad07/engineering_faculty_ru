<?php
 
	session_start();
	include('connection.php');
	
	$login = mysql_query("SELECT * FROM tbl_login WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string( $_POST['password']) . "')");
	
	if (mysql_num_rows($login) == 1) 
	{
		$info = mysql_fetch_array($login);
		if( $info[ 'status' ] == 'User' )
		{
			$_SESSION['user_or_admin_for_admission_system'] = $info['username'];
			$_SESSION['faculty_for_admission_system'] = $info['faculty'];
			$_SESSION['department_for_admission_system'] = $info['department']; 
			$_SESSION['status_for_admission_system'] = $info['status'];
			header('Location: home.php');
		} 
		else if( $info[ 'status' ] == 'Admin' )
		{
			$_SESSION['user_or_admin_for_admission_system'] = $info['username'];
			$_SESSION['faculty_for_admission_system'] = $info['faculty'];
			$_SESSION['department_for_admission_system'] = $info['department'];
			$_SESSION['status_for_admission_system'] = $info['status'];
			header('Location: admin/admin.php'); 
			
		}
		 
	}
	else 
	{
		header('Location: index.php');
	}

?>