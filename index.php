
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name=form  action="login.php" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"><br><br>
            <label>Password</label>
            <input type="passsword" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
        </form>
    </div>
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

    <title>Home</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Hello world</h1>


    

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>