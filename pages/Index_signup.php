
<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/signup.css">

    <title>Log in Test</title>
</head>
<body>
    <div id="form">
        <h1 id="heading">SignUp Form</h1><br>
        <form name="form" action="signup.php" method="POST">
            <i class="fa-solid fa-user"></i>
            <input type="text" id="firstname" name="firstname" placeholder="Enter firstname" required>
            <input type="text" id="lastname" name="lastname" placeholder="Enter lastname" required><br><br>
            <i class="fa-solid fa-user"></i>
            <input type="text" id="contactnumber" name="contactnumber" placeholder="Enter contact no." required>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="user" name="pass" placeholder="Create Password" required><br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required><br><br>
            <input type="submit" id="btn" value="SignUp" name="submit"/>
        </form>
        <a href="./index.php"> <button>Already have an account</button></a>
           
    </div>
</body>
</html>