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
            <input type="text" name="Fname" > </p>
            <p>Last name:
            <input type="text"  name="Lname" > </p>
            <p>Phone number:
            <input type="text"  name="phonenumber" ></p>
            <p>Password:
            <input type="text"  name="pass" ></p>
  
          </div>
          
          
          <br>
          <br>
         <div class="editbutton">
          <a href="ownerEditProfile.php"><button type="submit">Save changes</button></a>
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
         $phonenumber=$_POST['phonenumber']; 
         $pass=$_POST['pass']; 
         $profilePhotoFile=$_POST['profilePhotoFile']; 

         $OwnerEmail = $_SESSION["OwnerEmail"];
         
         //SET label ='".$label."',description = '".$description.

         $query = "UPDATE pet_owner SET password = '".$pass."',Fname = '".$Fname."', Lname = '".$Lname."',phone_no = '".$phonenumber."', photo = '".$profilePhotoFile."' WHERE email =  '$OwnerEmail'"; 
       
        $result = mysqli_query($database, $query);
        if($result)
           header("location: ownerProfile.php");
         
        else  
           echo "<script>alert('an error occurred, could not edit profile.')</script>";  
     }  
 ?>

  </body>
</html>