+<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/appointmentDetails.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment Request</title>

</head>


    <body>
     
        <div class = "container">
        <h2>Edit an appointment</h2>
        
        <form method="POST" action="appointmentDetails.php">
        <p><label>Pet name: <input name = "pet_name" type="text" required></label></p>
     
       <p><label>Service: <select name = "services">
           <option>Grooming</option>
           <option>Checkup</option>
           <option>Boarding</option>
        </select></label></p>
   
       <p><label>Date :   <input name = "date" type="date" required></label></p>
  
       <p><label>Time :   <input name= "time" type ="time" required></label>
   
       <p><label>Email :  <input name= "email" type ="text" required></label>
      
       <p><label>Note :  <input name= "note" type ="text"></label>
       <p><a href="appointmentDetails.php"><button type="submit">Edit</button></a>
    
    </form>
    </div>
    <?php 
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                 die( "<p>Could not connect to database</p>" );

              if ( !mysqli_select_db( $database, "Pet_care") )
                 die( "<p>Could not open URL database</p>" );
                $pet_name = $_POST["pet_name"];
                 $service =  $_POST["services"];
                 $date =   $_POST["date"];
                 $time =  $_POST["time"];
                 $email =  $_POST["email"];
                 $note =  $_POST["note"];// To DO : insert the note

              $query="INSERT INTO appointments_requests (pet_name,service, date, time,owner_email) VALUES ('".$pet_name."',"."'".$service."',"."'".$date."','".$time."','".$email."');";
              $result=mysqli_query($database, $query);
                if($result)
                       header("location: AppointmentRequest.php");
           
                   else
                       echo "An error occured while completing your request.";
            }
   
             ?>
                 
                  <!--<img  src= "images/dog-layan (1).png"  class = "dog" alt="dog"> -->
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
      
          
  
    
</body>
</html>