<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparksdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "select * from users where id=$from";
    $query1 = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query1);

    $sql = "select * from users where id=$to";
    $query1 = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query1);


    //Conditions
    //For negative value
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    //Insufficient balance
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    //For 0 (zero) value
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred !')";
         echo "</script>";
     }


    else {
                $newbalance = $sql1['balance'] - $amount;
                $sql = "update users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['balance'] + $amount;
                $sql = "update users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "insert into transaction (sender, `receiver`, `balance`) values ('$sender','$receiver','$amount')";
                $query1=mysqli_query($conn,$sql);

                if($query1)
                {
                     
               
                echo "<script> alert('Transaction Successful'); 
             window.location='transferhistory.php';</script>";
               
               
               
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!doctype html>
<html lang="en">

    <link rel="stylesheet" href="style.css">
 

</head>
<body>
<?php
  include 'navbarr.php';
?>
    
     

  

 <!-- user table-->
 <div class="container">
        <h2 class="text-center" style="color : black;">USER DETAILS</h2>
            <?php
                include 'dbcon.php';
                $sid =  $_GET['id'] ;
             
                $sql = "select * from users where id=$sid";
                
                $result1 = mysqli_query($conn,$sql);
                if(!$result1)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows = mysqli_fetch_assoc($result1);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
        <table class="table table-bordered table-info  table-hover">

                <div class="container" style="overflow-x:auto;">
                <thead class="thead-warning">
                <th class="text-center"> ID</th>
        <th class="text-center"> NAME</th>
      <th class="text-center"> E-MAIL</th>
      <th class="text-center">BALANCE</th>
                </tr>
                <tr style="color : black;">
                    <td class=" text-center"><?php echo $rows['id'] ?></td>
                    <td class=" text-center"><?php echo $rows['name'] ?></td>
                    <td class=" text-center"><?php echo $rows['email'] ?></td>
                    <td class=" text-center "><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div><!--transfer money to second user(users list)  -->
        <h2 class="text-center" style="color : black;">TRANSFER MONEY HERE !</h2>
        <label style="color : black;"><strong>TRANSFER TO:</strong></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'dbcon.php';
                $sid=$_GET['id'];
                $sql = "select * from users where id!=$sid";
                $result1=mysqli_query($conn,$sql);
                if(!$result1)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result1)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color : black;"><strong>AMOUNT:</strong></label>
            <input type="number" class="form-control" name="amount" required>   
            <br>
                <div class="text-center" >
                <button class="btn btn-danger btn-lg"  name="submit" type="submit" id="myBtn" >TRANSFER</button>
            </div>
        </form>
    </div>    


    <!-- footer -->
    <div class="justify-content-center">
<?php include('footer.php') ?>
</div>
   
</body>

</html>