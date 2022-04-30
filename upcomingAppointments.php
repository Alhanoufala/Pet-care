<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Upcoming Appointments </title>
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
    <h2>Upcoming Appointments:</h2>
    <thead>

      <tr>
        <th scope="col">Pet name</th>
        <th scope="col">Service</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col"> Contact Owner</th>

         
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><p> Luna </p>
        </th>
        <td>grooming</td>
        <td>2 Feb 2022</td>
        <td>01:00 pm</td>
        <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Luna's Owner  </a> </th> 

         
      </tr>
      <tr>
        
        <th scope="row"><p> Milo</p>
        <td>boarding</td>
        <td>2 Feb 2022</td>
        <td>02:00 pm</td>
        <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Milo's Owner  </a> </th> 

         
      </tr>
      <tr>
       
        <th scope="row"><p> Oliver</p>
        <td>checkup</td>
        <td>2 Feb 2022</td>
        <td>03:00 pm</td>
        <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Oliver's Owner  </a> </th> 

      
      <tr>
       
        <th scope="row"><p> Parrot </p>
        <td>boarding</td>
        <td>3 Feb 2022</td>
        <td>06:00 pm</td>
        <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Parrot's Owner  </a> </th> 

      </tr>
      <?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM upcoming_requests";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
       print("<tr>      
       <th scope='row'><p>".$data[0]."</p>
       <td>".$data[1]."</td>
       <td>".$data[2]."</td>
       <td>".$data[3]."</td>
       <th>  <a href="."'".$data[4]."'"."> Contact ".$data[0]. "'s Owner  </a> </th>  </tr>");
   }
}

  ?>
  
    
    </tbody>
  </table>
</body>
  <img src="images/logo.png" class="logo" alt= "logo of pet care"  >
  <html>

  