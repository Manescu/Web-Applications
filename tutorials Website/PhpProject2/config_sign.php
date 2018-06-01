<?php

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

if(isset($_POST['submit']))
{
    
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
$hear = mysqli_real_escape_string($conn, $_POST['hear']);
$comments = mysqli_real_escape_string($conn, $_POST['comments']);

    if (empty($name))
    {
        array_push($errors, "name is required");
    }
    
    if (empty($email))
    {
        array_push($errors, "email is required");
    }
    
    if (empty($password))
    {
        array_push($errors, "passord is required");
    }
    
     if (empty($hear))
    {
        array_push($errors, "you need to complet hear input");
    }
    
     if (empty($comments))
    {
        array_push($errors, "comment is required");
    }
    
     if ($password !== $password2)
     {
         array_push($errors, "passord do not match");
     }
    
    if (count($errors) == 0)
    {
           $password = md5($password);
           $sql = "INSERT INTO signup(name, email, pas, hear, about) VALUES('$name', '$email', '$password', '$hear', '$comments')";
           mysqli_query($conn, $sql);  
           header('location: index.php');
    }
    else {
            echo "passord do not match";
         }
}

?>