<?php//session_start();include("server.php");$ctrow = "";$ftrow = "";if(isset($_POST["button"])){mysqli_query($db,"UPDATE users SET password='$_POST[newpass]' WHERE ID='$_SESSION[ID]' AND password='$_POST[oldpass]'");	if(mysqli_affected_rows($db) == 1)	{	$ctrow = "Password updated successfully..";	}	else	{	$ftrow = "Failed to update Password";	}}?><script type="text/javascript">function valid(){   if(document.form1.oldpass.value==="")	{		alert("INVALID OLD PASSWORD");		return false;	}	if(document.form1.newpass.value==="")	{		alert("INVALID NEW PASSWORD");		return false;	}	if(document.form1.confpass.value==="")	{		alert("INVALID CONFIRM PASSWORD");		return false;	}}</script><script>function validateForm(){var y=document.forms["form1"]["oldpass"].value;var z=document.forms["form1"]["newpass"].value;var a=document.forms["form1"]["confpass"].value;if (x==null || x=="")  {  alert("Login id must be filled out");  return false;  }  if (y==null || y=="")  {  alert("Old password must be entered");  return false;  }  if (z==null || z=="")  {  alert("Enter the new password");  return false;  }  if (a==null || a=="")  {  alert("Password must be confirmed");  return false;  }}</script> <link rel="stylesheet" type="text/css" href="style/style.css" />        <body>     <div id="templatemo_main"><span class="main_top"></span>      	<div class="inset">        <div id="templatemo_content">        	<form onsubmit="return valid()" id="form1" name="form1" method="post" action="">             	  <table width="400" height="300">                      <h1>Change Login password</h1>        	    <tr>        	      <th colspan="2" scope="row">&nbsp;<?php echo "<font color='green'>".$ctrow."</font>";echo "<font color='red'>".$ftrow."</font>";?></th>       	        </tr>        	           	    <tr>        	      <th scope="row" align="left">Old Password</th>        	      <td><input name="oldpass" type="password" id="oldpass" size="35" align="left" /></td>      	      </tr>        	    <tr>        	     <th scope="row" align="left">New Password</th>        	      <td><input name="newpass" type="password" id="newpass" size="35" align="left" /></td>      	      </tr>        	    <tr>        	      <th scope="row" align="left">Confirm Password</th>        	      <td><input name="confpass" type="password" id="confpass" size="35" align="left" /></td>      	      </tr>        	    <tr>        	      <th scope="row">&nbsp;</th>        	      <td>&nbsp;</td>      	      </tr>        	    <tr>        	      <th scope="row">&nbsp;</th>        	      <td><input type="submit" name="button" id="button" value="Update" /></td>      	      </tr>      	    </table>        	  <p>&nbsp;</p>          </form>        	<p>&nbsp;</p>       	  <div class="cleaner_h50"></div>          </div>        </div><!-- end of content -->                        <div id="templatemo_sidebar">                         <div class="cleaner_h40"></div>                                <h2>&nbsp;</h2>            </div>                		<div class="cleaner"></div></div>     <!-- end of main --><div id="templatemo_main_bottom"></div><!-- end of main --></body>