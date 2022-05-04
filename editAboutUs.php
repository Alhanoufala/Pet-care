
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
            <form method="POST" action = "editAboutUs.php">
                Label:
                <input type="text" name ="label" > 

                Description:
                <input type="text" name ="Description"> 
               
                    photo: 
                    <input type="file" id="PhotoFile" name="PhotoFile">
                    Location :
                
                 <input type="text" name ="location" value="location"> 


    
               <div class="editbut">
                <a href="ManagerAboutUs.php"><button type="button">Cancel</button></a>
                <a href="ManagerAboutUs.php"><button type="submit">Update</button></a>

               </div>
                
            </form>
            
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                    die( "<p>Could not connect to database</p>" );

                 if ( !mysqli_select_db( $database, "Pet_care") )
                    die( "<p>Could not open URL database</p>" );

                    $label = $_POST["label"];
                    $description =  $_POST["Description"];
                    $photo = $_POST["PhotoFile"];
                    $location =$_POST["location"];
                    $query = "UPDATE aboutus SET label ='".$label."',description = '".$description."',photo ='".$photo."',location='".$location."' WHERE id=1;";
                // $query=" UPDATE aboutus SET ( label = '.$label ' , description = '.$description ' , photo = '.$photo ' , location = '.$location ' );" ;
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