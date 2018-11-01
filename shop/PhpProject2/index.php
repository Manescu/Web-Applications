<?php
include('config.php');
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>sadfg</title>
        <link href="CSS/reset.css" rel= stylesheet>
        <link href=CSS/header.css rel=stylesheet>
        <link href=CSS/body.css rel=stylesheet>
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
    
    function press() {
    var x = document.getElementById("hide");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

    function press2() {
    var x = document.getElementById("hide2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

    function press3() {
    var x = document.getElementById("hide3");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

    function press4() {
    var x = document.getElementById("hide4");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
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

<?php if(isset($_SESSION['username'])): { ?>

<div class="log_sign">
    <a href="accounts.php"> Your Profile </a>
    <a href=list_pm.php>Messages</a>
    <a href=logout.php>Logout</a>
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

    <h3 class="title_sidebar">The most Wanted</h3>
  
    <ul class="Wanted">
        <li><a href="#" onclick="press()">Laptop</a></li>
            <ul id="hide">
                <li><a href="#">Notebook/Laptop</a></li>
                <li><a href="#">Notebook bags</a></li>
                <li><a href="#">Hard disks</a></li>
            </ul>
        <li><a href="#" onclick="press2()">Mobile</a></li>
            <ul id="hide2">
                <li><a href="#">SmartWatch</a></li>
                <li><a href="#">Smartphone</a></li>
                <li><a href="#">360 degree cameras</a></li>
            </ul>
        <li><a href="#" onclick="press3()">Components</a></li>
            <ul id="hide3">
                <li><a href="#">Solid State Drive</a></li>
                <li><a href="#">Graphics Processor</a></li>
                <li><a href="#">Random Access Memory</a></li>
            </ul>
        <li><a href="#" onclick="press4()">Audio/Photo/Video</a></li>
            <ul id="hide4">
                <li><a href="#">Over Head</a></li>
                <li><a href="#">Digital Cameras</a></li>
                <li><a href="#">Lenses</a></li>
                <li><a href="#">Speakers</a></li>
            </ul>
    </ul>

</aside>
<div class=main>

  
  
    <p class="title">News</p> <br>
<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>
<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

    <p class="title">The most Viewed <br>

<ul class="bxslider">
  <li><a href="#"><img src="img/img1.jpg" /></a></li>
  <li><a href="#"><img src="img/img3.jpg" /></a></li>
  <li><a href="#"><img src="img/img4.png" /></a></li>

</ul>
 

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


<?php
}
?>

<?php
else:
{
//Otherwise, we display a link to log in and to Sign up
?>

<div class="log_sign">
    <a href=login.php>login</a>
    <a href=signup.php>sign up</a>
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

<h3 class="title_sidebar">The most Wanted</h3>
  
<ul class="Wanted">
        <li><a href="#" onclick="press()">Laptop</a></li>
            <ul id="hide">
                <li><a href="#">Notebook/Laptop</a></li>
                <li><a href="#">Notebook bags</a></li>
                <li><a href="#">Hard disks</a></li>
            </ul>
        <li><a href="#" onclick="press2()">Mobile</a></li>
            <ul id="hide2">
                <li><a href="#">SmartWatch</a></li>
                <li><a href="#">Smartphone</a></li>
                <li><a href="#">360 degree cameras</a></li>
            </ul>
        <li><a href="#" onclick="press3()">Components</a></li>
            <ul id="hide3">
                <li><a href="#">Solid State Drive</a></li>
                <li><a href="#">Graphics Processor</a></li>
                <li><a href="#">Random Access Memory</a></li>
            </ul>
        <li><a href="#" onclick="press4()">Audio/Photo/Video</a></li>
            <ul id="hide4">
                <li><a href="#">Over Head</a></li>
                <li><a href="#">Digital Cameras</a></li>
                <li><a href="#">Lenses</a></li>
                <li><a href="#">Speakers</a></li>
            </ul>
    </ul>


</aside>
<div class=main>

  
  
    <p class="title">News</p> <br>
<div class=news>
    <a href="example.php">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>
<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<div class=news>
<a href="#">
  <img src="img/responsive.jpg" alt=res/>
</a>
<p>Create a Responsive Web Design 
</div>

<p>Last Week <br>

<ul class="bxslider">
  <li><a href="#"><img src="img/img1.jpg" /></a></li>
  <li><a href="#"><img src="img/img3.jpg" /></a></li>
  <li><a href="#"><img src="img/img4.png" /></a></li>

</ul>
 

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


<?php
}
?>





</body>
</html>
<?php endif; ?>