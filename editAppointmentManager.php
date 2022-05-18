
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Set Appointment</title>
    <link rel="stylesheet" href="styles/editApp.css">
</head>

<body>
    
    <div class="navbar">
        <a href="Pet Care.html"><img  src="images/logout-32.png " alt="logou icon"> </a>
        <a href="contactUs.php"> Contact Us </a>
      <a href="appointmentRequests.php">Appointment requests</a>
      <a href="Services.php"> Services</a>
      <a href="ManagerAboutUs.php">About us</a>
      <a href="managerHomePage.html"> Home</a>
       
          </div> 
    <div class = "container">
        <h2>Edit an appointment</h2>
        <?php $id = $_GET['id']; ?>
        <form method="POST" action=<?php echo "editAppointmentManager.php?id=".$id?>>
       <p><label>Service: <select name = "services">
           <option>Grooming</option>
           <option>Checkup</option>
           <option>Boarding</option>
        </select></label></p>
       <br>
       <p><label>Date: <input name = "date" type="date"></label></p>
       <br>
       <p><label>Time: <input name= "time" type ="time"></label>
       <p><a href="editAppointmentManager.php"><button type="submit">Edit</button></a>
    
    </form>
    </div>

    <?php 
          
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                   die( "<p>Could not connect to database</p>" );

                if ( !mysqli_select_db( $database, "Pet_care") )
                   die( "<p>Could not open URL database</p>" );

                   $service =  $_POST["services"];
                   $date =   $_POST["date"];
                   $time =  $_POST["time"];
                   $id =  $_GET['id'];
                   $query = "UPDATE available_appointments SET service ='".$service."',date= '".$date."',time ='".$time."' WHERE appointment_id='".$id."'";
                $result=mysqli_query($database, $query);
                if($result)
                       header("location: availableAppointments.php");
           
                   else
                       echo "An error occured while completing your request.";
            }
   
             ?>
      
    
    <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
   
</body>
</html>