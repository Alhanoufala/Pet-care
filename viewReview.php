<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>View Review</title>
    <link rel="stylesheet" href="styles/viewReview.css">


  </head>

  <body>
    <div class="navbar">
      <a href="Pet Care.html"><img  src="images/logout-32.png " alt="logou icon"> </a>
      <a href="managerContactUs.html">Contact Us</a>

      <a href="availableAppointments.php">Available appointments</a>
        <a href="appointmentRequests.php">Appointments requests</a>
        <a href="Services.html"> Services</a>
        <a href="ManagerAboutUs.php">About us</a>
    <a href="managerHomePage.html">Home</a>
        </div> 
        </div> 
    <br>
    // petnam
 <div class = "container" > 
    <img src="images/lulu.png"  class="petPic" alt= "Picture of Luna" >
    <p id ="p">Luna's Owner</p>
    <div class="subcontainer">
         
      <?php
  
  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM Reviews"; // specify by id 
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
       print(" <p> ".$data[0]." </p> <p> ".$data[1]."'s Owner </p> <p> <center> ".$data[2]."</center></p>");
      }
}
// <img src="data:image;base64,'.base64_encode($data['image'//]).'>   
?>

     <center>
   Luna had a good time while i was away! she's in good shape, more energetic. 
   would definitely come to you for boarding again. 
   thank you! 
  </center>  
     </div>
     <div class="editbut">
      <a href="previousAppointments.php"><button type="Save">Back</button></a>

     </div>
</div>

    
    <br>
    <br>
    <br>

   
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br> <br></div>
</p>
<img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>
</html>