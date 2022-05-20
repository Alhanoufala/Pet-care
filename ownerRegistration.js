const button = document.getElementById("b");
button.addEventListener('submit', (e) => {
    e.preventDefault();

    validateform();
    
});

function validateform(){  
    var Fname=document.getElementById("Fname"); 
    var Lname=document.getElementById("Lname");
    //var email=document.getElementById("email");
    //var phonenumber=document.getElementById("phonenumber");  
    var pass=document.getElementById("pass"); 
      
    if (Fname > 20 ){  
      alert("Fisrt name must be less than or equal to 20");  
      return false;  
    }
    if (Lname > 20 ){  
        alert("Last name must be less than or equal to 20");  
        return false;  
      }
    if(pass.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    } 
