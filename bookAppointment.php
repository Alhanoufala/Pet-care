<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>BOOK New Appointment</title>
    <link rel="stylesheet" href="styles/datatable.css">
   
</head>

<body>
<div class="navbar">
        <a href = "ownerProfile.html"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
      <a href="ownercontactUs.html">Contact Us</a>
      <a href = "myPets.html">My Pets</a>
      <a href = "AppointmentRequest.html">My Appointments</a>
      <a href = "newAppointment.html">Book Appointment</a>
      <a href="ownerServices.html" class= "active"> Services</a>
      <a href="OwnerAboutUs.html">About us</a>
      <a href="ownerHomePage.html">Home</a>

         </div> 
        
      <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >
      <table class="content-table" id= "center">
     <br>
     <h2>Book Appointments:</h2>
  <thead>

      <tr>
        <th scope="col">Service</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Edit</th>
       
         
      </tr>

      <?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

  if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM available_appointments";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
       print("<tr> <th scope='row'>".$data[0]."</th>
       <td>".$data[1]."</td>
       <td>".$data[2]."</td>
       <td> <a href=\"deleteToEdit.php?id=".$data[2]."\"><h3>Book Appointment<h3></a></td>");
   
   }
}

  ?>
  
    </tbody>
  </table>
    </thead>
    <tbody>
    


</body>
</html>