<?php
	session_start();
 
	if (isset($_SESSION['username'])) {
		header('Location: home.php');
	}
?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admission Form </title>
     <!-- jQuery Libraries --> 
    <script src="js/jquery-1.7.js" type="text/javascript"></script>  
	<script  src="js/cam.js" type="text/javascript"></script>
	 
    <script src="js/script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/styles.css" />
     
</head>


<body  >
<table width="800" align="center">
  <tr>
        
        <td>
        <div align="center"><img src="images/logo.jpg" alt=" RU logo" name="logo" width="200" height="207" class="style6" id="logo" 
                    style="height: 80px; width: 80px" align="middle" />
      </div> 
        </td>
  </tr>
      <tr>
         <td height="49"  colspan="2" align="center" valign="top" class="style7"><span id="ru"><strong class="style4" id="ru_university">University of Rajshahi</strong></span></td>
      </tr>
      <tr>
        <td height="29">&nbsp;</td>
      </tr>
</table>
    <table class="tbl_registration_form" align="center" width="270" border="0" > 
    
    	<form method="POST" action="login_verification.php">
    	
        
          <tr class="tbl_reg_form_head" >
                <td colspan="2" rowspan="1" align="center"  ><label><strong>Please Login</strong></label></td>
          </tr>
            <tr>
                <td id="password"> <span class="password"><strong>Username:</strong></td>
              <td class="td_custom_second" ><input type="text"  name="username" id="username" value="" style="width:200px"/></td>
          </tr>
            
            <tr>
                <td class="password"  id="password"><strong>Password: </strong></td>
              <td class="td_custom_second" ><input type="password"  name="password" id="password" value="" style="width:200px"/></td>
          </tr>
            <tr>
              <td align="center" class="password"  id="password2">&nbsp;</td>
              <td align="left" class="password"  id="password2"><span class="td_custom">
                <input type="submit" id="login_button" value="       Login       " class="btn_login"/>
              </span></td>
            </tr>
            
            <tr>
              	<td class="td_custom" colspan="2" >&nbsp;</td>
            </tr> 
          
      </form>
</table>                                
       
  
       
	</body>
</html>