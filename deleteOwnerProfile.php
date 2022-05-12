<?php
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Pet_care" ) )
die( "<p>Could not open URL database");


$query="DELETE FROM pet_owner " ;

mysqli_query($database ,$query );
mysqli_close($database);
header("Location: Pet Care.html");
?>