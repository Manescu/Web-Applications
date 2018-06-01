<?php
include('server.php');


function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}

if(isset($_POST['Add']))
{
    
$name = mysqli_real_escape_string($db, $_POST['name']);
$card_nr = mysqli_real_escape_string($db, $_POST['card_nr']);
$month = mysqli_real_escape_string($db, $_POST['month']);
$year = mysqli_real_escape_string($db, $_POST['year']);
$cvv = mysqli_real_escape_string($db, $_POST['cvv']);

    if (empty($name))
    {
        array_push($errors, "name is required");
    }
    
    if (empty($card_nr))
    {
        array_push($errors, "card number is required");
    }
    
    if (empty($month))
    {
        array_push($errors, "month is required");
    }
    
    if (empty($year))
    {
        array_push($errors, "year is required");
    }
    
    if (empty($cvv))
    {
        array_push($errors, "cvv is required");
    }

    if(count($errors) == 0)
    {       
        $sql = "INSERT INTO card(name, card_nr, month, year, cvv) VALUES('$name', '$card_nr', '$month', '$year', '$cvv')";
        mysqli_query($db, $sql);
        header('location: index.php');       
    }
 else 
    {
        echo "mai incearca";
    }
}
    
//if($_SERVER['REQUEST_METHOD'] == 'POST')

?>