<?php
include('server.php')
?>



<!DOCTYPE HTML>
<html lang="zxx">
<head>
<title>E-BANKING </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="KSBA Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
<!-- //css files -->
<link rel="stylesheet" type="text/css" href="css/demo.css"/>
<link rel="stylesheet" type="text/css" href="css/form.css"/>

<script type="text/javascript">
var login_attempts=3;
function check_form()
{
 var ID=document.getElementById("ID").value;
 var password=document.getElementById("password").value;
 if(ID=="$ID" && password=="$password")
 {
  alert("SuccessFully Logged In");
  document.getElementById("ID").value="";
  document.getElementById("password").value="";
 }
 else
 {
  if(login_attempts==0)
  {
   alert("No Login Attempts Available");
  }
  else
  {
   login_attempts=login_attempts-1;
   alert("Login Failed Now Only "+login_attempts+" Login Attempts Available");
   if(login_attempts==0)
   {
    document.getElementById("ID").disabled=true;
    document.getElementById("password").disabled=true;
    document.getElementById("form1").disabled=true;
   }
  }
 }
 
 return false;
}	
</script>

</head>


<body>

<!-- navigation -->
<div class="nav-links">	
		<div class="header-w3l">
			<div class="container">
				<a class="navbar-brand" href="login.php"><h1><span>Online</span> Banking</h1></a>
				<div class="call-w3l">
					<!-- <img src="images/rsz_call.png"> -->
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
		
	
                <div class="codecon_half">
                    <div class="expSearchBox">
					
                    </div>
		</div>
			<div class="clearfix"></div>
</div>
<!-- //navigation -->

<!-- banner section -->
				
<div class="banner-slider">
    <div class="container">
        <form id="form1" class="sign-up" method="post" name="myform" action="login.php">    <!--  onsubmit="return validate()"  -->
            <h1 class="sign-up-title">LOGIN</h1>
            <input type="text" class="sign-up-input" id="ID" name="ID" placeholder="User ID" autofocus required>
            <br>	<input type="password" class="sign-up-input" id="password" name="password" placeholder="Password" autofocus required>
             <br><br>	<a href="http://ksba.com/signin"><input type="submit" name="login" value="LOGIN" class="sign-up-button"></a>
                    <br><br>					
                      <br>
            <a href="#d"> Forget password? </a>
	</form>
    
	<div class="callbacks_container">
            <ul class="rslides" id="slider3">
		<li>

             </li>
            </ul>
		</div>
    </div>
<!-- //Slider -->
</div>


</body>
</html>