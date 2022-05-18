<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit Pet Profile</title>
 <link rel="stylesheet" href="styles/ownerHeader.css">
 <link rel="stylesheet" href="styles/petProfile.css">

</head>

<body>
     <div class="navbar">
       <a href = "ownerProfile.php"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
     <a href="ownercontactUs.php">Contact Us</a>
     <a href = "myPets.php">My Pets</a>
     <a href = "AppointmentRequest.php">My Appointments</a>
     <a href = "bookAppointment.php">Book Appointment</a>
     <a href="ownerServices.php" class= "active"> Services</a>
     <a href="OwnerAboutUs.php">About us</a>
     <a href="ownerHomePage.html">Home</a>

        </div> 
           <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >
    
    
<div class="container">

<form method="post">
              <p><label>Pet name:<input type="text" name="Pname" id="Pname"  required></label></p>
              <p><label>Birth date: <input type="date" name="PetBD" id="PetBD"  required></label></p>
               
              <div class="content">
                <div class="radio">
                 <label for="gender">Gender: </label>
                    <input type="radio" name="gender" id="gender" value="male" required>
                    <label for="male">male</label>
                    <input type="radio" name="gender" id="gender" value="female" required>
                    <label for="female">female</label>
                </div></div>

                
              <p><label>Pet breed: <input type="text" name="Pbreed" id="Pbreed"  required></label></p>
                
                <div class="content">
                  <div class="radio">
                   <label for="Status">Status: </label>
                      <input type="radio" name="Status" id="status" value="spayed" required>
                      <label for="Spayed">Spayed</label>
                      <input type="radio" name="Status" id="status" value="neutered" required>
                      <label for="Neutered">Neutered</label>
                  </div></div>

                <p>Pet photo: <input type="file" id="petPhotoFile" name="petPhotoFile" accept="image/*" required></p>

                <p>vaccinations list(optional)
                <input type="file" id="vacFile" name="vacFile" ></p>
                <p>medical history (optional)
                <input type="file" id="medFile" name="petFile" ></p>
  
                <div class="editbut">
                <a href="petProfile.html"><button type="Save">Save</button></a>

              </div>

             
          
          </form>
          
     
   
      </div>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      if (!( $database = mysqli_connect( "localhost", "root", "" )))
         die( "<p>Could not connect to database</p>" );
 
      if (!mysqli_select_db( $database, "Pet_care" ))
         die( "<p>Could not open URL database</p>" );
   
         $Pname=$_POST['Pname'];  
         $PetBD=$_POST['PetBD'];
         $gender=$_POST['gender']; 
         $Pbreed=$_POST['Pbreed']; 
         $status=$_POST['status']; 
         $petPhotoFile=$_POST['petPhotoFile']; 
         $vacFile=$_POST['vacFile']; 
         $medFile=$_POST['medFile']; 
         $ownerEmail="test";


         //edit for specific pet
         $query = "UPDATE pet SET ".
         "(name, photo, birthDate, breed, status, medicalHistory, vaccinations, gender, ownerEmail ) "."VALUES ".
         "('$Pname','$petPhotoFile','$PetBD','$Pbreed','$status','$medFile','$vacFile','$gender','$ownerEmail')";

        $result = mysqli_query($database, $query);
        if($result)
           header("location: myPets.php");
         
        else  
           echo "<script>alert('an error occurred, could not add pet.')</script>";  
     }  
 ?>
 
</div> 

</body>
</html>