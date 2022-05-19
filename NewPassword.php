<?php

if (!($database = mysqli_connect("localhost", "root", "")))
    die("<p>Could not connect to database</p>");

if (!mysqli_select_db($database, "Pet_care"))
    die("<p>Could not open URL database</p>");
    session_start();

    if(isset($_POST['cahnge'])){
        $pass = $_POST['Password'];
        $rePass = $_POST['rePassword'];
        $email = $_SESSION['Email'];  
        
        
        if ($pass !==  $rePass) {
            function_alert("Password mismatch!, Try again");
        }else{   
            if ($_SESSION['managerOrOwner'] == "manager") {
                $query = "UPDATE manager SET password = '$pass' WHERE email = '$email' ";    
            }else if ( $_SESSION['managerOrOwner'] == "pet_owner"){
                $query = "UPDATE pet_owner SET password = '$pass' WHERE email = '$email' ";    
            }

            $result = mysqli_query($database, $query);
            echo "<script>alert('You have entered incorrect code, try again');</script>";
            header('Location: logIn.php');

            //function_alert("Password has been changed successfully!");
            //redirect error???
        }
         
         
        


    }


    function function_alert($message) {
      
        // Display the alert box
        echo "<script>alert('$message');</script>";
    } 
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="styles/forgetpassword.css">
    <link href="styles/forgetpassword.css?<?=filemtime("styles/forgetpassword.css")?>" rel="stylesheet" type="text/css" />

  </head>
  <body>
  <div class="navbar">
        <a href= "Pet Care.html">Home </a>

    </div>
    <div class="container2">
      <div class="title">Reset Password</div>

      <form method = "post" action = "NewPassword.php">

        <div class="field">
            <input type="password" size = "18" name ="Password"required>
            <label> Password </label>
          </div>
   
        <div class="field">
          <input type="password" size = "18" name ="rePassword"required>
          <label> ReWrite Password </label>
        </div> 

  
    
          <div class="field" >
          <a href="Forget Password.php"><button type="button">Cancel</button></a>
                
                <input class =  "update" name ="cahnge" type="submit" value="Update">
                

            </div>
        </p>
        </form>
    </div>
    <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>
</html>