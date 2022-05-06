<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>add a Pet</title>
    <link rel="stylesheet" href="styles/ownerHeader.css">
    <link rel="stylesheet" href="styles/addPet.css">
  </head>

  <body>

    <div class="navbar">
      <a href = "ownerProfile.html"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
      <a href="contactUs.html">Contact Us</a>
   <a href = "myPets.php">My Pets</a>
   <a href = "AppointmentRequest.php">My Appointments</a>
   <a href="ownerServices.html" class= "active"> Services</a>
   <a href="ownerAboutUs.html">About us</a>
   <a href = "ownerHomePage.html">Home</a>
   
       </div> 
       
       <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >


      <div class="container">
          <h2>Add Pet</h2>
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

                <p>vaccinations list(optional)</p>
                <input type="file" id="vacFile" name="vacFile" >
                <p>medical history (optional)</p>
                <input type="file" id="medFile" name="petFile" >
  
             <div class="submitbut">
              
              <a href = "addPet.php"><input type = "submit" value="Add"></a>
              
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


         $query = "INSERT INTO pet".
         "(name, photo, birthDate, breed, status, medicalHistory, vaccinations, gender, ownerEmail ) "."VALUES ".
         "('$Pname','$petPhotoFile','$PetBD','$Pbreed','$status','$medFile','$vacFile','$gender','$ownerEmail')";

        $result = mysqli_query($database, $query);
        if($result)
           header("location: myPets.php");
         
        else  
           echo "<script>alert('an error occurred, could not add pet.')</script>";  
     }  
 ?>

  </body>
</html>