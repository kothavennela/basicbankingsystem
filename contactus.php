<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">
<style>
  
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid black;
  box-sizing: 20%;
}

/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color:green;
}

/* Center the image and position the close button */
.boxcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}



.container {
  padding: 16px;
  
}
.boxcontainer
{
  border: 1px  solid green;
}


span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: dodgerblue; /* Fallback color */
   /* Black w/ opacity */
  padding-top: 60px;
 
}

/* Modal Content/Box */
.modal-content {
 
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
 
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php
include 'navbarr.php';
?>
<p id="01"></p>
<div class="container" style="overflow-x:auto;">
        <div class="col-md-16 text-center">


  

<h2> send us a message</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;background-color:green;">send us a message</button>
</div>
<div id="id01" class="modal-lg model-content">
 
  <form class="modal-content animate"  method="post" action="aftersubmit.php"name="form" >
    
      <span onclick="document.getElementById('id01').style.display='none'"style="width:auto;" class="close" title="Close Modal">&times;</span>

   


<div class="container">
   
   <div class="form-group">
   <label for="uname">Enter username</label>
   <input type="text" id="uname"  class="form-control"  name="uname" placeholder="enter username" required>
 </div>
 <div class="form-group">
   <label for="email">Email address</label>
   <input type="email" class="form-control" id="email"  name="email"placeholder="name@example.com" required>
 </div>
 <div class="form-group">
   <label for="msg">Enter your message</label>
   <input type="text" class="form-control" id="msg" name="msg" placeholder="enter your message" required>
 </div>

<button type="submit" onclick="showalert()" name="submit">SUBMIT</button>
<script>
 
 
  function showalert() {
  alert("your message has sent..!");
}
</script>

    
  
 
    
    </div>

    <div class="col-md-16 text-center" >
  
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</div>
</div>
<br>
<br>

<div class="justify-content-center">
<?php include('footer.php') ?>
</div>

</body>
</html>
