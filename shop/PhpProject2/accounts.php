<?php
include 'config.php';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>sadfg</title>
	<link href="css/reset.css" rel= stylesheet>
	<link href=css/header.css rel=stylesheet>
	<link href=css/body.css rel=stylesheet>
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	
	<style>
	        .slider{
	   
	        
	            
	        }
	</style>
</head>

<body>
<header>

<!-- jQuery library -->
<script src="JS/jquery-3.1.1.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="JS/jquery.bxslider.js"></script>
<script>
	$(document).ready(function(){
        $('.bxslider').bxSlider({
            mode: 'horizontal',
            moveSlides: 1,
            slideMargin: 15,
            infiniteLoop: true,
            slideWidth: 660,
            minSlides: 3,
            maxSlides: 6,
            speed: 800,
        });
    });
</script>

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
        <li><a href=#>Home</a></li>
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
<div class="contentWrapper">

<aside class=sidebar1>

<h2>Sidebar 1</h2>
  
    LINKS

</aside>
    
    <div class=main>
<?php
  $sql = "SELECT  * FROM signup where name='$_SESSION[username]'";
    $result = mysqli_query($conn, $sql);
    
    if ($result ->num_rows !=0)
    {
        while ($rows = $result->fetch_assoc())
        {
            
           $name = $rows['name'];
           $email = $rows['email'];
           $about = $rows['about'];
           echo "<p><strong>Your name: </strong>$name</p><br /><p><strong>Email:</strong>$email<br /> <p><strong>About You:</strong>$about</p> <br />"; 
        }
    }
    
?>

</div>
     
</div>
    <footer>

        <div class=subs>
            <form action="#" method="get">
                <input type="text" name="e-mail" value="enter your email">
                <input type="submit" value="Subscribe">
            </form>

        </div>

        <p>&#169 Copyright 2018. All Rights Reserved.

        <div class=footer-nav>
            <ul>
            <li>
                <a href=#>Who we are ? </a>
            </li>
            <li>
                <a href="#">FAQ</a>
            </li>
            <li>
                <a href="#">Help Us</a>
            </li>
            </ul>
        </div>    

    </footer>

</body>
</html>