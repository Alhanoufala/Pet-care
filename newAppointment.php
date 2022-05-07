<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK New Appointment</title>
    <link rel="stylesheet" href="styles/newApp.css">

</head>
<body>
  <!--<h1 id="Book">Book Now</h1>-->
           
            <!--<img  src= "images/dog-layan (1).png"  class = "dog" alt="dog"> -->
         
      <div class="navbar">
        <a href = "ownerProfile.html"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
      <a href="ownercontactUs.html">Contact Us</a>
      <a href = "myPets.php">My Pets</a>
      <a href = "AppointmentRequest.php">My Appointments</a>
      <a href = "newAppointment.html">Book Appointment</a>
      <a href="ownerServices.html" class= "active"> Services</a>
      <a href="OwnerAboutUs.html">About us</a>
      <a href="ownerHomePage.html">Home</a>

         </div> 
        
                 <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >




                 
    <div class = "container">
        <h2>Book appointment</h2>
        <form method="POST" action="newAppointment.php">
       <br>
       <p><label>Pet Name: <input name = "PetName" type="text" required></label></p>
       <br>
       <p><label>Note: <input name= "note" type ="text" required></label>
       <p><a href="bookAppointment.php"><button type="submit">Add</button></a>
    
    </form>
    <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                    die( "<p>Could not connect to database</p>" );

                 if ( !mysqli_select_db( $database, "Pet_care") )
                    die( "<p>Could not open URL database</p>" );

                    $name =  $_POST["PetName"];
                    $note =   $_POST["note"];
                    $id= $_GET['id'];
                  

                 $query="INSERT INTO appointments_requests (pet_name, service, date , time ,owner_email , status , note ) VALUES ('".$name."','".$service."','".$date."','".$time."','".$owner_email."','".$status."','".$note."');";
                 $result=mysqli_query($database, $query);
               
             }
        ?>
    </div>
              

    
</body>
</html>