<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  

   <style>
     .center{

margin-left:10%;
     }
   .carousel .item {
  height: 300px;
}
#myslide
{
  background-color:black;
  height:20%;
}
.item img {
    position: absolute;
    top:0;
    left: 0;
    min-height: 300px;
}
  </style>
</head>
<body>
<?php
include 'navbarr.php';
?>
 
    
    <div id="myslide" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myslide" data-slide-to="0" class="active"></li>
    <li data-target="#myslide" data-slide-to="1"></li>
    <li data-target="#myslide" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
  <div class="carousel-item active">
    <div class="d-flex justify-content-center">
      <img width="50%" src="img/moneybank.jpg" alt="moneyplant">
    </div>
    </div>
    <div class="carousel-item  ">
    <div class="d-flex justify-content-center">
      <img  width="50%" src="img/banks.jpg" height="10%"alt="banks">
    </div>
     </div>
    

    <div class="carousel-item ">
    <div class="d-flex justify-content-center">
      <img   width="50%" src="img/moneytransfer.jpg" alt="First slide">
</div>

</div>
</div>

  <a class="carousel-control-prev" href="#myslide" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myslide" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
           <br>
<a id="aboutus">
  <div class="center">
<img src="img/bank-logo.jpg" alt="bank" class="float-left" width="40%" height="20%" >
<br>
<h4>sparks bank do a secure transaction in which a sender gives money to a receiver.
   here transaction done between multiple users.trust our bank .many people use our bank for transactions.
</h4>
</h4>
</a>

</div>
<br>
<br>
<br>
<br>
<br>

<?php include('footer.php') ?>
</div>
      </body>
</html>