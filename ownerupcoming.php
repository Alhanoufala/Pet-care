<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upcoming Appointments</title>
    <link rel="stylesheet" href="styles/AppointmentRequest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
</head>
<body>
  
  <div class="navbar">
    <a href = "ownerProfile.php"><img src = "images/Profile.png"  class= "profile"  alt= "Profile image" ></a> 
    <a href="ownercontactUs.php">Contact us</a>
    <a href="ownerPreviousAppointment.php"> Previous </a>
    <a href="ownerupcoming.php"> Upcoming </a>
    <a href="AppointmentRequest.php"> Requests</a>
 <a href="ownerServices.php">Services</a> 
 <a href="ownerAboutUs.php">About Us</a> 
 <a href="ownerHomePage.html">Home</a> 
 
 <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >
 
     </div> 

       <table class="content-table" id= "center">
        <thead>
          
        <tr>
          <th scope="col">Pet name</th>
          <th scope="col">Service </th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
         
          
    
           
        </tr>
      </thead>
      <tbody>
        <br>
        <h2>Upcoming Appointment: </h2>
        
        <?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM appointments_requests WHERE status='accepted'";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
       print("<tr>      
       <th scope='row'><p>".$data[0]."</p>
       <td>".$data[1]."</td>
       <td>".$data[2]."</td>
       <td>".$data[3]."</td>
      ");
   }
}
else
echo "An error occured while completing your request.";

  ?>
         
      
      </tbody>
    </table>
   </body>
    </html>