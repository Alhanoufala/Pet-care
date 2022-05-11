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
     <a href="ownercontactUs.php">Contact Us</a>
     <a href = "myPets.php">My Pets</a>
     <a href = "AppointmentRequest.php">My Appointments</a>
     <a href = "newAppointment.php">Book Appointment</a>
     <a href="ownerServices.php" class= "active"> Services</a>
     <a href="OwnerAboutUs.php">About us</a>
     <a href="ownerHomePage.html">Home</a>

        </div> 
           <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >
    
    
<div class="container">
  
         <?php
  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
          if (!( $database = mysqli_connect( "localhost", "root", "" )))
          die( "<p>Could not connect to database</p>" );}


         if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
         die( "<p>Could not connect to database</p>" );
       
          if ( !mysqli_select_db($database, "Pet_care" ) )
           die( "<p>Could not open URL database</p>" );
   
           $OwnerEmail = $_SESSION["OwnerEmail"]; 
           $name= $_GET['name'];
         
         $query="SELECT * FROM pet WHERE owner_email='$OwnerEmail' AND name = '$name' ";
         $result=mysqli_query($database, $query);
         $row = mysqli_fetch_array($result);
         echo "<p> <img src= 'images/" .$row[1]. "' class= 'petPic' alt='Pet Picture'>  </p>";
         echo "<p> ".$row[0]."</p>";
         echo "<p> Date of birth : ".$row[2]."</p>";
         echo "<p> Gender : ".$row[7]."</p>";
         echo "<p> Breed: ".$row[3]."</p>";
         echo "<p> Status: ".$row[4]."</p>";
         
         ?>
    
    
    
      <div class="editbut">
      <a href="editPetProfile.php"><button type="button">Edit</button></a>
      


     </div>

  
</div> 

</body>
</html>