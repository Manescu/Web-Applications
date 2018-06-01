<?php 
include 'server.php';

$id_check=$_SESSION['ID'];
$msg = "";

if (isset($_POST['submit'])) {

	if (empty($_POST['acc_no']) || empty($_POST['amount']) ) {

		$msg = "all fields are necessary";
		
	}
	else{

		// defining and intitallizing variables

		$to_account=$_POST['acc_no'];

		$amount = $_POST['amount'];



		//getting sender's balance

		$sender_bal_qry = mysqli_query($db,"SELECT balance FROM accounts WHERE customerid = '$id_check'");

		$sender_bal_res_array = mysqli_fetch_assoc($sender_bal_qry);

		$sender_balance = $sender_bal_res_array['balance'];



		//checking for sufficient balance

		if($sender_balance < $amount){

			$msg = "You don't have enough balance";

		}


		//when  balance is enough 
		else{


				//checking if intended reciver has a account or not

				$chk_qry= "SELECT * from accounts where accno = '$to_account'";

				$check_reciever = mysqli_query($db,$chk_qry);



				if(mysqli_num_rows($check_reciever)){

						//reducing balance of sender's account	

						$mny_ded_sql = "UPDATE accounts SET balance = balance - $amount WHERE customerid = '$id_check'";

						$mny_ded = mysqli_query($db,$mny_ded_sql);



						// increasing the balance of the reciver's account 

						$mny_tr_sql= "UPDATE accounts SET balance = balance + $amount WHERE accno='$to_account' ";

	 					$mny_tr_res = mysqli_query($db,$mny_tr_sql);

//----------------------------------------------------------------------------------------------------------

	 					//update transaction table entries

	 					$reciever_assoc= mysqli_fetch_assoc($check_reciever);

						$reciever_id = $reciever_assoc['customerid'];


						//updating recievers transaction entries

						$upd_rec_sql= "INSERT INTO transaction(trans_date, acc_no, amount, receiver, description) values('".date('Y-m-d H:i:s')."', $to_account, '$amount', '$amount', 'money received')";

						$upd_sen_sql= "INSERT INTO transaction(trans_date, acc_no, amount, sender, description) values('".date('Y-m-d H:i:s')."', $to_account, '$amount', '$amount', 'money sent')";



						mysqli_query($db,$upd_rec_sql);

						mysqli_query($db,$upd_sen_sql);


//--------------------------------------------------------------------------------------------------------------------------

	 					//notifying that the transaction process was successful

	 					header("location: transaction_sucess.php");

				}
				else{		
                                    $msg = "The person you are trying to send money does not have a account with us";
				}

			}

	 }

}

 ?>


 <!DOCTYPE html>

 <html>

 <head>

 <link rel="stylesheet" type="text/css" href="css/transfer.css">

 	<title></title>

 </head>

 <body bgcolor="#00284f">



<h1>TRANSFER MONEY </h1>



 <!--===============  form for sending money ============================= -->	

 <div class="container" id="outer_container">

 <form action="" method="post" id="form">

 	<label>account number:</label>

 	<input type="text" name="acc_no"><br><br>


 	<label>amount:</label>

 	<input type="text" name="amount"><br><br>



 	<button name="submit" style="color: black; background-color: green;

 	width: 2.5cm;height: 1cm;">submit</button><br>

 	<?php echo $msg; ?>



 </form>

 </div>

    <div class="container" id="back-page">
        <a href="index.php">Home Page</a>
    </div>

 </body>
 </html>