<?php 
include('server.php');

$results = mysqli_query($db,"SELECT * FROM accounts where customerid='$_SESSION[ID]'") or die("Error: ".mysqli_error($db));
while($arrow = mysqli_fetch_array($results))
{
	$acno = $arrow['accno'];	
	$customerid = $arrow['customerid'];
	$holder = $arrow['holder'];	
	$balance = $arrow['balance'];	
	$acctype = $arrow['acctype'];	
	$email = $arrow['email'];	
	$mobile = $arrow['mobile'];	
	$date_birth = $arrow['date_birth'];
}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>E-Banking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link href="css/style1.css" rel="stylesheet" type="text/css" />
        <link href="css/dropdown.css" rel="stylesheet" type="text/css" />
        <link href="css/createAccount.css" rel="stylesheet" type="text/css" />
        <script src="js/userAccounts.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="main-out">
            <div class="main">
                <div class="page">
                    <div class="top">
                        <div class="header">
                            <div class="header-top">
                                <div class="head">
                                    
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div>
                                <ul id="menu">
                                   <li><a href="index.php">Home</a></li>
                                   <li><a href="transaction_history.php" class="l">Transaction History</a></li>
                                   <li><a href="password-edit.php" class="l">Reset Password</a></li>
                                   <li><a href="adress_edit.php" class="l">Change Adress</a></li>
                                   <li><a href="logout.php" class="l">Logout</a></li>
                                </ul>
                            </div>
                            <div style="height:530px; margin-left: 28%;">
                                <br /><br />
                                <label for="act" style="font-size: 20px;font-family: 'Segoe UI';"> Enter Account Number:</label>
                                <input style="width: 27%;height: 1.8em;" type="number" id="act"><br /><br />
                                <input style="width:100px; height: 1.8em; margin-left:30%;" id="user" class="in" type="button" value="Submit">
                                <br /><br /><br />
                                <table id="userinfo">
                                    
                                     <tr>
                                        <td class="lbl"><b>Account NO:</b> </td>
                                        <td width="262">&nbsp;<?php echo $acno ; ?></td>

                                    </tr>
                                    
                                     <tr>
                                        <td class="lbl"><b>Customer ID:</b> </td>
                                        <td width="262">&nbsp;<?php echo $customerid ; ?></td>

                                    </tr>
                                    
                                    <tr>
                                        <td class="lbl"><b>Account Holder:</b> </td>
                                        <td width="262">&nbsp;<?php echo $holder ; ?></td>

                                    </tr>
                                    
                                     <tr>
                                        <td class="lbl"><b>Current Balance:</b> </td>
                                        <td width="262">&nbsp;<?php echo $balance ;echo ' RON' ?></td>

                                    </tr>
                                    
                                    <tr>
                                        <td class="lbl"><b>Account Type:</b> </td>
                                        <td>&nbsp;<?php echo $acctype ; ?></td>

                                    </tr>
                                                                     
                                    <tr>
                                        <td class="lbl"><b>E-mail: </b></td>
                                        <td>&nbsp;<?php echo $email ; ?></td>

                                    </tr>
                                           
                                    <tr>

                                        <td class="lbl"><b>Phone Number:</b></td>
                                        <td>&nbsp;<?php echo $mobile ; ?></td>

                                    </tr>
                                   
                                    <tr>
                                        <td class="lbl"><b>Date of Birth:</b> </td>
                                        <td>&nbsp;<?php echo $date_birth ; ?></td>

                                    </tr>                                  
                                </table>
                                <br />  
                                
                            </div>
                            <br />  <br />
                  
                        </div>
                    </div>
                    <div>



                    </div>
                </div>
            </div>
            <div class="bottom" style="margin-left: 175px">
                <ul style="margin-left: 370px">
                    <li style="border-left: medium none;"><a href="index.php">Home</a></li>
                    <li><a href="about.html">About&nbsp;Us</a></li>
                    <li><a href="contact.html">Contact US</a></li>
                </ul>
                <p>Copyright&copy;2018 Banking System, Inc.   -  All rights reserved.</p>
            </div>
        </div>
    

</body>
</html>