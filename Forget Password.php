<?php

    require "mail.php";

  if (!($database = mysqli_connect("localhost", "root", "")))
    die("<p>Could not connect to database</p>");

  if (!mysqli_select_db($database, "Pet_care"))
    die("<p>Could not open URL database</p>");

    if (isset($_POST['reset'])) {
      session_start();

        //check if the email already exist in owner or manager?
        $email = $_POST['Email'];

        $isExist = isEmailExists($database, "pet_owner", $email);
        $manager = false;
        $_SESSION['managerOrOwner'] = "pet_owner";  

        if($isExist != 1){
            $isExist = isEmailExists($database, "manager", $email);

            if($isExist != 1){            
            function_alert("Email dosent exist, sign up");
            exit();}

            $manager = true;
            $_SESSION['managerOrOwner'] = "manager";  

          }


        //if its already exist, create random number and store it as verifaction code in the database
        //manager
        $OTP = generateNumericOTP();
        //to store
        if ($manager){
            $query = "UPDATE manager SET Verification = '$OTP' WHERE email = '$email' ";

        }else{ //owner
            $query = "UPDATE pet_owner SET Verification = '$OTP' WHERE email = '$email' ";
        }

        $result = mysqli_query($database, $query);

        //send it to this email 
        $subject = "Password Reset Code";
        $message = "Your password reset code for Pet Care Website is : " . $OTP;
        send_mail($email,$subject,$message);
        $_SESSION['Email'] = $_POST['Email'];  
        //ask the user to enter this number, if its correct allow him to change the password
        header('Location: OTP.php');
      }
   
    function isEmailExists($db, $tableName, $email){
        // SQL Statement
        $sql = "SELECT * FROM ".$tableName." WHERE email='".$email."'";
        // Process the query
        $results = $db->query($sql);
        // Fetch Associative array
        $row = $results->fetch_assoc();
        // Check if there is a result and response to  1 if email is existing
        return (is_array($row) && count($row)>0);
      }

      function generateNumericOTP(){
          $generator = "1357902468";
          $result = "";
          for ($i = 1; $i <= 4; $i++) {
              $result .= substr($generator, (rand() % (strlen($generator))), 1);
            }
            // Returning the result 
            return $result;
        }

        function function_alert($message) {
      
            // Display the alert box
            echo "<script>alert('$message');</script>";
        }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Forget Password </title>
    <link rel="stylesheet" href="styles/forgetpassword.css">
  </head>

  <body>
    <div class="navbar">
        <a href= "Pet Care.html">Home </a>

    </div>
    <div class="container">

      <h4>Forgot your Password ? </h4>
      <form method="post" action = "Forget Password.php">
      <p> Enter the email address associated with your account <br><br>
      <label> 
        <input type="email" name="Email"  placeholder="email" size = "33">
       
        <p class="restbutton"><input name ="reset" type="submit" value="Update"></p>
        </label></p>
      </form>
      </div> 
      <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>
</html>