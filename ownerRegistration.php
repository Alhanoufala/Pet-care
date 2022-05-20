<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="styles/Registration.css">
    <link href="styles/Registration.css?<?=filemtime("styles/Registration.css")?>" rel="stylesheet" type="text/css" />
    <script>const form = document.getElementById('form');
const Fname = document.getElementById('Fname');
const Lname = document.getElementById('Lname');
const email = document.getElementById('email');
const phonenumber = document.getElementById('phonenumber');
const pass = document.getElementById('pass');

form.addEventListener('sbmit', (e) => {
  e.preventDefault();

  valdateForm();
} );

function valdateForm() {
  const FnameValue = Fname.value.trim();
  const LnameValue = Lname.value.trim();
 // const mailValue = email.value.trim();
 // const phonenumberValue = phonenumber.value.trim();
 // const passValue = pass.value.trim();

  if(FnameValue.length > 20 ){
    setErrorFor(FnameValue, 'Fisrt name must be less or equal to 20 characters')
  } else{
    setSuccessFor(FnameValue)
  }
  if(LnameValue.length > 20 ){
    setErrorFor(LnameValue, 'Last name must be less or equal to 20 characters')
  } else{
    setSuccessFor(FnameValue)
  }

}

function setErrorFor(input, message){
  const formControl = input.parentElement; //.form-control
  const small = formControl.querySelector('small');

  small.innerText = message;

  formControl.className = 'form-control error';

}

function setSuccessFor(input){
  const formControl = input.parentElement; //.form-control
  formControl.className = 'form-control success';

}</script>

  </head>

  <body>   
    <div class="navbar"> <a href="Pet Care.html">Home</a></div>
    <div class="container">
      <h3>Register</h3>
        <form method="post" id = "form">
          <div class="form-control">
            <input type="text" name="Fname" id="Fname" placeholder="First name">
            <small>Error message</small></div>
            <div class="form-control">
            <input type="text" name="Lname" id="Lname" placeholder="Last name" require>
            <small>Error message</small></div>
            <input type="text" name="email" id="email" placeholder="Email" require>
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone number" require>
            <input type="password" name="pass" id="pass" placeholder="Password" require>
             
            <div class="content">
              <div class="radio">
               <label for="gender">Gender:</label>
                  <input type="radio" name="gender" id="gender" value="male" required>
                  <label for="male">male</label>
                  <input type="radio" name="gender" id="gender" value="female" required>
                  <label for="female">female</label>
              </div></div>
          

            <p>Add profile photo (optional)</p>
            <input type="file" id="profilePhotoFile" name="profilePhotoFile" accept="image/*">

           <div class="registerbut">
       <a href='logIn.php'><button class = 'l' type='button'>Cancel</button></a>
            <a href="ownerRegisration.php"><button class= "l2" type="submit" id="b">Register</button></a>

           </div>
           
        
        </form>
        
   
 
    </div>
    <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      if (!( $database = mysqli_connect( "localhost", "root", "" )))
         die( "<p>Could not connect to database</p>" );
 
      if (!mysqli_select_db( $database, "Pet_care" ))
         die( "<p>Could not open URL database</p>" );
   
         $Fname=$_POST['Fname'];  
         $Lname=$_POST['Lname'];
         $email=$_POST['email']; 
         $phonenumber=$_POST['phonenumber']; 
         $pass=$_POST['pass']; 
         $gender=$_POST['gender']; 
         $profilePhotoFile=$_POST['profilePhotoFile']; 

         $query="INSERT INTO pet_owner (email, password, Fname, Lname, gender, phone_no, photo ) VALUES ('".$email."','".$pass."','".$Fname."','".$Lname."','".$gender."','".$phonenumber."','".$profilePhotoFile."');";


        if(mysqli_query($database, $query) )
         {  header("location: login.php");
            }
        else  
         {  echo "<script>alert('an error occurred, could not register.')</script>"; 
          die(mysqli_error($database));
         }
     }  
 ?>
  </body>

</html>
