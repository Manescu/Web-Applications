<?php
session_start();
// initializing variables
$ID = "";
//$email    = "";
$errors = array();

// connect to the database
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "testdb";
// Create connection
$db = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);


// LOGIN USER
if (isset($_POST['login'])) {
  $ID = mysqli_real_escape_string($db, $_POST['ID']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($ID)) {
  	array_push($errors, "ID is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
//  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE ID='$ID' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['ID'] = $ID;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		echo "<script>alert('ID or password is incorrect!')</script>";  
  	}
  }
}
?>