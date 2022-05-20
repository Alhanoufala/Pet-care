<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles/ownerHeader.css">
    <link rel="stylesheet" href="styles/ownerEditProfile.css">
    <link href="styles/ownerEditProfile.css?<?=filemtime("styles/ownerEditProfile.css")?>" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   
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

       <?php
      if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
      die( "<p>Could not connect to database</p>" );
    
       if ( !mysqli_select_db($database, "Pet_care" ) )
        die( "<p>Could not open URL database</p>" );

        $OwnerEmail = $_SESSION["OwnerEmail"]; 
      
      $query="SELECT * FROM pet_owner WHERE email='$OwnerEmail' ";
      $result=mysqli_query($database, $query);
      $row = mysqli_fetch_array($result);

      print( "<div class='container'>
        <form method='post'>
          <div class='profilePic'>
            <img src = 'images/profileEdit.png'  class= 'profilePic'  alt= 'Profile image' height='200' width='200'>
            <input type='file' id='profilePhotoFile' name='profilePhotoFile' accept='image/*'>
          </div>
          

          <div class='phone details'>
           
            <p>First name:
            <input type='text' name='Fname' value='".$row[2]."' > </p>
            <p>Last name:
            <input type='text'  name='Lname' value='".$row[3]."' > </p>
            <p>Phone number:
            <input type='text'  name='phonenumber'value='".$row[5]."' ></p>
            <p>Password:
            <input type='text'  name='pass' value='".$row[1]."' ></p>
  
          </div>
          
          
          <br>
          <br>
         <div class='editbutton'>
          <a href='ownerProfile.php'><button type='button'>Cancel</button></a>
          <a href='ownerEditProfile.php'><button type='submit'>Save</button></a>
        </div> 

      </div>
      <div class='fixed-footer' > 
          <p class = 'footer'>  <i class='fa fa-phone'></i>  +966566923332 &nbsp;&nbsp; <i class='fa fa fa-envelope'></i> <a href='mailto:petcare@gmail.com'>petcare@gmail.com</a> </p>     
       </div>");

      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
         $Fname=$_POST['Fname'];  
         $Lname=$_POST['Lname']; 
         $phonenumber=$_POST['phonenumber']; 
         $pass=$_POST['pass']; 
         $profilePhotoFile=$_POST['profilePhotoFile']; 

         $query = "UPDATE pet_owner SET password = '".$pass."',Fname = '".$Fname."', Lname = '".$Lname."',phone_no = '".$phonenumber."', photo = '".$profilePhotoFile."' WHERE email =  '$OwnerEmail'"; 
       
        $result = mysqli_query($database, $query);
        if($result)
           header("location: ownerProfile.php");
         
        else  
           echo "<script>alert('an error occurred, could not edit profile.')</script>";  
     }  
 ?>

  </body>
</html>