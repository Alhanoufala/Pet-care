<!DOCTYPE html>
<html>
<head>
 <title>Pet Profile</title>
 <link rel="stylesheet" href="styles/ownerHeader.css">
 <link rel="stylesheet" href="styles/managerPetProfile.css">

</head>

<body>
    <div class="navbar">
      <a href="Pet Care.html"><img  src="images/logout-32.png " alt="logout icon"> </a>
      <a href="managerContactUs.php">Contact us</a>
      <a href="previousAppointments.php"> Previous</a>
      <a href="upcomingAppointments.php"> Upcoming</a>
        <a href="appointmentRequests.php"> Requests</a>
      <a href="Services.php">Services</a>
      <a href="ManagerAboutUs.php">About Us</a>
   <a href="managerHomePage.html">Home</a> 

  </div> 
      
           <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >
    
    
<div class="container">


  
 
<!--     
         <h2> Luna </h2>
         <p> Date of birth :4 Apr 2020 </p>
         <p> Gender :Famale </p>
         <p> Breed: Labradoodle</p>
         <p> Status: Neutered</p> 
 -->

      <?php
  
      if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
        die( "<p>Could not connect to database</p>" );
      if ( !mysqli_select_db($database, "Pet_care" ) )
        die( "<p>Could not open URL database</p>" );
        $owner_email =$_GET['owner_email'];
        $pet_name =$_GET['pet_name'];
      $query="SELECT * FROM pet Where owner_email = $owner_email AND name = $pet_name "  ;
      $result=mysqli_query($database, $query);
      
      
  if ($result) {
     while ($data = mysqli_fetch_row($result)) {
         print("
        <p> <img class='petPic' src= 'images/".$data[1]."' alt='cheakup pic'>  </p>
         <h2>  ".$data[0]."'s Owner  </h2>
         <p> Date of birth :".$data[2]." </p>
         <p> Gender :".$data[7]." </p>
         <p> Breed: ".$data[3]."</p>
         <p> Status: ".$data[4]." </p> "
        );
        }
  }
      
        ?>

    <div class="editbut">
     <center>  <a href="appointmentRequests.php"><button type="button">Done</button></a> </center>

     </div>


  
</div> 

</body>
</html>