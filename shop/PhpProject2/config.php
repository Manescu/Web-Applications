<?php

session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tuti');

//$name = $_POST['name'];
//$card_nr = $_POST['card_nr'];
//$month = $_POST['month'];
//$year = $_POST['year'];
//$cvv = $_POST['cvv'];


$errors = array();

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Failed to connect: ' . $conn->connect_error);
}



//Home page file name
$url_home = 'index.php';

//Design Name
$design = 'default';
?>