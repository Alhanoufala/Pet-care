<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="styles/ownerHeader.css">
    <link rel="stylesheet" href="styles/ownerProfile.css"> 
  </head>

  <body>
    <div class="navbar">
      <a href = "ownerProfile.php"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
    
    <a href = "myPets.php">My Pets</a>
    <a href = "AppointmentRequest.php">My Appointments</a>
    <a href = "newAppointment.php">Book Appointment</a>
    <a href="ownerServices.php" class= "active"> Services</a>
    <a href="OwnerAboutUs.php">About us</a>
    <a href="ownerHomePage.html">Home</a>

       </div> 
       <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >



      <div class="container">
        <form method="post">
          <div class="profilePic">
            <!--<img src = "images/profileEdit.png"  class= "profile"  alt= "Profile image" height="200" width="200">-->
            <!--<input type="file" id="profilePhotoFile" name="profilePhotoFile" accept="image/*">-->
          </div>
        
  
  

      
  <?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

   if ( !mysqli_select_db($database, "Pet_care" ) )
    die( "<p>Could not open URL database</p>" );

    $OwnerEmail = $_SESSION["OwnerEmail"];

  $query="SELECT * FROM pet_owner WHERE email= '$OwnerEmail' ";
  $result=mysqli_query($database, $query);
  $row = mysqli_fetch_array($result);
  echo "<p>".$row[2]."</p>";
  echo "<p>".$row[3]."</p>";
  echo "<p>".$row[4]."</p>";
  echo "<p>".$row[0]."</p>";
  echo "<p>".$row[5]."</p>";

  if(is_null($row[6])) {
    echo "<div class='profilePic'> <img src = 'images/profileEdit.png' class= 'profile' alt='Profile Picture'> </div>";
  }
  else {
    echo "<div class='profilePic'> <img src= 'images/" .$row[6]. "' class= 'profile' alt='Profile Picture'> </div>";
  }
  //cheack if not null, edit size
  //echo "<div class='profilePic'> <img src= 'images/" .$row[6]. "' class= 'profile' alt='Pet Picture'> </div>";

  
  ?>
          <br>
          <br>
         <div class="editbutton">
          <a href="ownerEditProfile.php"><button type="button">Edit profile</button></a>
          <a href = "deleteOwnerProfile.php"><button type="button">Delete profile</button></a>
          <a href = "Pet Care.html"><button type="button">Log out</button></a>
        </div> 
</div>
  </body>
</html>