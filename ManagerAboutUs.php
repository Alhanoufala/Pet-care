
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/manageraboutusatyle.css">
    

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  

  
  <body>
    <div class="navbar">
      <a href="Pet Care.html"><img  src="images/logout-32.png" alt="logou icon"> </a>
      <a href="managerContactUs.html">Contact Us</a>

      <a href="availableAppointments.php">Available appointments</a>
        <a href="appointmentRequests.php">Appointments requests</a>
        <a href="Services.html"> Services</a>
        <a href="ManagerAboutUs.php">About us</a>
       <a href="managerHomePage.html">Home</a>

     
        </div> 
     <!--  
    <div class= "about"> <h2> About us </h2>  </div> 
    <br>
    
 <div class = "container" > 
  <br>
Welcome to our Petcare Veterinary Clinic! Where animals and their owners are valued and cherished. 
The clinic first opened its doors in Riyadh in January 2022. In Saudi Arabia, our clinic is the first of its kind. Our staff has been offering unique veterinary medical services and compassion to pets as a primary focus. 
We are here to keep your pets healthy by treating each client as if they were family and each pet as if it were our own. <br>
Our mission is to provide quality, caring, and compassionate veterinary care to pet owners in addition to detecting diseases and providing outstanding health care.<br> We specislize in the care of cats , dogs, rabbits, birds, fish, and turtles.
</div>
<br> 

<div>
Our location :
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.7256444722366!2d46.68682081516388!3d24.77059418409634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efd3fc8ec4aeb%3A0x605baa975e4243f9!2sAdvanced%20Pet%20Clinic!5e0!3m2!1sen!2ssa!4v1645211168968!5m2!1sen!2ssa" width="200" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
-->  
<?php


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM aboutus";
$result=mysqli_query($database, $query);



if ($result) {
  
   while ($data = mysqli_fetch_row($result)) {
    print("<div class= 'about'> <h2> ".$data[0]." </h2> </div> 
    <br>   
 <div class = 'container' > 
  <br>".$data[1]."
  <br> 
  Our location :
</div>

<div class = 'map'>
<iframe src='".$data[3]."' width='200' height='250' style='border:0;' allowfullscreen='' loading='lazy'></iframe></div>");


   }
}

  ?>


<div class = "edit"> <br>
<button type="button" class="edit"><a href = "editAboutUs.php">
<span class="glyphicon glyphicon-edit"></span></div>
 
<img src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>
</html>