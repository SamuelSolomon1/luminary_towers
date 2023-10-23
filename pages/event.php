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
    <!-- navbar starts -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="main.html">
                <img src="../images/logo/brandlogoygold.png" alt="Logo" id="navbar-logo">
                LUMINARY TOWERS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./community.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ammenities.php">AMMENITIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">CONTACT</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Event booking</h2>
        First name<br>
        <input type="text" name="first_name"><br>
        Last Name<br>
        <input type="text" name="last_name"><br>
        Age<br>
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
    <!-- footer starts -->
    <footer class="custom-footer py-4 mt-4">
        <div class="container">
            <div class="row">

                <!-- Column 1 -->

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 textStyle ">
                    <strong>BUSINESS HOURS</strong><br>
                    <p>Monday to Friday: 9:00 AM - 12:00 PM, 1:00 PM - 6:00 PMSaturday: 9:00 AM - 1:00 PM
                        Sunday and holidays: Closed</p></a><br><br>
                    <strong>ADDRESS</strong>
                    <p>2/F Tower 1, Lumina Tower 31st Ave, BGC Taguig City, Philippines</p><br>
                </div>

                <!-- Column 2 -->

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 textStyle">
                    <strong>YOU MAY REACH US</strong><br>
                    <p>Admin: (02) 7718-4364Engineering: (02) 7000-2381 <br>
                        Engineering: (02) 7000-2381<br>
                        Finance: (02) 8711-5598,(0998) 936-3766 (Smart), <br>(0967) 203-9054 (Globe) </p><br>

                </div>


                <!-- Column 3 -->
                <div class="col-lg-4 col-md-6 textStyle " id="footBranding">
                    <!-- <img src="../images/logo/Untitled design (6).png" alt="" id="footerLogo"> -->
                    <strong>CUSTOMER SERVICE</strong><br>
                    <p>
                        Luminary Development CorporationG/F Tower A, Two E-Com CenterOcean Drive, Mall Of Asia Complex Pasay City, 1300, PhilippinesPhone: (02) 8858-0300Email: customerservice@lumiratowers.com.
                    </p><br>

                </div>
            </div>

        </div>

    </footer>

    <div class="col-lg-12 mb-lg-0 text-white text-center" id="copyRight">

        <div>
            <p id="copyNote">© 2016 - 2023 Luminary Towers Condominium Corporation. All rights reserved.</p>
        </div>
    </div>
    <!-- footer ends -->

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>