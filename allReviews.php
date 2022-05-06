<!DOCTYPE >
<html> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/allReviews.css">
    <link rel="stylesheet" href="styles/ownerHeader.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reviews</title>

</head>
<body> 
    <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >
    <div class="navbar">
        <a href="Pet Care.html"><img  src="images/logout-32.png " alt="logou icon"> </a>
        <a href="managerContactUs.html">Contact Us</a>
    
      <a href="availableAppointments.php">Available appointments</a>
        <a href="appointmentRequests.php">Appointments requests</a>
        <a href="Services.html"> Services</a>
        <a href="ManagerAboutUs.php">About us</a>
        <a href="managerHomePage.html">Home</a>
    
        
        
      </div>
    <div class="testimonials">
        <div class="inner">
          <h1>All Reviews</h1>
          <div class="border"></div>
          <div class="row">
            <div class="col">
              <div class="testimonial">
                <img src="images/lulu.png"  class= "lulu" alt= "logo of pet care" >
                <div class="name">Leo</div>
       
                <p>Leo is feeling better now, thank you :) </p>
              </div>
            </div>
            
            <div class="col">
              <div class="testimonial">
                <img src="images/Luna.png"  class= "lulu" alt= "logo of pet care" >
                <div class="name">Luna</div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <p>Luna had a good time while i was away! she's in good shape, more energetic. 
                    would definitely come to you for boarding again. 
                    thank you! </p>
              </div>
            </div>
            <div class="col">
                <div class="testimonial">
                  <img src="images/dogR.png"  class= "lulu" alt= "logo of pet care" >
                  <div class="name">Lucy</div>
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <p>  Grooming service is great </p>
                </div>
              </div>
              <div class="col">
                <div class="testimonial">
                  <img src="images/catR2.png"  class= "lulu" alt= "logo of pet care" >
                  <div class="name">Loki</div>
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <p> Very clean, would definitely visit again!  </p>
                </div>
              </div>
          
            <div class="col">
              <div class="testimonial">

      <?php
  
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
      die( "<p>Could not connect to database</p>" );
    if ( !mysqli_select_db($database, "Pet_care" ) )
      die( "<p>Could not open URL database</p>" );
    $query="SELECT * FROM Reviews";
    $result=mysqli_query($database, $query);
    
    
if ($result) {
   while ($data = mysqli_fetch_row($result)) {
       print(" <p> ".$data[0]." </p> <p> ".$data[1]."'s Owner </p> <p> <center> ".$data[2]."</center></p>");
      }
}
    
      ?>

      
          </div>
        </div>
      </div>
</body>
</html>