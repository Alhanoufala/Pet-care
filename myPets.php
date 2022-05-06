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
    <tbody>
      <tr>
      
        <td> <img src="images/Luna.png"  class="petPic" alt= "Picture of pet" ></td>
        <th scope="row">Luna</th>
        <td> <a href="petProfile.html">View Profile</a></td>
        <td> <a href ><img src= "images/icons8-multiply-15.png" ></a></td>
      

      </tr>
    </tbody>
      </table>
   
         <?php
     
   
   
   /*
     if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
     die( "<p>Could not connect to database</p>" );
   
     if ( !mysqli_select_db($database, "Pet_care" ) )
      die( "<p>Could not open URL database</p>" );
   
   $query="SELECT * FROM pet";
   $result=mysqli_query($database, $query);
   
  
   if ($result) {
      while ($data = mysqli_fetch_row($result)) {
          print("<tr> <th scope='row'>".$data[1]."</th> 
          <td>".$data[0]."</td>
          <td>".$data[2]."</td>
          <td> <a href=\"deleteToEdit.php?id=".$data[2]."\"><img src= 'images/icons8-edit-20.png' ></a></td>
          <td> <a href=\"deleteAppointment.php?id=".$data[2]."\"><img src= 'images/icons8-multiply-15.png' ></a></td></tr>");
      }
   }
   
     ?>
     */
       </tbody>
     </table>

    <div class="addPetbut">
    <a href="addPet.php"><button type="button">Add pet</button></a>
  </div>
  </body>
</html>
