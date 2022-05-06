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
      <a href = "ownerProfile.html"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
    <a href="ownercontactUs.html">Contact Us</a>
    <a href = "myPets.html">My Pets</a>
    <a href = "AppointmentRequest.php">My Appointments</a>
    <a href = "newAppointment.html">Book Appointment</a>
    <a href="ownerServices.html" class= "active"> Services</a>
    <a href="OwnerAboutUs.html">About us</a>
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
            <i class="fas fa-phone-alt"></i>
            
            <input type="text" id="Fname" value="Sarah"> <br>
            <input type="text"  id="Lname" value="AlShathri"> <br>
            <input type="text"  id="email" value="S.I.AlShathri@gmail.com"> <br>
            <input type="text"  id="phone#" value="+966 58 265 3424">
            <input type="text"  id="pass" value="*****">
  
          </div>
          
          
          <br>
          <br>
         <div class="editbutton">
          <a href="ownerEditProfile"><button type="button">Save changes</button></a>
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


         $query = "UPDATE owner_ SET ".
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