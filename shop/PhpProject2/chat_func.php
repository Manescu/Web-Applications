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


function get_msg()
{
    $query = "SELECT 'sender', 'message' FROM chat";
    $run = mysqli_query($GLOBALS['conn'], $query);
    $message = array();
    
    while ($message = mysqli_fetch_assoc($run))
    {
        $message[] = array('sender' => $message['sender'],'message'=> $message['message']);
    }
    
    return $message;
}

function send_msg($sender, $message)
{
    if (!empty($sender) && !empty($message)){
         
        $sender = mysqli_real_escape_string($GLOBALS['conn'], $sender);
        $message = mysqli_real_escape_string($GLOBALS['conn'], $message);
        
        $query = "INSERT INTO chat VALUES (null, '{$sender}', '{$message}')";
        mysqli_query($GLOBALS['conn'], $query);
        
    }
    else {
        return FALSE;
    }
    
}


    

?>