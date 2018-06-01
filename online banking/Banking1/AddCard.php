<?php
include('config_card.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adaugare Card</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<script>
    function validate()
    {
        var pass = document.myform.psw.value;
        var pp = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if(!pp.test(pass) || pass.length < 6)
        {
            alert("Please Enter a Valid Password ");
            return false;
        }

    }
</script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
<!-- //css files -->

<link rel="stylesheet" type="text/css" href="css/form.css"/>
<link rel="stylesheet" href="css/errors.css" />
<link rel="stylesheet" href="css/cardstyle.css" />

</head>
<body>

<!-- navigation -->
<div class="nav-links">	
		<div class="header-w3l">
			<div class="container">
				<a class="navbar-brand" href="index.php"><h1><span>Online</span> Banking</h1></a>
				<div class="call-w3l">
					<!-- <img src="images/rsz_call.png"> -->
					<a class="w3l-cont scroll" href="logout.php">Logout</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<div class="w3l-nav">
				<ul class="nav navbar-nav link-effect">
					<li class="active"><a href="index.php">Home</a></li>			
					<li><a href="account.php" class="scroll">My Account</a></li>
					<li><a href="bill.html" class="scroll">Payments</a></li>
					<li><a href="transfer.html" class="scroll">Transfer</a></li>
					
					<div class="dropdown" style="float:right;">
  <button class="dropbtn">Change Currency</button>
  <div class="dropdown-content">
    <a href="#">EUR</a>
    <a href="#">USD</a>
    <a href="#">RON</a>
  </div>
</div>
					
					<!-- <li><a href="#gallery" class="scroll">Change Currency </a></li>	 -->
					<li><a href="#sp" class="scroll">Help & Support</a></li>
				</ul>
                            <!-- <a class="w3l-cont scroll" href="#contact">Login</a> -->
			</div>
		</div>
	</nav>
	<div class="codecon_half">
				<div class="expSearchBox">
					
				</div>
			</div>
			<div class="clearfix"></div>
</div>

<div class="form">
<form action="AddCard.php" method="post" class="subform">
    <?php
    include ('errors.php');
    ?>
                <h1>Adaugare card</h1>

                <fieldset>
                    <label for="username" class="label"> Name:</label>
                    <input type="text"  name="name" > <br>

                    <label for="card_nr" class="label"> Card Number:</label>
                    <input type="text"  name="card_nr" > <br>
                    
                    Valid thru:
                    <br>
                    <label for="month" class="label">
                    Month
                    </label>
                    <input type="text"  name="month" > <br>
                    
                    <label for="year" class="label">
                    Year
                    </label>
                    <input type="text"  name="year"> <br>
                    
                    <label for="cvv" class="label">
                    CVV:
                    </label>
                    <input type="text"  name="cvv"> <br>
                </fieldset>
                

                <button type="submit" name="Add" class="button">Adaugare</button>
            </form>
</div>
    
</body>
</html>