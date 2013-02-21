<?php
 
	session_start();   
	unset($_SESSION['user_or_admin_for_admission_system']); 
	unset($_SESSION['faculty_for_admission_system']); 
	unset($_SESSION['department_for_admission_system']); 
	unset($_SESSION['status_for_admission_system']); 
 	 
	header('Location: index.php');

?>