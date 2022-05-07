<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    
    <title>Previous Appointments</title>
    <link rel="stylesheet" href="styles/AppointmentRequest.css">

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

  

  <!-- <table class="table table-striped"> -->
    <table class="content-table" id= "center">
    <thead>

    <tr>
      <th scope="col">Pet name</th>
      <th scope="col">Service </th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Review</th>

    </tr>
  </thead>
  <tbody>
    <br>
    <h2>Previous appointments: </h2>
    
    <?php
      if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM appointments_requests WHERE status='completed'";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
       print("<tr>      
       <th scope='row'><p>".$data[0]."</p>
       <td>".$data[1]."</td>
       <td>".$data[2]."</td>
       <td>".$data[3]."</td>
       <td> <a href='writeReview.php?id=".$data[7]."'> write review </a> </td>");
   }
}

  ?>



     
  
  </tbody>
</table>
<!-- <a href="newAppointment.html" class="button">New appointment</a> -->
<img src="images/logo.png" alt= "logo of pet care" class= "logo" >  
</body>
</html>