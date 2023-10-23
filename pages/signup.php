<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contactnum = $_POST['contactnumber'];
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

    // Check if the username already exists
    $sql = "SELECT * FROM guest_info WHERE first_name='$firstname' OR last_name='$lastname' OR contact_no='$contactnum' OR email_address='$email'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    if ($count_user == 0) {
        if ($password == $cpassword) {
            // Insert the new user
            $sql = "INSERT INTO guest_info(unit_number, first_name, last_name, contact_no, email_address, password, access) VALUES('none', '$firstname', '$lastname', '$contactnum', '$email', '$password', 'guest')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: index.php");
            }
        } else {
            echo '<script>
            alert("Input passwords do not match");
            window.location.href="index_signup.php";
            </script>';
        }
    } else {
        echo '<script>
        window.location.href="index.php";
        alert("Username, contact number, or email already exists!");
        </script>';
    }
}
?>
