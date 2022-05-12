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
        <a href = "ownerProfile.php"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
     
      <a href = "myPets.php">My Pets</a>
      <a href = "AppointmentRequest.php">My Appointments</a>
      <a href = "newAppointment.php">Book Appointment</a>
      <a href="ownerServices.php" class= "active"> Services</a>
      <a href="OwnerAboutUs.php">About us</a>
      <a href="ownerHomePage.html">Home</a>

         </div> 
        
                 <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >




                 
    <div class = "container">
        <h2>Book appointment</h2>
        <?php      $service= $_GET['service'];
                    $date = $_GET['date'];
                    $time = $_GET['time']; 
                    $id =  $_GET['id']; ?>

        <form method="POST" action=<?php echo "newAppointment.php?service=".$service."&date=".$date."&time=".$time."&id=".$id ?>> 
       <br>
       <p><label>Pet Name:<input name = "PetName" type="text" required></label></p>
       <br>
       <p><label>Note:  <input name= "note" type ="text" required></label>
       <br>
       <p><label>owner email : <input name= "owner_email" type ="text" required></label>
       <p><a href="bookAppointment.php"><button type="submit">Book</button></a>
    
    </form>
    <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                    die( "<p>Could not connect to database</p>" );

                 if ( !mysqli_select_db( $database, "Pet_care") )
                    die( "<p>Could not open URL database</p>" );

                    $name =  $_POST["PetName"];
                    $note =   $_POST["note"];
                    $owner_email = $_POST['owner_email'];
                    $service= $_GET['service'];
                    $date = $_GET['date'];
                    $time = $_GET['time'];
                    $id =  $_GET['id'];
                    mysqli_query($database ,"DELETE FROM available_appointments WHERE appointment_id='".$id."'");
                 $query="INSERT INTO appointments_requests (pet_name, service, date , time ,owner_email , note ) VALUES ('".$name."','".$service."','".$date."','".$time."','".$owner_email."','".$note."');";
                 $result=mysqli_query($database, $query);
                 if($result)
                 header("location:AppointmentRequest.php");
                

               
             }
        ?>
    </div>
              

    
</body>
</html>