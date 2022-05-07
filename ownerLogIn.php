<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>LogIn</title>
    <link rel="stylesheet" href="styles/login.css">
  </head>


  <body>
    <div class="navbar">
      <a href= "Pet Care.html">Home </a>

  </div>
  </div>
    <div class="container">
      <h2>Login</h2>
      <form method="post" >
          <input type="text" name="email" id="email" placeholder="email">
          <input type="password" name="pass" id="pass" placeholder="password">

         <div class="loginbut">
          
          <a href="ownerHomePage.html"><button type="submit">Login</button></a>
         </div>
         
          
      </form>
      
       <p>Forgot password?<a href="Forget Password.html">  Click Here</a></p>
       <p>New user?<a href="ownerRegistration.php">   SignUp</a></p>
 

  </div>

 
  <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
  </body>

  <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    if (!( $database = mysqli_connect( "localhost", "root", "" )))
        die( "<p>Could not connect to database</p>" );

    if (!mysqli_select_db( $database, "Pet_care" ))
        die( "<p>Could not open URL database</p>" );
  
        $email=$_POST['email'];  
        $password=$_POST['pass'];  
        $query="select * from pet_owner WHERE email='$email'AND password='$password'";  

        $result=mysqli_query($database, $query);  

        if($row=mysqli_fetch_row($result)) {  
            header("location: ownerHomePage.html");

        }
        
        else  
          echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
?>

</html>
