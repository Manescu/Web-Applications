<?php
include('config.php');
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


<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php
//We check if the user is logged
if(isset($_SESSION['username']))
{
$form = true;
$otitle = '';
$orecip = '';
$omessage = '';
//We check if the form has been sent
if(isset($_POST['title'], $_POST['recip'], $_POST['message']))
{
	$otitle = $_POST['title'];
	$orecip = $_POST['recip'];
	$omessage = $_POST['message'];
	//We remove slashes depending on the configuration
	if(get_magic_quotes_gpc())
	{
		$otitle = stripslashes($otitle);
		$orecip = stripslashes($orecip);
		$omessage = stripslashes($omessage);
	}
	//We check if all the fields are filled
	if($_POST['title']!='' and $_POST['recip']!='' and $_POST['message']!='')
	{
		//We protect the variables
		$title = mysqli_real_escape_string($conn,$otitle);
		$recip = mysqli_real_escape_string($conn, $orecip);
		$message = mysqli_real_escape_string(nl2br(htmlentities($omessage, ENT_QUOTES, 'UTF-8')));
		//We check if the recipient exists
		$conn = mysqli_fetch_array(mysqli_query('select count(id) as recip, id as recipid, (select count(*) from pm) as npm from users where username="'.$recip.'"'));
		if($conn['recip']==1)
		{
			//We check if the recipient is not the actual user
			if($conn['recipid']!=$_SESSION['userid'])
			{
				$id = $conn['npm']+1;
				//We send the message
				if(mysqli_query($conn, 'insert into pm (id, id2, title, user1, user2, message, timestamp, user1read, user2read)values("'.$id.'", "1", "'.$title.'", "'.$_SESSION['userid'].'", "'.$conn['recipid'].'", "'.$message.'", "'.time().'", "yes", "no")'))
				{
?>
<div class="message">The message has successfully been sent.<br />
<a href="list_pm.php">List of my personnal messages</a></div>
<?php
					$form = false;
				}
				else
				{
					//Otherwise, we say that an error occured
					$error = 'An error occurred while sending the message';
				}
			}
			else
			{
				//Otherwise, we say the user cannot send a message to himself
				$error = 'You cannot send a message to yourself.';
			}
		}
		else
		{
			//Otherwise, we say the recipient does not exists
			$error = 'The recipient does not exists.';
		}
	}
	else
	{
		//Otherwise, we say a field is empty
		$error = 'A field is empty. Please fill of the fields.';
	}
}
elseif(isset($_GET['recip']))
{
	//We get the username for the recipient if available
	$orecip = $_GET['recip'];
}
if($form)
{
//We display a message if necessary
if(isset($error))
    {
	echo '<div class="message">'.$error.'</div>';
    }
//We display the form
?>
<div class="content">
	<h1>New Personnal Message</h1>
    <form action="new_pm.php" method="post">
		Please fill the following form to send a personnal message.<br />
        <label for="title">Title</label><input type="text" value="<?php echo htmlentities($otitle, ENT_QUOTES, 'UTF-8'); ?>" id="title" name="title" /><br />
        <label for="recip">Recipient<span class="small">(Username)</span></label><input type="text" value="<?php echo htmlentities($orecip, ENT_QUOTES, 'UTF-8'); ?>" id="recip" name="recip" /><br />
        <label for="message">Message</label><textarea cols="40" rows="5" id="message" name="message"><?php echo htmlentities($omessage, ENT_QUOTES, 'UTF-8'); ?></textarea><br />
        <input type="submit" value="Send" />
    </form>
</div>
<?php
}
}
else
{
	echo '<div class="message">You must be logged to access this page.</div>';
}
?>
		<div class="foot"><a href="list_pm.php">Go to my personnal messages</a> - <a href="http://www.webestools.com/">Webestools</a></div>
	</body>
</html>