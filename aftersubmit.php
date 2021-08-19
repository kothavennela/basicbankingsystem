<html>
<body>
<link rel="stylesheet" href="style.css">
  <style>
.showDiv {
  background-color:white ;

  text-align: center;
  margin:auto;
  width: auto;
  border: 1px solid light;
  padding: 10px;
  height:auto;
}
</style>
<?php
  include 'navbarr.php';
?>

<div  class="showDiv"  >

<h1> succesfully message sent...!</h1>
<h5> your name:<?php echo $_POST["uname"]; ?>
</h5>
<h5>your email: <?php echo $_POST["email"]; ?>
</h5>
<h5>your message:<?php echo  $_POST["msg"]; ?>
</h5>

</div>
<br>

<div class="justify-content-center">
<?php include('footer.php') ?>
</div>
<?php
header("refresh:10; index.php");
exit;
?>

</body>
</html>