<!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
  <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>

    <h2>Login Form</h2>

    <form action="../login/login_process.php" method="POST" id="login_form>


      <div class="container">
         <!-- email -->
        <label for="email"><b>email</b></label>
        <input type="text" placeholder="Enter email" name="customer_email" required id ="login_email"></br>
        <div id="error_msg"></div>

        <!-- password -->
        <label for="psw"><b>Password</b></label>
        <input type="Password" placeholder="Enter Password" name="customer_pass" required id ="login_password">
        <div id="error_msg"></div>
        
        <!-- submit  -->
        <button type="submit" name = "submit">Login</button>
        <div class="container">
        <button type="submit" class="cancelbtn" name="cancel"><a href="../index.php" target="_blank">Cancel</a></button>
        <button type="submit" class="cancelbtn" name="submit2"><a href="../login/register.php" target="_blank">Register</a></button>

      </div>

    </form>
    <script src="../js/apps.js"></script>

  </body>
  </html>


  