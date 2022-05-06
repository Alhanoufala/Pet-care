<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK New Appointment</title>
    <link rel="stylesheet" href="styles/newApp.css">

</head>
<body>
  <!--<h1 id="Book">Book Now</h1>-->
    <div class = "container">
            
                <h1 id="n">New Appointment</h1>
           

            <div>
             <label for="petName">Name</label>
             <input type="text"  id="petName">   
            </div>

            <div>
                <label >Service
                    <select name="services">
                        <option selected>Choose </option>
                    <option>Checkup</option>
                    <option>Grooming</option>
                    <option>Boarding</option>
                
            </select>
            </label>
            </div>

            <div>
                <label for="note">Note</label>
                <input type="text"  id="note">   
               </div>
        
               <div>
                <label for="dob">Date</label>
                <input type="date"  id="dob">   
               </div>

               <div>
                <label for="time">Time</label>
                <input type="time" id="appt" name="appt"
                 min="09:00" max="18:00" required>

                
       
               
               </div>
               
               <p><a href="ownerHomePage.html"><button class="butt" type="button">Cancel</button></a><a href="#"><button class="butt" type="button">Add</button></a>
            </div>
           
            <!--<img  src= "images/dog-layan (1).png"  class = "dog" alt="dog"> -->
         
      <div class="navbar">
        <a href = "ownerProfile.html"><img src = "images/Profile1.png"  class= "profile"  alt= "Profile image" ></a>
      <a href="ownercontactUs.html">Contact Us</a>
      <a href = "myPets.html">My Pets</a>
      <a href = "AppointmentRequest.html">My Appointments</a>
      <a href = "newAppointment.html">Book Appointment</a>
      <a href="ownerServices.html" class= "active"> Services</a>
      <a href="OwnerAboutUs.html">About us</a>
      <a href="ownerHomePage.html">Home</a>

         </div> 
        
                 <img src="images/logo.png"  class= "logo" alt= "logo of pet care" >

    
</body>
</html>