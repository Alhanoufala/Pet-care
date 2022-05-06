
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>View Available Appointments</title>
    
    <link rel="stylesheet" href="styles/datatable.css">
     <style>

     </style>
</head>

<body>
 
  <div class="navbar">
    <a href="Pet Care.html"><img  src="images/logout-32.png " alt="logou icon"> </a>
    <a href="managerContactUs.html">Contact Us</a>
    <a href="setAppointment.php">Set a new available Appointments</a>
    <a href="availableAppointments.php">Available appointments</a>
      <a href="Services.html"> Services</a>
      <a href="ManagerAboutUs.php">About us</a>
  <a href="managerHomePage.html">Home</a>

      </div> 
     
   <table class="content-table" id= "center">
     <br>
     <h2>Available Appointments:</h2>
  <thead>

      <tr>
        <th scope="col">Service</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
         
      </tr>
    </thead>
    <tbody>
        
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
       <td> <a href=\"deleteToEdit.php?id=".$data[2]."\"><img src= 'images/icons8-edit-20.png' ></a></td>
       <td> <a href=\"deleteAppointment.php?id=".$data[2]."\"><img src= 'images/icons8-multiply-15.png' ></a></td></tr>");
   }
}

  ?>
  
    </tbody>
  </table>
  <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
</body>
</html>