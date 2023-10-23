<?php

if(!isset($_SESSION)) {
    session_start();
}
    include("connection.php");
    
    if(isset($_POST['submit'])){
        // This is essential part to enclose it inside the submit. As it will only redirect us into this login logic once we submit the click button.
        $usersname = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM members_data where email_address = '$usersname' and password = '$password'
        UNION 
        SELECT * FROM guest_info WHERE email_address = '$usersname' AND password = '$password' ";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1) {
            $_SESSION["UserLogin"]= $row["access_type"];
            header("Location: home.php");
        } else {
            echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password!!!");
            </script>';
        }
    }
    
?>