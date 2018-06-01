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
           
           echo "</p>$name<br /><p>$message<br />"; 
        }
    }
    
    ?>   
</div>

<form action="chat.php" method="post">
    <label>
        Enter Name: <input type="text" name="sender">
    </label>    
    
    <label>
        Your Message: <input type="text" name="message"> <br />
    </label>
    
    <input type="submit" value="send the message" name="submit">
    
    
</form>