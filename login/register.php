<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta name="viewport">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body onload='document.form1.customer_pass.focus(); document.form1.customer_contact.focus()'>
  
    <!--  //user register form -->
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <form method="POST" action = "./register_process.php" id="regis_form" class="" name="form1">
        <label for="firstname"><b>Firstname</b></label></br>
        <input type="text" placeholder="Enter firstname" name="customer_name" required  id="first_name"></br></br>
        <div id="error_msg_name"></div>

    <!-- email -->
        <label for="email"><b>Email</b></label></br>
        <input type="text" placeholder="Enter Email" name="customer_email" required id="register_email"></br></br>
        <div id="error_msg"></div>

    <!-- password -->
        <label for="psw"><b>Password</b></label></br>
        <input type="password" placeholder="Enter Password" name="customer_pass" required id="register_password"></br></br>
        <div id="error_msg"></div>

    <!-- country -->
        <label for="country"><b>Country</b></label></br>
        <input type="text" placeholder="country" name="customer_country" required id="register_country"></br></br>
        <div id="error_msg_country"></div>

    <!-- city -->
        <label for="city"><b>City</b></label></br>
        <input type="text" placeholder="city" name="customer_city" required id="register_city"></br></br>
        <div id="error_msg_city"></div>

    <!-- contact -->
        <label for="contact"><b>Contact</b></label></br>
        <input type="text" placeholder="contact" name="customer_contact" required id="register_contact"></br></br>
        <div id="error_msg_contact"></div>

    <!-- profile picture -->
        <label for="profile"><b>Profile picture</b></label></br>
        <input type="file" accept="image/*"  />


        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
        <button type="submit" class="registerbtn" name = "submit" onclick="CheckPassword(document.form1.customer_pass);CheckContact(document.form1.customer_contact)">Register</button>
        <div class="position">
          <button><a href="login.php" class="registerbtn" target="_blank">login</a></button>
          <button><a href="../index.php" class="registerbtn" target="_blank">Cancel</a></button>
        </div>
        
         

    </form>

    <script src="../js/apps.js"></script>
     <script>
        function CheckPassword(inputtxt) 
        { 
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,20}$/;
        event.preventDefault();
        if(inputtxt.value.match(passw)) 
        { 
        return true;
        }
        else
        { 
        alert('Password must be at last seven characters and contain at least one numeric digit, one uppercase and one lowercase letter')
        return false;
        }
        }

        /* function CheckContact(contacts) 
        { 
        var cont = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{9,20}$/;
        event.preventDefault(); 
        if(contacts.value.match(cont)) 
        { 
        return true;
        }
        else
        {
        alert('Contact must be at last ten characters')
        return false;
        }
        } */

    </script> 
</body>
</html>



