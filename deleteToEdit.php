<?php
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
die( "<p>Could not open URL database");
$id = $_GET['id']; 

mysqli_query($database ,"DELETE FROM available_appointments WHERE time='".$id."'");
$result=mysqli_close($database);


header("Location: editAppointmentManager.php");
           
                   
?>