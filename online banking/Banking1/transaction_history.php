<?php

include 'server.php';   //getting session variables
$id_check=$_SESSION['ID'];



$qry = "SELECT * FROM transaction WHERE trans_id and description='money sent' order by trans_date desc";

$tran_res = mysqli_query($db,$qry);
?>

<!-- ================================== PHP SCRIPT ABOUVE THIS===============================-->


  <!DOCTYPE html>

  <html>

  <head> 

  <!-- Compiled and minified CSS -->

  <link href="https://fonts.googleapis.com/css?family=Lobster|Ubuntu:500" rel="stylesheet">

  <!--Import Google Icon Font-->

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="./css/my_transactions.css">


</head>

    <body>
        
    <!-- Page Layout here -->
  <div class="row">

        

<!-- ====================================== right pane ==========================-->

      

          <div class="col s12 m8 l9 " >



            <div class="container" id="right-pane">



               <pre id="right-heading">Recent  Transactions</pre>



<!--========================= printing table rows dynamically ================= -->

              <?php



                if (mysqli_num_rows($tran_res) > 0) {

    

                    echo '<table align="center">



                          <tr>



                          <th>Date</th>

                          <th>Account No</th>

                          <th>Credit</th>

                          <th>Debit</th>

                          <th>Description<th>

    

                          </tr>'; 

                    

                    $i =1;

                    while(($row = mysqli_fetch_assoc($tran_res)) AND ($i <= 5)){



                           echo "<tr><td>".$row['trans_date']."</td> <td>".$row['acc_no']."</td> <td>".$row['receiver']."</td> <td>".$row['sender']."</td><td>".$row['description']."</td><tr>";



                           $i++;

                    }



                    echo '</table>';    //closing table tag

                } 

                else {

                    echo "no transactions found!!!";

                }



            ?>

            </div>

          </div>

  </div>

<!--=================================== horizontal rule for separation ======================= -->



<div class="container" id="h_rule">  <hr>    </div>



<div style="height: 15cm;"></div>

      <!--Import jQuery before materialize.js-->

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>



        <!-- Compiled and minified JavaScript -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
      <script type="text/javascript" src="test.js"></script>

    </body>

  </html>