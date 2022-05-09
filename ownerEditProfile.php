<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles/ownerHeader.css">
    <link rel="stylesheet" href="styles/ownerProfile.css"> 
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
        <form method="post">
          <div class="profilePic">
            <img src = "images/profileEdit.png"  class= "profile"  alt= "Profile image" height="200" width="200">
            <input type="file" id="profilePhotoFile" name="profilePhotoFile" accept="image/*">
          </div>
          

          <div class="phone details">
           
            <p>First name:
            <input type="text" id="Fname" > </p>
            <p>Last name:
            <input type="text"  id="Lname" > </p>
            <p>Email:
            <input type="text"  id="email" ></p>
            <p>Phone number:
            <input type="text"  id="phone#" ></p>
            <p>Password:
            <input type="text"  id="pass" ></p>
  
          </div>
          
          
          <br>
          <br>
         <div class="editbutton">
          <a href="#"><button type="submit">Save changes</button></a>
        </div> 

      </div>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      if (!( $database = mysqli_connect( "localhost", "root", "" )))
         die( "<p>Could not connect to database</p>" );
 
      if (!mysqli_select_db( $database, "Pet_care" ))
         die( "<p>Could not open URL database</p>" );
   
         $Fname=$_POST['Fname'];  
         $Lname=$_POST['Lname'];
         $email=$_POST['email']; 
         $phonenumber=$_POST['phonenumber']; 
         $pass=$_POST['pass']; 
         $profilePhotoFile=$_POST['profilePhotoFile']; 

         $OwnerEmail = $_SESSION["OwnerEmail"];
         
         $query = "UPDATE pet_owner WHERE email =  '$OwnerEmail'  SET ".
         "(email, password, Fname, Lname, phone#, photo ) "."VALUES ".
         "('$email','$pass','$Fname','$Lname','$phonenumber','$profilePhotoFile')";

        $result = mysqli_query($database, $query);
        if($result)
           header("location: ownerProfilePage.html");
         
        else  
           echo "<script>alert('an error occurred, could not edit profile.')</script>";  
     }  
 ?>

  </body>
</html>