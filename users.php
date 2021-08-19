<!DOCTYPE html>
<html>
<head>
<title>view users</title>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
  
</head>
<body>
<?php
include 'navbarr.php';
?>


<?php
include 'dbcon.php';
$sql = "SELECT * FROM users";

 $result1 = mysqli_query($conn,$sql);
?>
<h1>
  USER DETAILS</h1>
<div class="container" style="overflow-x:auto;">
  <table class="table table-bordered table-info table-hover">
  <thead class="thead-danger">
    <tr>
     <th class="text-center"> ID</th>
      <th class="text-center"> NAME</th>
      <th class="text-center"> E-MAIL</th>
      <th class="text-center">BALANCE</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if (mysqli_num_rows($result1) > 0) {
     while($row = mysqli_fetch_assoc($result1)){
    ?>
    <tr>
     <td class="text-center"> <?php echo $row['id'] ?> </td>
     <td class="text-center"> <?php echo $row['name'] ?> </td>
     <td class="text-center"> <?php echo $row['email'] ?> </td>
     <td class="text-center"> <?php echo $row['balance'] ?> </td>
    </tr>
    <?php
    }
	}
    ?>
    </tbody>
    
  </table>
</div>
<div class="justify-content-center">
<?php include('footer.php') ?>
</div>
</body>
</html>
