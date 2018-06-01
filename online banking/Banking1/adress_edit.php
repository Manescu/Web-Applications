<?php
//session_start();
include("server.php");
$ctrow = "";
$ftrow = "";
if(isset($_POST["button"]))
{
mysqli_query($db,"UPDATE users SET country='$_POST[country]', sector='$_POST[sector]',city='$_POST[city]',street='$_POST[street]',nr='$_POST[nr]',apartment='$_POST[apartment]' WHERE ID='$_SESSION[ID]'");
	if(mysqli_affected_rows($db) == 1)
	{
	$ctrow = "Address updated successfully..";
	}
	else
	{
	$ftrow = "Failed to update Address";
	}
}
?>

<script type="text/javascript">
function valid()
{
	if(document.form1.country.value==="")
	{
		alert("Enter country");
		return false;
	}
   if(document.form1.city.value==="")
	{
		alert("Enter city");
		return false;
	}
	if(document.form1.sector.value==="")
	{
		alert("Enter sector");
		return false;
	}
}
</script>

<script>
function validateForm()
{
var a=document.forms["form1"]["country"].value;
var b=document.forms["form1"]["sector"].value;
var c=document.forms["form1"]["city"].value;
if (a==null || a=="")||(b==null || b=="")||(c==null || c=="")
  {
  alert("Complete required fields");
  return false;
  }
}
</script>

<link rel="stylesheet" type="text/css" href="style/style.css" />

    
    <body>
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
     
        	  <table width="400" height="300" border="0">
                    <h1>Change Adress</h1>
        	    <tr>
        	      <th colspan="2" scope="row">&nbsp;<?php echo "<font color='green'>".$ctrow."</font>";echo "<font color='red'>".$ftrow."</font>";?></th>
       	        </tr>
        	   
        	   
        	    <tr>
        	      <th scope="row" align="left">Country</label></th>
        	      <td><input name="country" type="text" id="country" size="35" align="left" /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row" align="left">City</th>
        	      <td><input name="city" type="text" id="city" size="35" align="left" /></td>
      	      </tr>
                     <tr>
        	      <th scope="row" align="left">Sector</th>
        	      <td><input name="sector" type="text" id="sector" size="35" align="left" /></td>
      	      </tr>
                     <tr>
        	      <th scope="row" align="left">Street</th>
        	      <td><input name="street" type="text" id="street" size="35" align="left" /></td>
      	      </tr>
                     <tr>
        	      <th scope="row" align="left">Number</th>
        	      <td><input name="nr" type="text" id="nr" size="35" align="left" /></td>
      	      </tr>
                     <tr>
        	      <th scope="row" align="left">Apartment</th>
        	      <td><input name="apartment" type="text" id="apartment" size="35" align="left" /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td><input type="submit" name="button" id="button" value="Update" /></td>
      	      </tr>
      	    </table>
        	  <p>&nbsp;</p>
          </form>
        	<p>&nbsp;</p>
       	  <div class="cleaner_h50"></div>
        </div><!-- end of content -->
            
            <div id="templatemo_sidebar">
           
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
</div>
                
		<div class="cleaner"></div>
     </div>   
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    </body>