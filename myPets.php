<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>My Pets</title>
    <link rel="stylesheet" href="styles/ownerHeader.css" >
    <link rel="stylesheet" href="styles/datatable.css">
    <link rel="stylesheet" href="styles/myPets.css">
    <link href="styles/ownerHeader.css?<?=filemtime("styles/ownerHeader.css")?>" rel="stylesheet" type="text/css" />

  </head>

  <body>
     


    <div class="navbar">
      <a href = "ownerProfile.php"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>     

      <a href = "myPets.php">My Pets</a>
      <a href = "AppointmentRequest.php">My Appointments</a>
      <a href = "bookAppointment.php">Book Appointment</a>
      <a href="ownerServices.php" class= "active"> Services</a>
      <a href="OwnerAboutUs.php">About us</a>
      <a href="ownerHomePage.html">Home</a>

       </div> 
       <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >

       <form action="myPets.php" method="POST" " >
      <table class="content-table" id= "center">
        <br>
        <h2>My Pets:</h2>
      <thead>
      <tr>
        <th scope="col">Pet photo</th>
        <th scope="col">Pet name</th>
        <th scope="col">Pet profile</th>
        <th scope="col">Delete</th>
 
      </tr>
    </thead>
  
      
         <?php
  
  
     if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
     die( "<p>Could not connect to database</p>" );
   
     if ( !mysqli_select_db($database, "Pet_care" ) )
      die( "<p>Could not open URL database</p>" );

    $OwnerEmail = $_SESSION["OwnerEmail"];

    $query="SELECT * FROM pet WHERE owner_email =  '$OwnerEmail' " ;
   $result=mysqli_query($database, $query);
   
  
   if ($result) {
 
      while ($data = mysqli_fetch_row($result)) {
        print("
        <tr>
          <td> <img src= 'images/" .$data[1]. "' class= 'petPic' alt='Pet Picture'> </td>
          <td> ".$data[0]." </td>
          <td> <a href='petProfile.php?name=" .$data[0]. "'> Pet Profile </a> </td>
          <td> <a href='deletePet.php?name=".$data[0]."'> <img src= 'images/icons8-multiply-15.png' ></a></td>
      </tr> ");
     
      //<a href='managerPetProfile.php?owner_email=".$data[4]."&pet_name=".$data[0]."'>
      }
   }

     ?>
 
     </table>
     </form>

    <div class="addPetbut">
    <a href="addPet.php"><button type="button">Add pet</button></a>
  </div>
  </body>
</html>
