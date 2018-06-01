<?php
session_start();
// initializing variables

//$email    = "";
$errors = array(); 
// connect to the database
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "tuti";
// Create connection
$db = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);


// LOGIN USER
if (isset($_POST['login'])) {
  $name = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($name)) {
  	array_push($errors, "username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM signup WHERE name='$name' AND pas='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		echo "<script>alert('name or password is incorrect!')</script>";  
  	}
  }
}
?>