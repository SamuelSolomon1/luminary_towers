<?php
include("eventdb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="../CSS/event.css">
    <link rel="icon" type="image/x-icon" href="../images/logo/brandlogoygold.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Event booking</h2>
        First name<br>
        <input type="text" name="first_name"><br>
        Last Name<br>
        <input type="text" name="last_name"><br>
        age<br>
        <input type="number" name="age"><br>
        <input type="submit" value="submit" value="register">
        <div class="box-php">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
            $last_name = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_SPECIAL_CHARS);
            $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);

            if (empty($first_name)) {
                echo "Please enter your first name";
            } elseif (empty($last_name)) {
                echo "Please enter your last name";
            } elseif (empty($age)) {
                echo "Please enter your age";
            } else {
                $sql = "INSERT INTO `eventform` (`last_name`, `first_name`, `age`) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "ssi", $last_name, $first_name, $age);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "Your booking has been registered!";
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        }
        ?>
        </div>
    </form>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>