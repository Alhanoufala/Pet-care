<?php 
          
          
              if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                 die( "<p>Could not connect to database</p>" );

              if ( !mysqli_select_db( $database, "Pet_care") )
                 die( "<p>Could not open URL database</p>" );
                 $pet_name = $_GET["pet_name"];
                 $service =  $_GET["service"];
                 $date =   $_GET["date"];
                 $time =  $_GET["time"];
                 $owner_email =  $_GET["owner_email"];
                 mysqli_query($database ,"DELETE FROM appointments_requests WHERE owner_email='".$owner_email."'");
                 $query= "INSERT INTO upcoming_requests(pet_name,service, date,time,owner_email) VALUES ('".$pet_name."','".$service."','".$date."','".$time."','".$owner_email."');";
                 $result=mysqli_query($database, $query);
                
                     header("location: upcomingAppointments.php");
         
                
      
 
           ?>