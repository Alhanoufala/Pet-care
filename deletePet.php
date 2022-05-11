<?php
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
die( "<p>Could not open URL database");
$name = $_GET['name']; 

mysqli_query($database ,"DELETE FROM pet WHERE name='".$name."'");
mysqli_close($database);
header("Location: myPets.php");
?>