<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>


<!-- NavBar Starts Here -->

<!-- NavBar Ends Here -->
<div class="video-background">
    <video autoplay muted loop id="video-bg">
                <source src="../video/vbg.mp4" type="video/mp4">
            </video>
    </div>
    <div id="form">
        <center><h1>Login Form</h1></center><br>
        <form name=form  action="login.php" onsubmit="return isvalid()" method="POST">
            <label>Email add:</label>
            <input type="text pass" id="user" name="user"><br><br>
            <label>Password&nbsp;</label> 
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
        </form><br>
        <a href="./Index_signup.php"> <button class="custom-button">Create Account</button></a>
    </div>

    <!-- Footer Starts Here -->

            <div class="col-lg-12 col-md-6 mb-4 mb-lg-0" id="copyRight">
              
              <div>
                <center>  <p id="copyNote">© 2016 - 2023 Luminary Towers Condominium Corporation. All rights reserved.</p></center>
              </div>
          </div>

          <div class="overlayeffect"></div>

    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length==0 && pass.length==0) {
                alert("username and password field is empty!!!")
                return false;
            } else {
                if(user.length==0) {
                alert("username field is empty!!!");
                return false;
                }
           
                if(pass.length==0) {
                alert("password field is empty!!!");
                return false;
                }
            }
        }
    </script>
</body>
</html>