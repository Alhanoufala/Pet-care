
    <!DOCTYPE html>

    <head>
        <meta charset = "utf-8">
        <title>Edit About Us </title>
        <link rel="stylesheet" href="styles/editaboutus.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        
        <script src="editAboutUs.js"></script>

    </head>
    <body>
        <div class="navbar"></div>
        <div class="container">
            <h2>Edit About us </h2>
            <form method="post" action = "editAboutUs.php">
                Label:
                
                <input type="text" name ="label" value="About us"> 

                Description:
                <textarea name = "Description" id="Description"rows="20" cols = "66">Welcome to our Petcare Veterinary Clinic! Where animals and their owners are valued and cherished. 
                    The clinic first opened its doors in Riyadh in January 2022. In Saudi Arabia, our clinic is the first of its kind. Our staff has been offering unique veterinary medical services and compassion to pets as a primary focus. 
                    We are here to keep your pets healthy by treating each client as if they were family and each pet as if it were our own. 
                    Our mission is to provide quality, caring, and compassionate veterinary care to pet owners in addition to detecting diseases and providing outstanding health care. We specislize in the care of cats , dogs, rabbits, birds, fish, and turtles.</textarea>

                    photo: 
                    <input type="file" id="PhotoFile" name="PhotoFile">
                    Location :
                
                <input type="text" name ="location" value="location"> 


    
               <div class="editbut">
                <a href="ManagerAboutUs.html"><button type="button">Cancel</button></a>
                <a href="ManagerAboutUs.html"><button type="button" id = "Update">Update</button></a>

               </div>
                
            </form>
            
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                    die( "<p>Could not connect to database</p>" );

                 if ( !mysqli_select_db( $database, "Pet_care") )
                    die( "<p>Could not open URL database</p>" );

                    $label =  $_POST["label"];
                    $description =   $_POST["Description"];
                    $photo =  $_POST["PhotoFile"];
                    $location =$_POST["location"];

                 $query=" UPDATE aboutus SET ( Label = '.$label ' , Description = '.$description ' , photo = '.$photo ' , location = '.$location ' ) ;" ;
                 $result = mysqli_query($database, $query);
                 if($result)
                        header("location: ManagerAboutUs.php");
            
                    else
                        echo "An error occured while completing your request.";
             }
        ?>
       
     
        </div>
        <img  src= "images/logo.png"  class = "logo" alt="logo of pet care">
       
    
  </body>
</html>