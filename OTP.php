<?php
if (!($database = mysqli_connect("localhost", "root", "")))
    die("<p>Could not connect to database</p>");

if (!mysqli_select_db($database, "Pet_care"))
    die("<p>Could not open URL database</p>");
    session_start();

    if(isset($_POST['validate'])){

      $code = $_POST['Code'];
      $emaill = $_SESSION['Email'];  
      
      if ($_SESSION['managerOrOwner'] == "manager") {
      $check_code = "SELECT Verification FROM manager WHERE email = '$emaill'"; 
      }
      else if ( $_SESSION['managerOrOwner'] == "owner"){
      $check_code = "SELECT Verification FROM owner WHERE email = '$emaill' ";
      }

      $result=mysqli_query($database,$check_code);
      $singleRow = mysqli_fetch_row($result);
      $OTP = $singleRow['0'];

      //Second we will move the user to next page 
      if ($OTP == $code)
      header('Location: NewPassword.php');
      
      else {
      echo "<script>alert('You have entered incorrect code, try again');</script>";

    }


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


      function function_alert($message) {
      
        // Display the alert box
        echo "<script>alert('$message');</script>";
    }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

   
    <link href="styles/forgetpassword.css?<?=filemtime("styles/forgetpassword.css")?>" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div class="navbar">
        <a href= "Pet Care.html">Home </a>

    </div>
    <div class="container1">
      <div class="title">Reset Password</div>

      <form method = "post" action = "OTP.php">
      
       <label id ="teVer">Verification code has been sent to your email, enter it:</label>

        <div class="field">
          <input type="text" name ="Code"required>

          <label>Received Code</label>
        </div>

  

        <div class="field" >
        <a href="Forget Password.php"><button type="button">Cancel</button></a>
                <a href=""><button type="submit">Update</button></a>
                

              

            </div>
        </p>
        </form>
    </div>
    <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>
</html>