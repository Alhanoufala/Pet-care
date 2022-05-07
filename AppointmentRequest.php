<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Appointment Requests</title>
    <link rel="stylesheet" href="styles/AppointmentRequest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
</head>
<body>
 
  <div class="navbar">
    <a href = "ownerProfile.php"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a> 
    <a href="ownercontactUs.html">Contact us</a>
    <a href="ownerPreviousAppointment.php"> Previous </a>
    <a href="ownerupcoming.php"> Upcoming </a>
    <a href="AppointmentRequest.php"> Requests</a>
 <a href="ownerServices.html">Services</a> 
 <a href="ownerAboutUs.html">About Us</a> 
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
        <th scope="col">Note</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
        <th scope="col">Cancel</th>

  
         
      </tr>
    </thead>
    <tbody>
      <br>
    <h2>Appointment Request: </h2>
    
      
      <?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM appointments_requests WHERE status IS NULL OR status = 'declined' ";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
  //name
  //service
  //date
  //time
  //owner_email ($data[4])
  //status ($data[5])
  //note
  //edit
  //cancel
  if($data[5] == 'declined'){
       print("<tr>      
       <th scope='row'>".$data[0]."</th> 
       <td>".$data[1]."</td>
       <td>".$data[2]."</td>
       <td>".$data[3]."</td>
         <td> --- </td>
         <td>Declined</td>
         <td> --- </td>
         <td> --- </td>");}
         else {
          print("<tr>      
          <th scope='row'>".$data[0]."</th> 
          <td>".$data[1]."</td>
          <td>".$data[2]."</td>
          <td>".$data[3]."</td>
          <td> --- </td>
          <td>Waiting</td>
          <td> <a href=\"deleteToEditOwner.php?id=".$data[4]."\"><img src= 'images/icons8-edit-20.png' ></a></td>
          <td> <a href=\"cancelAppointmentsOwner.php?id=".$data[4]."\"><img src= 'images/icons8-multiply-15.png' ></a></td></tr>");
         }
   }
}

  ?>
  
    
    </tbody>
  </table>
  <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">

   </body>
    </html>