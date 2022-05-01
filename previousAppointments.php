<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Previous Appointments</title>
    <link rel="stylesheet" href="styles/datatable.css">
   </head>

<body>

  <div class="navbar">
    <a href="Pet Care.html"><img  src="images/logout-32.png " alt="logout icon"> </a>
    <a href="managerContactUs.html">Contact us</a>
    <a href="allReviews.html"> Reviews</a>
    <a href="previousAppointments.php"> Previous</a>
    <a href="upcomingAppointments.php"> Upcoming</a>
      <a href="appointmentRequests.php"> Requests</a>
    <a href="Services.html">Services</a>
    <a href="ManagerAboutUs.html">About Us</a>
 <a href="managerHomePage.html">Home</a>

</div>

    

    <table class="content-table" id= "center">
      <br>
      <h2>   Previous Appointments:</h2>
      <thead>
      <tr>
        <th scope="col">Pet name</th>
        <th scope="col">Service</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col"> Reviews</th>
       


      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">Luna</th>
        <td>boarding</td>
        <td>3 Feb 2022</td>
        <td>12:00 am</td>
        <td> <a href="viewReview.html"> view </a> </td>

      </tr>
      <tr>
        <th scope="row">Lucy</th>
        <td>checkup</td>
        <td>3 Feb 2022</td>
        <td>01:00 pm</td>
        <td> <a href="viewReview.html"> view </a> </td>

      </tr>
      <?php
      if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM previous_requests";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
       print("<tr>      
       <th scope='row'><p>".$data[0]."</p>
       <td>".$data[1]."</td>
       <td>".$data[2]."</td>
       <td>".$data[3]."</td>
       <td> <a href='viewReview.html'> view </a> </td>");
   }
}

  ?>



    </tbody>
    <img src="images/logo.png" alt= "logo of pet care" class= "logo" >
  </table>
  <html>
