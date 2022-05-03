<!DOCTYPE html>

<head>
    <meta charset = "utf-8">
    <title>View Requests</title>
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
      <h2>Appointment Requests:</h2>
      <thead>
        <tr>
          <th>Pet name</th>
          <th>Service</th>
          <th>Date</th>
          <th>Time</th>
          <th>Requests</th>
          <th>Contact Owner</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  
       <th scope="row"><p> <a href="managerPetProfile.html">Luna</a> </p>
            <td>checkup</td>
            <td>2 Feb 2022</td>
            <td>03:00 pm</td>
            <th> <input type="submit" name="accept" value="Accept" style ="background-color:rgb(88, 194, 88);"> <input type="submit" name="decline" value="Decline" style ="background-color:rgb(255, 8, 8);">  </th>
            <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Luna's Owner  </a> </th> 

        </tr>
        <tr class="active-row">
          
           <th scope="row"><p> <a href="managerPetProfile.html">Leo</a> </p>

            <td>checkup</td>
            <td>2 Feb 2022</td>
            <td>04:00 pm</td>
            <th> <input type="submit" name="accept" value="Accept" style ="background-color:rgb(88, 194, 88);"> <input type="submit" name="decline" value="Decline" style ="background-color:rgb(255, 8, 8);">  </th>
            <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Leo's Owner  </a> </th> 

          </tr>
        <tr>
         
          <th scope="row"><p> <a href="managerPetProfile.html">Loki</a> </p>
            <td>checkup</td>
            <td>2 Feb 2022</td>
            <td>05:00 pm</td>
            <th> <input type="submit" name="accept" value="Accept" style ="background-color:rgb(88, 194, 88);"> <input type="submit" name="decline" value="Decline" style ="background-color:rgb(255, 8, 8);">  </th>
            <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Loki's Owner  </a> </th> 

        </tr>
        <tr>
               
            <th scope="row"><p> <a href="managerPetProfile.html">Bella</a> </p>

            <td>checkup</td>
            <td>2 Feb 2022</td>
            <td>06:00 pm</td>
            <th> <input type="submit" name="accept" value="Accept" style ="background-color:rgb(88, 194, 88);"> <input type="submit" name="decline" value="Decline" style ="background-color:rgb(255, 8, 8);">  </th>
            <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Bella's Owner  </a> </th> 

          </tr>
          <tr>
                  
            <th scope="row"><p> <a href="managerPetProfile.html">Charlie</a> </p>
              <td>grooming</td>
            <td>3 Feb 2022</td>
            <td>12:00 am</td>
            <th> <input type="submit" name="accept" value="Accept" style ="background-color:rgb(88, 194, 88);"> <input type="submit" name="decline" value="Decline" style ="background-color:rgb(255, 8, 8);">  </th>
            <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Charlie's Owner  </a> </th> 

          </tr>
          <tr>
            
            <th scope="row"><p> <a href="managerPetProfile.html">Lucy</a> </p>

            <td>checkup</td>
            <td>3 Feb 2022</td>
            <td>01:00 pm</td>
            <th> <input type="submit" name="accept" value="Accept" style ="background-color:rgb(88, 194, 88);"> <input type="submit" name="decline" value="Decline" style ="background-color:rgb(255, 8, 8);">  </th>
            <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Lucy's Owner  </a> </th> 

          </tr>
          <tr>
            
            <th scope="row"><p> <a href="managerPetProfile.html">Molly</a> </p>
            <td>boarding</td>
            <td>3 Feb 2022</td>
            <td>02:00 pm</td>
            <th> <input type="submit" name="accept" value="Accept" style ="background-color:rgb(88, 194, 88);"> <input type="submit" name="decline" value="Decline" style ="background-color:rgb(255, 8, 8);">  </th>
            <th>  <a href="mailto:owner.pet@swe381.ksu"> Contact Molly's Owner  </a> </th> 

          </tr>
          <?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM appointments_requests WHERE status IS NULL";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
  
       print("<tr>      
       <th scope='row'><p> <a href='managerPetProfile.html'>".$data[0]."</a></p>
       <td>".$data[1]."</td>
       <td>".$data[2]."</td>
       <td>".$data[3]."</td>
       <th><a href=\"addToUpcomingAppointments.php?id=".$data[4]."\"><input type='button' name='accept' value='Accept' style ='background-color:rgb(88, 194, 88);'></a>
       <a href=\"declineAppointments.php?id=".$data[4]."\"> <input type='button' name='decline' value='Decline' style ='background-color:rgb(255, 8, 8);'></a> </th>
       <th>  <a href="."'".$data[4]."'"."> Contact ".$data[0]. "'s Owner  </a> </th>  </tr>");
   }
}

  ?>
  
      </tbody>
    </table>
    <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
</body>
</html>