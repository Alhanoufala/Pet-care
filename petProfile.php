<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Pet Profile</title>
 <link rel="stylesheet" href="styles/ownerHeader.css">
 <link rel="stylesheet" href="styles/petProfile.css">

</head>

<body>
     <div class="navbar">
       <a href = "ownerProfile.php"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
     <a href="ownercontactUs.html">Contact Us</a>
     <a href = "myPets.php">My Pets</a>
     <a href = "AppointmentRequest.php">My Appointments</a>
     <a href = "newAppointment.html">Book Appointment</a>
     <a href="ownerServices.html" class= "active"> Services</a>
     <a href="OwnerAboutUs.html">About us</a>
     <a href="ownerHomePage.html">Home</a>

        </div> 
           <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >
    
    
<div class="container">


  
    <img src="images/Luna.png"  class="petPic" alt= "Picture of Luna" >
 
    
         <h2> Luna </h2>
         <p> Date of birth :4 Apr 2020 </p>
         <p> Gender :Famale </p>
         <p> Breed: Labradoodle</p>
         <p> Status: Neutered</p> 

         <?php
  


         if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
         die( "<p>Could not connect to database</p>" );
       
          if ( !mysqli_select_db($database, "Pet_care" ) )
           die( "<p>Could not open URL database</p>" );
       
         $query="SELECT * FROM pet WHERE email='s.i.alshathri@gmail.com'";
         $result=mysqli_query($database, $query);
         $row = mysqli_fetch_array($result);
         echo "<p>".$row[2]."</p>";
         echo "<p>".$row[3]."</p>";
         echo "<p>".$row[4]."</p>";
         echo "<p>".$row[0]."</p>";
         echo "<p>".$row[5]."</p>";
         
         ?>
    
    
    
      <div class="editbut">
      <a href="editPetProfile.html"><button type="button">Edit</button></a>
      


     </div>
     <p>  <a href="mailto:owner.pet@swe381.ksu"> contact Luna's Owner  </a> </p> 

  
</div> 

</body>
</html>