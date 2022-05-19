<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>note</title>
    <link rel="stylesheet" href="styles/writeReview.css">
  </head>

  <body>
  <div class="navbar">
    <a href = "ownerProfile.php"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a> 
    <a href="ownerPreviousAppointment.php"> Previous </a>
    <a href="ownerupcoming.php"> Upcoming </a>
    <a href="AppointmentRequest.php"> Requests</a>
 <a href="ownerServices.php">Services</a> 
 <a href="ownerAboutUs.php">About Us</a> 
 <a href="ownerHomePage.html">Home</a> 
 
     </div> 
    <br>
    
 <div class = "container"> 

      <?php
    
      $note= $_GET['note'];
    
      print("<h3> $note</h3?");?>
   <br><br><br><br><br><br><br><br><br><br><br><br>
     <center> <a href="AppointmentRequest.php"><Button type="button">done</Button></a></center>
     
</div>
<img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>
</html>