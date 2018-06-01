<?php
include 'config_login.php';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>sadfg</title>
	<link href="css/reset.css" rel= stylesheet>
	<link href=css/header.css rel=stylesheet>
	<link href=css/body.css rel=stylesheet>
	<link href="jquery.bxslider.css" rel="stylesheet" />
	
	<style>

	.subform {
font-size: 1.2em;
color: white;
font-family:Tahoma, Geneva, sans-serif;
}

.subform .label {
display: inline-block;
width: 200px;
vertical-align: top;
text-align: right;
margin-right: 10px;
font-weight: bold;
color: rgba(255,255,255,.5);
line-height: 1.2em;
margin-top: 1em;
}

.subform input[type=submit]{margin-left:220px;
padding: 10px 25px;
font-size: 1em;
margin-top: 5px;
color: white;
background: rgb(0,102,153);
background: -webkit-linear-gradient(rgba(255,255,255,.1) 40%,
rgba(255,255,255,.5));
background: -moz-linear-gradient(rgba(255,255,255,.1) 40%,
rgba(255,255,255,.5));
background: -o-linear-gradient(rgba(255,255,255,.1) 40%,
rgba(255,255,255,.5));
background: linear-gradient(rgba(255,255,255,.1) 40%, rgba(255,255,255,.5));
border: none;
border-radius: 5px;
box-shadow: 0 0 4px white;}


.subform input[type=text],.subform input[type=Password]
{
    border-radius: 5px;
border: none;
margin-top: 1em;
background-color: rgba(255,255,255,.5);
color: rgba(255,255,255,1);
font-size: 1.2em;
box-shadow: inset 0 0 10px rgba(255,255,255,.75);
width: 500px;
padding: 5px;
}


.subform input[type="text"]:focus, .subform textarea:focus {
background-color: white;
color: black;
}

.page{
        margin-left: 20%;
       

    }

    .page:after {
        content: ""; 
        clear: both; 
        display: block;
}
	</style>
	
</head>

<body>
<header>

<!-- jQuery library -->


<div class="second-nav">
    <ul>
        <li><a href=#>Q/A</a></li>
        <li><a href="#">Examples</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
    </ul>


<div class=search>
    <form action="#" method="get">
        <input type=text size="25px" mane=search value="search">
        <input type="submit" value="Search">
    </form>
</div>
</div>
<div class=logo>
<img src=img/tuti%20logo.png alt=logo/>
</div>




<nav>
    <ul>
        <li><a href=index.php>Home</a></li>
        <li><a href=#>Front-end</a>
            <ul>
                <li><a href=#>HTML</a></li>
                <li><a href=#>CSS</a></li>
                <li><a href=#>JavaScript</a></li>
                <li><a href=#>Jquery</a></li>
            </ul></li>
        <li><a href=#>Back-end</a>
            <ul>
                <li><a href=#>PHP</a></li>
                <li><a href=#>ASP.NET</a></li>
                <li><a href=#>Java</a></li>
            </ul></li>
        <li><a href=#>Database</a>
            <ul>
                <li><a href=#>Oracle</a></li>
                <li><a href=#>MySQL</a></li>
            </ul> </li>
        <li><a href=#>Programming</a>
            <ul>
                <li><a href=#>C</a></li>
                <li><a href=#>C++</a></li>
                <li><a href=#>Python</a></li>
            </ul> </li>
    </ul>
</nav>

</header>

<br>

<!-- sign up-->

<div class=page>

    <form class="subform"  method="post" action="login.php">
    <p>
        <label for="username" class=label>Username</label>
        <input type="text" name="username" id="username">
    </p>

        <p>
        <label for="Password" class=label>Password</label>
        <input type="Password" name="password" id="password">
    </p>

        

    
    
    
    <p>
        <input type="submit" value="Login" name="login">
    </p>
</form>
</div>





</body>
</html>
