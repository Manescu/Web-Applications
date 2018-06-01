<?php

include 'chat_func.php';
      
    if(isset($_POST['submit']))
    {
        if(send_msg($_POST['sender'], $_POST['message']))
        {
            echo 'message failed to send';
        }
        else {
            echo 'message send';
        }
    }
    
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
	        .ex {
                     margin-top:2%;
                     margin-left: auto;
                     margin-right: auto;
                     margin-bottom: 2%;
                     border: 1px solid; 
                     
                     background: #ccc;
                     padding: 20px; 
                     width: 550px;
                     resize: both;
                     overflow: auto;
                }
                .comments {margin-top:2%;
                     margin-left: auto;
                     margin-right: auto;
                     margin-bottom: 2%;
                     border: 1px solid; 
                     border-radius: 10px;
                     background: #F3F781;
                     padding: 20px; 
                     width: 900px;
                     resize: both;
                     overflow: auto;
                     box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.1) inset;
                }
                .comments:before, .comments:after{
                                        content:"";
                                        position:absolute;
                                        bottom:0;top:2px;left:15px;right:15px;
                                        z-index:-1;
                                        border-radius:100px/30px;
                                       -webkit-box-shadow:0 0 30px 2px #479F41;
                                        -moz-box-shadow:0 0 30px 2px #479F41;
                                        box-shadow: 0 0 30px 2px #479F41;
                                  }
                                  
                .mess {
                    font-size: 1.21em;
                    margin-left: 5%;
                    margin-bottom: 2%;
                }
                .comments h2 {font-size: 1.34em;}
                .name {
                    font-size: 1.5em;
                }
                
                .red {
                    color:#FE2E2E;
                }
                .orange{
                    color:#FE9A2E
                }
                .gray{
                    color:#a4a4a4;
                }
                .text {
                    font-size: 1.8em;
                    margin-bottom: 1%;
                    margin-top: 1%;
                    
                }
                
                .indent {
                    margin-left: 4%;
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

<h2>Sidebar 1</h2>
  
    LINKS

</aside>
<div class=main>

  
  
<p>new tutorials</p> <br>
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

<h2>Sidebar 1</h2>
  
    LINKS

</aside>
<div class=main>

   <div class="text">
    <p>PHP 5 and later can work with a MySQL database using:
        <ul>
            <li>MySQLi extension (the "i" stands for improved)</li>
            <li>PDO (PHP Data Objects)</li>
        </ul> 
   </div>
    <div class="ex">
        <h2>Mysqli example:</h2> <br />
        <p>session_start(); <br /><br />

            define(<span class="orange">'DB_HOST'</span>, <span class="orange">'localhost'</span>);<br />
            define(<span class="orange">'DB_USER'</span>, <span class="orange">'root'</span>);<br />
            define(<span class="orange">'DB_PASS'</span>, <span class="orange">''</span>);<br />
            define(<span class="orange">'DB_NAME'</span>, <span class="orange">'tuti'</span>);<br /><br />

            <span class="red">$errors</span> = array();<br /><br />

            <span class="red">$conn</span> = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);<br /><br />

            if (<span class="red">$conn</span>-><span class='nocolor'>connect_error) {</span><br />
            <span class="indent">die(<span class="orange">'Failed to connect: '</span> . <span class="red">$conn</span>->connect_error);<br /> </span>
}<br />
<br />
<br />
<br />
<span class="grey">//Home page file name</span><br />
<span class="red">$url_home</span> = <span class="orange">'index.php'</span>;<br /><br />

<span class="gray">//Design Name</span><br />
<span class="red">$design</span> = <span class="orange">'default'</span>;<br />
        <br />
        <p>
    </div>
    
    
    <div class="ex">
        <h2> PDO example:</h2> <br />
        <span class="red">$servername</span> = "localhost";<br />
        <span class="red">$username</span> = "username";<br />
        <span class="red">$password </span> = "password";<br /><br />

try {<br />
<span class="indent"><span class="red">$conn </span>= new PDO("mysql:host=$servername;dbname=myDB", $username, $password);<br /></span>
<span class="gray">// set the PDO error mode to exception</span><br />
<span class="indent"><span class="red">$conn</span>->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br /></span>
    echo "Connected successfully"; <br />
    }<br />
    <span class="indent"> catch(PDOException <span class="red">$e</span>)<br /></span>
    {<br />
    <span class="indent"> echo "Connection failed: " . <span class="red">$e</span>->getMessage();<br /> </span>
    }<br />
        <br />
    </div>
    
</div>

</div>


    <?php
//        $message = get_msg();
//        if (is_array($message) || is_object($message))
//        {
//            foreach ($message as $message)
//            {
//                echo '<strong>'.$message['sender'].'Sent </strong> <br />';
//                echo $message['message'].'<br /> <br />';
//            }
//        }
//        
//   
    $sql = "SELECT  sender, message FROM chat";
    $result = mysqli_query($conn, $sql);
    
    if ($result ->num_rows !=0)
    {
        while ($rows = $result->fetch_assoc())
        {
           $name = $rows['sender'];
           $message = $rows['message'];
           ?>
           <div class= "comments">
           <?php
           echo "<p><h2>$name</h2><br /> <div class=mess><p>$message<br /></div>"; ?>
           </div>
    <?php
        }
    }
    
    ?>
</div>
</div>

<form action="example.php" method="post">
    <label>
        Enter Name: <input type="text" name="sender">
    </label>    
    
    <label>
        Your Message: <input type="textarea" name="message"> <br />
    </label>
    
    <input type="submit" value="send the message" name="submit">
    
    
</form>


<footer>

    <div class=subs>
        <form action="#" method="post">
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