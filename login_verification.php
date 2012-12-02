<?php
 
	session_start();
	include('connection.php');
	
	$login = mysql_query("SELECT * FROM tbl_login WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string( $_POST['password']) . "')");
	
	if (mysql_num_rows($login) == 1) 
	{
		$_SESSION['username'] = $_POST['username'];
		header('Location: home.php');
	}
	else 
	{
		header('Location: index.php');
	}

?>