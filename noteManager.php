<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>note</title>
    <link rel="stylesheet" href="styles/writeReview.css">
  </head>

  <body>
  <div class="navbar">
  <a href="allReviews.php"> Reviews</a>
    <a href="previousAppointments.php"> Previous</a>
    <a href="upcomingAppointments.php"> Upcoming</a>
      <a href="appointmentRequests.php"> Requests</a>
    <a href="Services.php">Services</a>
    <a href="ManagerAboutUs.php">About Us</a>
 <a href="managerHomePage.html">Home</a> 
 
     </div> 
    <br>
    
 <div class = "container"> 

      <?php
    
      $note= $_GET['note'];
    
      if($note)
      print("<h2> $note</h2>");
      else
      print("<h2>There is no note!</h2>");?>
   <br><br><br><br><br><br><br><br><br><br><br><br>
     <center> <a href="appointmentRequests.php"><Button type="button">done</Button></a></center>
     
</div>
<img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>
</html>